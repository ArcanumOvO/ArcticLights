<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Services\StatisticService;

class AdminDashboardController extends Controller
{
    protected StatisticService $statisticController;

    public function __construct(StatisticService $statisticController)
    {
        $this->statisticController = $statisticController;
    }

    public function index()
    {
        return view('dashboard.admin.home', [
            'statistic' => [
                'users' => $this->statisticController->users(),
            ]
        ]);
    }

    public function export()
    {
        return view('dashboard.admin.export');
    }
}
