<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OurHeroe;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OurHeroesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = OurHeroe::first();

        return view('admin.ourHeroes', compact('heroes', $heroes));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $heroes = OurHeroe::find($id);

        $starskiText = $request->starski;
        $fleurText = $request->fleur;
        $grenvilleText = $request->grenville;
        $jetteText = $request->jette;
        $andersText = $request->anders;
        $rajkText = $request->rajk;
        $mchenryText = $request->mchenry;

        $heroes->starski = $starskiText;
        $heroes->fleur = $fleurText;
        $heroes->grenville = $grenvilleText;
        $heroes->jette = $jetteText;
        $heroes->anders = $andersText;
        $heroes->rajk = $rajkText;
        $heroes->mchenry = $mchenryText;

        $heroes->save();

        flash()->success('','Pakeista our heroes skiltis!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
