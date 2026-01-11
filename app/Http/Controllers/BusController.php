<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusRoute;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Get buses by origin and destination districts
     */
    public function searchRoutes($originDistrictId, $destinationDistrictId)
    {
        $routes = BusRoute::where('origin_district_id', $originDistrictId)
            ->where('destination_district_id', $destinationDistrictId)
            ->with('bus', 'originDistrict', 'destinationDistrict')
            ->get();

        return response()->json($routes);
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
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        //
    }
}
