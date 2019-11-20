<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function getCustomer()
    {
    	return view('admin.report.customer');   
   	}

    public function getOrder()
    {
    	return view('admin.report.order');
    }

    public function getItem()
    {
    	return view('admin.report.item');
    }

    public function getExtra()
    {
    	return view('admin.report.extra');
    }

    public function getOrderStatus()
    {
        return view('admin.report.order-status');
    }

    public function getOrderCustomer()
    {
        return view('admin.report.order-customer');
    }
}
