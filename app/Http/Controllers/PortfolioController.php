<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $skills = Skill::orderBy('sort_order')->get()->groupBy('category');
        
        // Define category order
        $categoryOrder = ['Frontend', 'Backend', 'Database', 'Tools & Other'];
        
        // Sort the collections based on predefined order
        $skills = $skills->sortBy(function ($items, $key) use ($categoryOrder) {
            return array_search($key, $categoryOrder);
        });

        $projects = Project::orderBy('sort_order')->get();

        return view('portfolio', compact('skills', 'projects'));
    }
}
