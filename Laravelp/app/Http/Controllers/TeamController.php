<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = DB::table('teams')
                    ->join('conferences', 'conferences.id', '=', 'teams.conference_id')
                    ->join('divisions', 'divisions.id', '=', 'teams.division_id')
                    ->join('cities', 'cities.id', '=', 'teams.city_id')
                    ->select('teams.id', 'teams.name', 'teams.titles', 'teams.logo', 'conferences.conference_name', 'divisions.division_name', 'cities.city_name')
                    ->get();;

        //dd($teams);

        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
