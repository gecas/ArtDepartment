<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();

        return view('admin.videos.index',compact('videos', $videos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,['video_title'=>'required', 'video_content'=>'required']);

        $video = new Video(array(
            'video_title'=>$request->get('video_title'),
            'video_content'=>$request->get('video_content')
            ));
 
        $video->save();
        //flash()->error('Success!','Your flyer has been created');
        flash()->success('','Naujas video sukurtas');

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
        $video = Video::find($id);

        return view('admin.videos.edit', compact('video', $video));
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
        $this->validate($request,['video_title'=>'required', 'video_content'=>'required']);
    
        $video = Video::find($id);

        $video->video_title = $request->get('video_title');
        $video->video_content = $request->get('video_content');
      
        $video->save();
     
        flash()->success('','Redaguota!');

        return Redirect::to('/dashboard/video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $video = Video::find($id);

       $video->delete();
       flash()->success('','Video panaikintas');
       return redirect()->back();
    }
}
