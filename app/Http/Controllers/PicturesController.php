<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PictureCategory;
use App\Picture;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;
use Redirect;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class PicturesController extends Controller
{
    protected $_photo_path = 'photos/';

    public function __construct()
    {
         $this->middleware('auth', ['except'=>'index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pictures = Picture::all();

        return view('admin.pictures.index',
             compact('pictures', $pictures));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $category = PictureCategory::find($id);

        return view('admin.pictures.create',
             compact('category', $category));
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
        $pictures = Picture::where('category_id', '=', $id)->get();
        foreach ($pictures as $picture) {
            $category = $picture->category;
        }

        return view('admin.pictures.edit',
            compact('pictures', $pictures, 'category', $category));
    }

    public function photos(Request $request)
    {
        $this ->validate($request,['photo-category'=>'required']);

        

        if ($request->file('photo')) {
            $path = $this->_photo_path;
            foreach ($request->file('photo') as $file) {
                $name = uniqid() . "_" .$file->getClientOriginalName();
                // $tn_name = $name."tn";
                // // open file a image resource
                // $thumbnail = Image::make($path.$tn_name)->fit(200);

                // // crop the best fitting 1:1 ratio (200x200) and resize to 200x200 pixel
                // $thumbnail->save();

               // $coverAbsoluteFilePath = $file->getRealPath();
                //$coverExtension = $file->getClientOriginalExtension();

                // optimize (overwrite)
              //  $opt = new ImageOptimizer();
               // $opt->optimizeImage($coverAbsoluteFilePath, $coverExtension);

            $file->move($path, $name);



            //$picture->create(['photo_name' => $name, 'photo_path' => $path]);

            $picture = new Picture(array(
             'category_id' => $request->get('photo-category'),
             'photo_name' => $name,
             //'photo_name_tn'=>$tn_name,
             'photo_path' => $path
            ));

            $picture->save();

            }
           // $picture->save();
        }


        //flash()->error('Success!','Your flyer has been created');
         //flash()->overlay('Success!','Your flyer has been created');
        //flash()->overlay('Pavyko!','Naujiena sukurta!');
        //flash()->success('Success!','Your flyer has been created');
        return redirect()->back(); 
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
          if ($request->get('pictures')) {
            foreach ($request->get('pictures') as $value) {
                $tmp = Picture::find($value);
                if (file_exists($tmp->photo_path.$tmp->photo_name)) {
                    unlink($tmp->photo_path.$tmp->photo_name);
                }
                $file = $tmp->photo_path.$tmp->photo_name;
                if(\File::isFile($file)){
                \File::delete($file);
                 }

                $tmp->delete();
            }
        }

            flash()->success('','Nuotrauka panaikinta!');

        return redirect()->back();
    }

    public function update2(Request $request, $id)
    {
        $this ->validate($request,['edit-photo-category'=>'required']);

        if ($request->file('edit_photo')) {
            $path = $this->_photo_path;
            foreach ($request->file('edit_photo') as $file) {
                $name = uniqid() . "_" .$file->getClientOriginalName();

            $file->move($path, $name);

            $picture = new Picture(array(
             'category_id' => $request->get('edit-photo-category'),
             'photo_name' => $name,
             'photo_path' => $path
            ));

            $picture->save();

            }
        }
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

    public function picturesByCategory($slug)
    {
        $category = PictureCategory::where('slug', '=',$slug)->first();
        $pictures = Picture::where('category_id', '=', $category->id)->get();
       
        return view('admin.pictures.index', compact('pictures', $pictures, 'category', $category));
    }
}
