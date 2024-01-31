<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;
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
    public function show($id = "",todolist $todolist) {
        // dd($id);
        $todo=todolist::get();
        if ($id != "") {
            $todoById = $todolist::find($id);
            return view('admin.todo',compact('todo','todoById'));
        } else {
            return view('admin.todo',compact('todo'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function edit($id,todolist $todolist)
    {
        $todo = $todolist::find($id);
        // dd($todo);
        // dd("inside here",$id);
        
        return view('admin.edittodo',compact('todo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, todolist $todolist)
    {
        $todo = $todolist::find($id);
        $todo->title=$request->title;
        $todo->status="pending";
        $todo->save();
        return redirect("todo");
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
        //  dd("hii");
        DB::connection()->enableQueryLog();

        $data = $todolist::find($id);
        $queries = DB::getQueryLog();
        // dd($queries);

        // dd($data);
        $data->delete(); //returns true/false
        return redirect("todo");
    }
}
