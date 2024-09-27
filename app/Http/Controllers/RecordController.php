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
        return view('records.index');
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'job_title' => 'required|string|max:255',
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
}
