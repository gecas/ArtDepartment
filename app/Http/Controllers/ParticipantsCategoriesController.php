<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParticipantsCategory;
use App\Http\Requests;
use Redirect;
use App\Http\Controllers\Controller;

class ParticipantsCategoriesController extends Controller
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
        $categories = ParticipantsCategory::all();
        return view('admin.participants_categories.index', compact('categories', $categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/participants_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,['title'=>'required', 'year'=>'required']);


        $category = new ParticipantsCategory(array(
            'title'=>$request->get('title'),
            'year'=>$request->get('year'),
            'slug'=>str_slug($request->get('year').'-'.$request->get('title'))
            ));
 
        $category->save();
        //flash()->error('Success!','Your flyer has been created');
        flash()->success('','Nauja kategorija sukurta');

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
        $category = ParticipantsCategory::find($id);

        return view('admin.participants_categories.edit', compact('category', $category));
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
        $this->validate($request,['title'=>'required', 'year'=>'required']);
    
        $category = ParticipantsCategory::find($id);

        $category->title = $request->get('title');
        $category->year = $request->get('year');
        $category->slug = str_slug($request->get('year').'-'.$request->get('title'));
      
        $category->save();
     
        flash()->success('','Redaguota!');

        return Redirect::to('/dashboard/participants/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $category = ParticipantsCategory::find($id);

       $category->delete();
       flash()->success('','Participants kategorija panaikinta');
       return redirect()->back();
    }
}
