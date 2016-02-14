<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\masterclassForm;
use App\Http\Requests;
use App\OpenSession;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
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
        return view('admin.index');
    }

    public function masterclass()
    {
        $masterclass = masterclassForm::latest()->paginate(20);

        return view('admin.masterclass', compact('masterclass', $masterclass));
    }

    public function openSessions()
    {
        $openSessions = OpenSession::latest()->paginate(20);

        return view('admin.openSessions', compact('openSessions', $openSessions));
    }

    public function masterclassShow($id)
   {
    $masterclassShow = masterclassForm::find($id);
    return view('admin.masterclassShow', compact('masterclassShow', $masterclassShow));
   }    
   public function openSessionsShow($id)
   {
    $openSessionsShow = OpenSession::find($id);
    return view('admin.openSessionsShow', compact('openSessionsShow', $openSessionsShow));
   }

  
}
