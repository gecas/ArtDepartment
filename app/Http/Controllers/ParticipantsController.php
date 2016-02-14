<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participants;
use App\Http\Requests;
use App\ParticipantsCategory;
use App\Http\Controllers\Controller;
use Redirect;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ParticipantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    protected $_participants_path = 'participants/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$category = ParticipantsCategory::where('slug', '=',$slug)->first();
        //$participants = Participants::where('category_id', '=', $category->id)->get();
        $participants = Participants::all();

        foreach ($participants as $participant) {
           $category = $participant->category;
        }
       

        return view('admin.participants.index', compact('participants', $participants, 'category', $category));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category)
    {
        return view('admin.participants.create', compact('category', $category));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required','picture_text'=>'required'/*, 'participantFile'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg'*/]);
        
        if ($request->file('participantFile')) {

            $this->validate($request,['participantFile'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg']);
            $participant = $request->file('participantFile');

            $participantPath = $this->_participants_path;
           
            $participantName = uniqid().$participant->getClientOriginalName();

            $participant->move($participantPath, $participantName);

        }

        $participants = new Participants(array(
            'name'=>$request->get('name'),
            'picture_text'=>$request->get('picture_text'),
            'category_id'=>$request->get('category'),
            'picture_path'=>$participantPath,
            'picture_name'=>$participantName
            ));
 
        $participants->save();

        flash()->success('','Pridėtas participant');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $participant = Participants::find($id);
        
    //     return view('admin.participants.show');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = Participants::find($id);

        return view('admin.participants.edit', compact('participant', $participant));
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
        
        $this->validate($request,['name'=>'required', 'picture_text'=>'required']);
    
         $participant = Participants::find($id);

         
          if ($request->file('edit-participant-photo')) {
          $this->validate($request,['edit-participant-photo'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg']);

            $participantFile = $participant->picture_path.$participant->picture_name;
                if(\File::isFile($participantFile)){
                \File::delete($participantFile);
            }

            $file = $request->file('edit-participant-photo');

            $participant_picture_path = $this->_participants_path;
           
            $participant_picture_name = $file->getClientOriginalName();

            $file->move($participant_picture_path, $participant_picture_name);
          
            $participant->picture_name = $participant_picture_name;
            $participant->picture_path = $participant_picture_path;
        }


        $participant->name = $request->get('name');
        $participant->picture_text = $request->get('picture_text');
      
        $participant->save();
     
        flash()->success('','Redaguotas!');

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
       $participant = Participants::find($id);
       
       $path = $participant->picture_path;
       $name = $participant->picture_name;
       $file = $path.$name;
       
       if(\File::isFile($file)){
            \File::delete($file);
        }
    
       $participant->delete();
       flash()->success('','Participant panaikintas!');
       return redirect()->back();
    }

    public function participantsByCategory($slug)
    {
        $category = ParticipantsCategory::where('slug', '=',$slug)->first();
        $participants = Participants::where('category_id', '=', $category->id)->get();
       
        return view('admin.participants.index', compact('participants', $participants, 'category', $category));
    }
}
