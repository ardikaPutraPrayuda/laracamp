<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schoolfee;

class SchoolfeeController extends Controller
{
    public function index()
    {
        $fees = Schoolfee::all();
        return view('schoolFee.index', [
            'fees' => $fees
        ]);
    }
}
