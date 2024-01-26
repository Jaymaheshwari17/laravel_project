<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;
use DB;
class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,todolist $todolist)
    {
        $todolist->title=$request->title;
        $todolist->status="pending";
        $todolist->save();
        return redirect("todo");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function show()

    {
        $todo=todolist::get();
        // dd($todo);
        return view('admin.todo',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function edit($id,todolist $todolist)
    {
        // dd("inside here",$id);
        $data = $todolist::find($id);
        return view('admin.todo',compact('todo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todolist $todolist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,todolist $todolist)
    {

        DB::connection()->enableQueryLog();

        $data = $todolist::find($id);
        $queries = DB::getQueryLog();
        // dd($queries);

        // dd($data);
        $data->delete(); //returns true/false
        return redirect("todo");
    }
}
