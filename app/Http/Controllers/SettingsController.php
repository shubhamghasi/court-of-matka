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
            'app_name' => 'nullable|string|max:255',
            'upi_id' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'doubt_check_amount' => 'nullable|string',
            'trend_check_amount' => 'nullable|string',
            'whatsapp_number' => 'nullable|numeric',
            'top_baner_text' => 'nullable|string',
            'google_search_console_tag' => 'nullable',
        ]);

        $data = $request->only([
            'app_name',
            'upi_id',
            'meta_title',
            'meta_description',
            'trend_check_amount',
            'doubt_check_amount',
            'whatsapp_number',
            'top_baner_text',
            'google_search_console_tag'
        ]);

        foreach ($data as $name => $value) {
            Option::updateOrCreate(
                ['option_name' => $name],
                ['option_value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}
