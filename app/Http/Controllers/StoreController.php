<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
Class StoreController extends Controller
{
    public function create(Request $request, Store $store)
    {
        $item = $store->create($request->all());
        $data=$request->all();
        $payment_details = [
            'tAmt' => (int)$data['amount'],
            'amt' => (int)$data['amount'],
            'pid' => "PR-01",
            'su' => "https://localhost:8000/index",
            'fu' => "https://localhost:8000/index"
        ];
        $item->charge($payment_details);
    }

    public function success()
    {
        // Do something here when payment success.

    }

    public function failure()
    {
        // Do something here when payment failure.
    }
}
