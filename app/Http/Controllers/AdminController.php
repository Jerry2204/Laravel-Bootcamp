<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout\Paid;

class AdminController extends Controller
{
    public function checkout_paid(Checkout $checkout)
    {
        $checkout->update([
            'is_paid' => true
        ]);

        Mail::to($checkout->user->email)->send(new Paid($checkout));

        return back()->with('success', 'Checkout has been updated');
    }
}
