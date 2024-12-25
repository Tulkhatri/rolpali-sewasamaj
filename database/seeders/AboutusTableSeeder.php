<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aboutuses')->insert([
            'aboutus_title' => 'About Us',
            'aboutus_detail' => 'Details',
            'aboutus_image' => '',
            'chairman_image' => '',
            'chairman_message' => 'Message From Chairman',
            'vision_title' => 'Vision Title',
            'vision_detail' => 'Vision Details',
            'vision_image' => '',
            'mission_short_quote' => '',
            'mission1_title' => '',
            'mission1_detail' => '',
            'mission1_image' => '',
            'mission2_title' => '',
            'mission2_detail' => '',
            'mission2_image' => '',
            'mission3_title' => '',
            'mission3_detail' => '',
            'mission3_image' => '',

        ]);
    }
}
