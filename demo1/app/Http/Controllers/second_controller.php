<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mymodel;

class second_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plays = Mymodel::all(); 

        // Return the data to a view or as JSON (depending on what you need)
        return view('index', compact('plays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('demo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Mymodel();
        $student->name = $request->input("name");
        $student->f_name = $request->input("f_name");
        $student->email = $request->input("email");
        $student->std_id = $request->input("std_id");
        $student->pass = $request->input("pass");
        $student->gender = $request->input("gender");
        $student->course = $request->input("course");
        $student->save();
        return redirect()->back()->with("status.ok");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Std = Mymodel::find($id);

        // Pass the student data to the view
        return view('edit', compact('Std'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Mymodel::find($id);
        $student->name = $request->input('name');
        $student->f_name = $request->input('f_name');
        $student->email = $request->input('email');
        $student->std_id = $request->input('std_id');
        $student->pass = $request->input('pass');
        $student->gender = $request->input("gender");
        $student->course = $request->input("course");
        $student->save();
        return redirect('plays');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Mymodel::find($id);
        $student->delete();
        return redirect('plays');

    }
}
