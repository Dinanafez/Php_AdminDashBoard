<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Count data for charts
        $productCount = Product::count();
        $orderCount = Order::count();
        $userCount = User::count();

        // Group orders by status
        $ordersByStatus = Order::select('Status', \DB::raw('count(*) as count'))
                                ->groupBy('Status')
                                ->get()
                                ->pluck('count', 'Status');

        return view('admin.dashboard', compact('productCount', 'orderCount', 'userCount', 'ordersByStatus'));
    }
}


