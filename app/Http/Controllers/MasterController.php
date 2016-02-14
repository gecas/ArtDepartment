<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\masterclassForm;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MasterController extends Controller
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $master = masterclassForm::find($id);

       $picture_path = $master->picture_path;
       $picture_name = $master->picture_name;

       $portfolio_path = $master->portfolio_path;
       $portfolio_name = $master->portfolio_name; 

       $cv_path = $master->cv_path;
       $cv_name = $master->cv_name;

       $picture = $picture_path.$picture_name;
       $portfolio = $portfolio_path.$portfolio_name;
       $cv = $cv_path.$cv_name;
       
       if(\File::isFile($picture)){
            \File::delete($picture);
       }

       if(\File::isFile($portfolio)){
            \File::delete($portfolio);
       }

       if(\File::isFile($cv)){
            \File::delete($cv);
       }
    
       $master->delete();
       flash()->success('','Registracija panaikinta');
       return redirect()->back();
   
    }
}
