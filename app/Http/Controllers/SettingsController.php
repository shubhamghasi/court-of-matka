<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function edit()
    {
        $options = Option::pluck('option_value', 'option_name')->toArray();
        return view('admin.settings', compact('options'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'app_name' => 'required|string|max:255',
            'upi_id' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        $data = $request->only(['app_name', 'upi_id', 'meta_title', 'meta_description']);

        foreach ($data as $name => $value) {
            Option::updateOrCreate(
                ['option_name' => $name],
                ['option_value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}
