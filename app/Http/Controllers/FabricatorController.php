<?php

namespace App\Http\Controllers;

use App\Models\Fabricator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FabricatorController extends Controller
{
    public function get(Request $request)
    {
        $data = Fabricator::all();
        return Response::json($data, 200);
    }
}
