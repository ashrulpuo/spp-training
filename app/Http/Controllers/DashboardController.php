<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Lookup;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function graph()
    {
        $positions = Lookup::all();
        $colors = [
            "#FF0000", // Red
            "#00FF00", // Green
            "#0000FF", // Blue
            "#FFFF00", // Yellow
            "#FF00FF", // Magenta
            "#00FFFF", // Cyan
            "#800080", // Purple
            // Add more colors as needed
        ];
        $data = [];
        $label = [];

        foreach ($positions as $key => $position) {
            $label[] = substr($position->value, -4);
            $data[] = App::where('position_category_id', $position->id)->count();
        }

        return view('dashboard', [
            'data' => $data,
            'label' => $label,
        ]);
    }
}
