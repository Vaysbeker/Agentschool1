<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AgencyRequest;
use App\Models\Agency;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller {

    public function submit(AgencyRequest $req){

        $agency = new Agency();
        $agency->agency_name = $req->input('agency_name');
        $agency->agency_region = $req->input('agency_region');
        $agency->agency_city = $req->input('agency_city');
        $agency->save();
        return redirect()->route('home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agency = DB::select('select * from agencies');
        return view('admin.agencies', ['agencies' => $agency]);
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
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function edit(Agency $agency)
    {
        //
    }
    public function allAgency() {
        return view('admin.agencies',['agency'=>Agency::all()]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agency $agency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agency $agency)
    {
        //
    }
}
