<?php

namespace App\Http\Controllers;
use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index() {
        $merchandises = Merchandise::orderBy('brand')->get();
        return response()->json($merchandises);
    }

    public function show(Merchandise $merchandise) {
        return response()->json([
            'status' => 'OK',
            'data' => $merchandise,
        ]);
    }
}
