<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Category;
use App\Models\User;
use App\Models\order;

class AnalysisController extends Controller
{
    public function analysis(){
        $totalCategories = Category::count();
        
        // $totalAllUsers = User::count();
        // $totalUser = User::where('role_as', '0')->count();
        // $totalAdmin = User::where('role_as', '1')->count();

        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalOrder = Order::count();
        $todayOrder = Order::whereDate('created_at', $todayDate)->count();
        $thisMonthOrder = Order::whereMonth('created_at', $thisMonth)->count();
        $thisYearOrder = Order::whereYear('created_at', $thisYear)->count();

        return view('Dashboard.analysis', compact('totalCategories', 'totalOrder', 'todayOrder', 'thisMonthOrder', 'thisYearOrder'));
    }
}