<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller {
    public function index() {
        return view('transactions.index', ['transactions' => Transaction::all()]);
    }

    public function store(Request $request) {
        $product = Product::findOrFail($request->product_id);
        $total_price = $product->price * $request->quantity;

        Transaction::create([
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'total_price' => $total_price
        ]);

        // Kurangi stok
        $product->decrement('stock', $request->quantity);

        return redirect()->route('transactions.index');
    }
}

