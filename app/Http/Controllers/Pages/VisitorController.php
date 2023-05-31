<?php

namespace App\Http\Controllers\Pages;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Visitor;
use App\Http\Requests\VisitorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class VisitorController
{
    
    public function store(VisitorRequest $request)
    {
        $order = Visitor::query()
            ->create([
                ...$request->validated()
            ]);
    }
}
