<?php

namespace App\Http\Controllers;

use App\Models\Fabricator;
use App\Models\ModelProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    public function get(Request $request)
    {
        $data = Product::when($request->d, function($query) use ($request) {
            $query->where('diameter', '=', $request->d);
        })
            ->when($request->w, function($query) use ($request) {
                $query->where('width', '=', $request->w);
            })
            ->when($request->h, function($query) use ($request) {
                $query->where('height', '=', $request->h);
            })
            ->paginate($request->perPage, ['*'], 'page', $request->pageNumber);
        return Response::json($data, 200);
    }

    public function getPage(Request $request)
    {
        $fabricator = Fabricator::where('alias', $request->fabricator)->first();
        $model = ModelProduct::where('fabricator_id', $fabricator->id)->where('alias', $request->model)->first();
        $products = Product::where('model_id', $model->id)->get();
        return Response::json($products, 200);
    }

    public function getSingle(Request $request)
    {
        $fabricator = Fabricator::where('alias', $request->fabricator)->first();
        $model = ModelProduct::where('fabricator_id', $fabricator->id)->where('alias', $request->model)->first();
        $product = Product::where('model_id', $model->id)->where('alias', $request->product)->first();
        return Response::json($product, 200);
    }
}
