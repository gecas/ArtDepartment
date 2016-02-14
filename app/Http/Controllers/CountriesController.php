<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Http\Requests;
use Redirect;
use App\Http\Controllers\Controller;

class CountriesController extends Controller
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
        $countries = Country::all();

        return view('admin.countries.index', compact('countries', $countries));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,['country'=>'required']);


        $country = new Country(array(
            'title'=>$request->get('country')
            ));
 
        $country->save();
        //flash()->error('Success!','Your flyer has been created');
        flash()->overlay('','Nauja valstybė sukurta');

        return redirect()->back();
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
        $country = Country::find($id);

        return view('admin.countries.edit', compact('country', $country));
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
        $this->validate($request,['country'=>'required']);
    
         $country = Country::find($id);

        $country->title = $request->get('country');
      
        $country->save();
     
        flash()->success('','Redaguota!');

        return Redirect::to('/dashboard/countries/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $country = Country::find($id);

       $country->delete();
       flash()->success('','Valstybė panaikinta');
       return redirect()->back();
    }
}
