<?php

namespace App\Http\Controllers;

use App\Models\Fabricator;
use App\Models\ModelProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ModelController extends Controller
{
    public function get(Request $request)
    {
        $fabricator = Fabricator::where('alias', $request->fabricator)->first();
        $data = ModelProduct::where('fabricator_id', $fabricator->id)->get();
        return Response::json($data, 200);
    }
}
