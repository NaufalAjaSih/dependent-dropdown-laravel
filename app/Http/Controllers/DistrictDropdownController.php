<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class DistrictDropdownController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $city = City::findOrFail($request->id);
        $districtFiltered = $city->district->pluck('name', 'id');

        return response()->json($districtFiltered);
    }
}
