<?php

namespace App\Http\Controllers;
use App\Models\testing;
use Illuminate\Http\Request;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allorduct=testing::get();
        return $allorduct;
        
        
       
    }

    public function alluser()
    {
        

    }

    

    public function sendmail()
    {
        // Mail::to("khushburathod5354@gmail.com")->send(new OrderMail(["data"], ["username"]));
        Mail::to("vajadipak2110@gmail.com")->send(new OrderMail(["data"], ["username"]));

    }
    public function emailtest()
    {
        $details = ['email' => 'sumitmaheshwari1705@gmail.com'];
        SendEmailJob::dispatch($details);
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
     * @param  \App\Models\testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function show(testing $testing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function edit(testing $testing)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testing $testing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function destroy(testing $testing)
    {
        //
    }
}
