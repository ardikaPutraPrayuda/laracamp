<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Camp')->get();
        // $checkouts = Checkout::with('Camp')->where('user_id', Auth::id())->get();
        // return $checkouts;
        return view('admin.dashboard', [
            'checkouts' => $checkouts,
        ]);
    }
}
