<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function checkout_paid(Checkout $checkout)
    {
        $checkout->update([
            'is_paid' => true
        ]);

        return back()->with('success', 'Checkout has been updated');
    }
}
