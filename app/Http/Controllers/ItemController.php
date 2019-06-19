<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function processItemInfo(Request $request) {
        $item_name = trim($request->input('productName'));
        $item_qty = (int)trim($request->input('productQty'));
        $item_cost = (float)trim($request->input('productCost'));

        // @TODO: implement laravel validations. Been a while since using so not using here.

        // assume inputs are correct

        $data = ['item_name' => $item_name, 'item_qty' => $item_qty, 'item_cost' => $item_cost];

        Storage::disk('local')->put('product.json', json_encode($data));

        $request->session()->flash('success', 'The poduct was created successfully.');
        return redirect()->back();
    }
}
