<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PictureCategory;
use App\Picture;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class PicturesCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PictureCategory::all();
        return view('admin.pictures_categories.index', compact('categories', $categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pictures_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this ->validate($request,['picture_category_title'=>'required']);


        $category = new PictureCategory(array(
            'title'=>$request->get('picture_category_title'),
            'slug'=>str_slug($request->get('picture_category_title'))
            ));
 
        $category->save();
        //flash()->error('Success!','Your flyer has been created');
        flash()->success('','Nauja pictures kategorija sukurta');

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
        $pictures_category = PictureCategory::find($id);

        return view('admin.pictures_categories.edit', 
                compact('pictures_category', $pictures_category));
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
        $this ->validate($request,['picture_category_title'=>'required']);

        $category = PictureCategory::find($id);

        $category_title = $request->get('picture_category_title');

        $category->title = $category_title;

        $category->save();

        flash()->success('','Pakeista kategorija');

        return Redirect::to('/dashboard/pictures/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pictures_category = PictureCategory::find($id);
       // dd($pictures_category->photos);

        $exists = $pictures_category->photos->contains($pictures_category->id);

       if ($exists) { 
           
           flash()->error('','Negalima panaikinti, kadangi kategorija turi susietų nuotraukų!');
           return redirect()->back();

       }
       else {

           $pictures_category->delete();
           flash()->success('','Kategorija panaikinta!');
           return redirect()->back();
       }

    
    }

    
}
