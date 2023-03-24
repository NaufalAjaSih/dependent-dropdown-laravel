<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class CityDropdownController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $province = Province::findOrFail($request->id);
        $cityFiltered = $province->city->pluck('name', 'id');

        return response()->json($cityFiltered);
    }
}
