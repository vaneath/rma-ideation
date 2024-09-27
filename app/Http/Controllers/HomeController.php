<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        abort(404);
    }

    public function root()
    {
        if (request()->user()->isAdmin()) {
            return redirect()->route('records.index');
        }
        return view('wallets');
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfile(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'gender' => ['nullable', 'string', 'max:255'],
            'age' => ['nullable', 'integer'],
            'job_title' => ['nullable', 'string', 'max:255'],
            'phone_number' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
        ]);

        // Get the authenticated user
        $user = $request->user();

        // Prepare the data for update, excluding null values
        $data = $request->only(['first_name', 'last_name', 'gender', 'job_title', 'age', 'phone_number', 'email']);

        // Update only if there are changes
        $user->fill($data);
        if ($user->isDirty()) {
            $user->save();
        }

        // Check if there are no more null columns and add 30 points if true
        if (!$user->hasNullSpecificColumns() && !$user->point_awarded) {
            $user->increment('points', 30);
            $user->point_awarded = true;
            $user->save();
        }


        return redirect()->back()->with('message', 'User Details Updated successfully!');
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }
}
