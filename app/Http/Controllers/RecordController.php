<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('records.index', [
            'records' => Record::all()
        ]);
    }

    public function show(Record $record)
    {
        return view('records.show', compact('record'));
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'district' => 'required|in:Daun Penh,Chamkar Mon,Tuol Kork,Prampi Makara,Dangkao,Mean Chey,Russey Keo,Sen Sok,Pur Senchey,Chbar Ampov,Boeng Keng Kang,Chroy Changvar',
                'driving_purpose' => 'required|in:Work/School,Travel,Vacation,Shopping,Family Trip,Pick Up,Delivery,Other',
                'driving_frequency' => 'required|in:Daily,Once in a week,Several times a week,A few times per month,Rarely',
                'favorite_car_feature' => 'required|in:Color,Speed,Fuel Efficiency,Comfort,Safety,Technology',
                'car_fuel' => 'required|in:Gasoline,Diesel,Electric,Hybrid',
                'car_type' => 'required|in:Sedan,SUV,Truck,Van,Sports',
                'car_make' => 'required|string|max:255',
                'car_model' => 'required|string|max:255',
                'car_year' => 'required|string|max:4',
                'car_color' => 'required|in:Black,White,Silver,Red,Blue,Green,Yellow,Orange,Purple,Brown,Gray,Pink',
                'user_id' => 'required|exists:users,id',
            ]);

            // Store the data
            Record::create($validatedData);

            return redirect()->route('records.index')->with('success', 'Survey submitted successfully!');
        } catch (\Exception $e) {
            // Log the error or handle it accordingly
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $record = Record::findOrFail($id);
        $user = $record->user;

        if ($request->input('action') == 'approve') {
            $record->review_status = 'approved';
            $user->points += $request->input('score');
            $user->save();
        } else {
            $record->review_status = 'rejected';
        }

        $record->save();

        return redirect()->back()->with('success', 'Record status updated successfully.');
    }
}
