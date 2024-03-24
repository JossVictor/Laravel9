<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        $division = new Division();
        $division->division_name = "AFC North";
        $division->division_logo = "AFC";
        $division->superbowl_titles_in_division = 30;
        $division->save();

        $division = new Division();
        $division->division_name = "AFC South";
        $division->division_logo = "AFC";
        $division->superbowl_titles_in_division = 30;
        $division->save();

        $division = new Division();
        $division->division_name = "AFC West";
        $division->division_logo = "AFC";
        $division->superbowl_titles_in_division = 30;
        $division->save();

        $division = new Division();
        $division->division_name = "AFC East";
        $division->division_logo = "AFC";
        $division->superbowl_titles_in_division = 30;
        $division->save();

        $division = new Division();
        $division->division_name = "NFC North";
        $division->division_logo = "NFC";
        $division->superbowl_titles_in_division = 30;
        $division->save();

        $division = new Division();
        $division->division_name = "NFC South";
        $division->division_logo = "NFC";
        $division->superbowl_titles_in_division = 30;
        $division->save();

        $division = new Division();
        $division->division_name = "NFC West";
        $division->division_logo = "NFC";
        $division->superbowl_titles_in_division = 30;
        $division->save();

        $division = new Division();
        $division->division_name = "NFC East";
        $division->division_logo = "NFC";
        $division->superbowl_titles_in_division = 30;
        $division->save();
    }
}
