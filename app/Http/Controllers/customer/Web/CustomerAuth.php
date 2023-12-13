<?php

namespace App\Http\Controllers\customer\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CustomerAuth extends Controller
{
    function index(): View{
        return view('customer.dashboard.dashboard');
    }

    function blank(): View{
        return view('customer.blank');
    }
}
