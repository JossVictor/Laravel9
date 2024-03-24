<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        $conference = new Conference();
        $conference->conference_name = "American Footbal Conference";
        $conference->conference_logo = "AFC";
        $conference->superbowl_titles_in_conference = 30;
        $conference->save();

        $conference = new Conference();
        $conference->conference_name = "National Footbal Conference";
        $conference->conference_logo = "NFC";
        $conference->superbowl_titles_in_conference = 30;
        $conference->save();
    }
}
