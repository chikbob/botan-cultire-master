<?php

namespace App\Http\Controllers\Pages;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController
{

    public function __invoke(Visitor $visitor): Response
    {
        return Inertia::render('Visitor/index', [
            'visitors' => Visitor::all(),
        ]);
    }
    
    public function store(Request $request) 
    {
        Visitor::create($request->validate([
                'name' => ['required', 'max:50'],
                'telephone' => ['required', 'max:50'],
                'email' => ['required', 'max:50', 'email'],
        ]));

        return to_route('visitor.index');
    }
}
