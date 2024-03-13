<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//models

use App\Models\Type;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        return view('admin.types.index', compact('types'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $type = Type::where('slug' , $slug)->firstOrFail();
        

        return view('admin.types.show', compact('type'));
    }
}