<?php

namespace App\Http\Controllers\Pages;

use App\Models\Visitor;
use App\Http\Requests\VisitorRequest;

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
