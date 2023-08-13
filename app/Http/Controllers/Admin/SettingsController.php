<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController
{
    public function index()
    {
        return view('panel.admin.settings.index');
    }

    public function update(Request $request)
    {
        Settings::updateSome('submit-score', $request->post('submit-score') == 'on');

        return redirect()->back()->with('success', 'تنظیمات با موفقیت ذخیره شد.');

    }
}
