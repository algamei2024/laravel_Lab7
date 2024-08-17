<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $info)
    {
        // $logo = upload('info', $request);
        $logo = 'null';
        Info::where('id', $info)->update([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $logo,
            'email' => $request->email,
            'phone' => $request->phone,
            'color' => $request->color,
            'map' => $request->map,
        ]);
        $info = Info::first();

        return view('admin.forms.main', compact('info'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Info $info)
    {
        //
    }
}
