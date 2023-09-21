<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Post;
use App\Models\ResearchStage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }



    public function frontpage() {
        $posts = Post::query()
            ->orderBy('created_at', 'desc')
            ->get();
        return view('frontpage', compact("posts"));

    }

    public function about()
    {
        $employees = Employee::query()
            ->orderBy('sort')
            ->orderBy('name')
            ->get();

        $researchStages = ResearchStage::query()
            ->orderBy('order')
            ->get();

        return view('about', compact('researchStages', 'employees'));
    }

}
