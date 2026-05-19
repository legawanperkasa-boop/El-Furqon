<?php

use Illuminate\Support\Facades\Route;
use App\Models\Order;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/order', function (Request $request) {
    $validated = $request->validate([
        'customer_name' => 'required|string|max:255',
        'notes' => 'nullable|string',
        'delivery_method' => 'required|string|in:delivery,takeaway',
        'address' => 'nullable|string',
        'payment_method' => 'required|string|in:cod,qris',
        'qty_refill_biasa' => 'required|integer|min:0',
        'qty_refill_premium' => 'required|integer|min:0',
        'qty_galon_baru' => 'required|integer|min:0',
        'qty_pompa_elektrik' => 'required|integer|min:0',
        'subtotal' => 'required|integer|min:0',
        'ongkir' => 'required|integer|min:0',
        'total_amount' => 'required|integer|min:0',
    ]);

    $order = Order::create($validated);

    return response()->json([
        'success' => true,
        'order_id' => $order->id,
    ]);
});
