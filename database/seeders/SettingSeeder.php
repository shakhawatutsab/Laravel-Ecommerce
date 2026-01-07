<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Logo & copyright text
        Setting::create([
            'key' => 'site_logo',
            'settings_value' => 'default_logo.png',
        ]);
        Setting::create([
            'key' => 'copyright_text',
            'settings_value' => '© 2026 Your Company. All rights reserved.',
        ]);
    }
}
