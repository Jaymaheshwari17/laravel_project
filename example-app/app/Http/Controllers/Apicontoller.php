<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;
use DB;
class Apicontoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function loadview() {
        // dd("inside");
        return view('admin.todoapi');
    }
    public function index(todolist $todolist) {
        // dd("inside");
        // return view('admin.todo',compact('todo','todoById'));
        return todolist::get();
    }

    public function api()
    {
        
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id="",todolist $todolist)
    {
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
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('admin.todoapi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,todolist $todolist)
    {
        DB::connection()->enableQueryLog();

        $data = $todolist::find($id);
        $queries = DB::getQueryLog();
        // dd($queries);

        // dd($data);
        return $data->delete(); 

    }
}
