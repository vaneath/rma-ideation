<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;

class DiscountController extends Controller
{
    public function index()
    {
        return view('discounts.index');
    }

    public function create()
    {
        return view('discounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image_url' => 'nullable|url',
            'description' => 'nullable|string',
            'type' => 'required|in:percent,fixed',
            'value' => 'required|integer',
            'point_cost' => 'required|integer',
            'quantity' => 'required|integer',
            'section_id' => 'required|exists:sections,id',
        ]);

        Discount::create($request->all());

        return redirect()->route('sections.index');
    }

    public function edit(Discount $discount)
    {
        return view('discounts.edit', compact('discount'));
    }

    public function update(Request $request, Discount $discount)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image_url' => 'nullable|url',
            'description' => 'nullable|string',
            'type' => 'required|in:percent,fixed',
            'value' => 'required|integer',
            'point_cost' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        $discount->update($request->all());

        return redirect()->route('sections.index');
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();

        return redirect()->route('sections.index');
    }
}
