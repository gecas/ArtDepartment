<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\masterclassForm;
use App\OpenSession;
use App\Http\Requests;
use App\User;
use Redirect;
use Mail;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    protected $_cv_path = 'cv/';
    protected $_portfolio_path = 'portfolio/';
    protected $_picture_path = 'images/';

    public function applyOpenSessions(Request $request)
    {   
        $this->validate($request,['name'=>'required','surname'=>'required',
                            'email'=>'required|email|unique:open_sessions',
                            'phone'=>'required', 'expertise'=>'required',
                            'company'=>'required','training'=>'required|max:450',
                            'address'=>'required', 'city'=>'required'
                           ]);

        $openSessions = new OpenSession(array(
            'name'=>$request->get('name'),
            'surname'=>$request->get('surname'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'expertise'=>$request->get('expertise'),
            'company'=>$request->get('company'),
            'address'=>$request->get('address'),
            'city'=>$request->get('city'),
            'training'=>$request->get('training')
            ));
 
        $openSessions->save();

    //    Mail::send('emails.welcome', function ($message) {
    //     $message->from('us@example.com', 'Laravel');

    //     $message->to('geciauskasmarius@gmail.com')->cc('bar@example.com');
    // });
        // $email = '';
        // Mail::queue('emails.welcome', compact('email'), function($message) use ($email){
        //     $message->from('User@mail.com')->to('geciauskasmarius@gmail.com')->subject('Test mail');
        // });

        $openSessions2 = OpenSession::latest()->first();

        $mail = Mail::send('emails.welcome', ['openSessions2' => $openSessions2], function ($m) use ($openSessions2) {
            $m->from($openSessions2->email, 'Nauja open sessions registracija');

            $m->to('apply@artdepartmentmasterclass.com', $openSessions2->name)->subject('Your Reminder!');
        });

        flash()->overlay('Your application form was succesfully submited!','We will read it carefully and send you a confirmation via e-mail.');

        return redirect()->back();
    }

    public function applyFormData(Request $request){
        $this->validate($request,['name'=>'required','surname'=>'required',
                            'email'=>'required|email|unique:masterclass_forms', 'phone'=>'required', 
                            'birth_date'=>'required|date', 'country'=>'required',
                            'education'=>'required', 'description'=>'required|max:450',
                            'challenge'=>'required|max:450', 'company'=>'required',
                            'address'=>'required', 'city'=>'required',
                            'features'=>'required|max:450', 'heroes'=>'required|max:450',
                            'thought'=>'required|max:450', 'topics'=>'required|max:450',
                            'cvFile'=>'required|mimes:jpeg,jpg,png,bmp,gif,svg,pdf',
                            'pictureFile'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
                            'portfolioFile'=>'required|mimes:jpeg,jpg,png,bmp,gif,svg,pdf',
                            'portfolioLink'=>'url']);

         if ($request->file('cvFile')) {
            //$this->validate($request,['file'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg']);
            $cv = $request->file('cvFile');

            $cvPath = $this->_cv_path;
           
            $cvName = uniqid().$cv->getClientOriginalName();

            $cv->move($cvPath, $cvName);

        }


        if ($request->file('pictureFile')) {
            //$this->validate($request,['file'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg']);
            $picture = $request->file('pictureFile');

            $picturePath = $this->_picture_path;
           
            $pictureName = uniqid().$picture->getClientOriginalName();

            $picture->move($picturePath, $pictureName);

        }

        if ($request->file('portfolioFile')) {
            //$this->validate($request,['file'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg']);
            $portfolio = $request->file('portfolioFile');

            $portfolioPath = $this->_portfolio_path;
           
            $portfolioName = uniqid().$portfolio->getClientOriginalName();

            $portfolio->move($portfolioPath, $portfolioName);

        }

        $masterclass = new masterclassForm(array(
            'name'=>$request->get('name'),
            'surname'=>$request->get('surname'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'birth_date'=>$request->get('birth_date'),
            'country_id'=>$request->get('country'),
            'education'=>$request->get('education'),
            'company'=>$request->get('company'),
            'address'=>$request->get('address'),
            'city'=>$request->get('city'),
            'description'=>$request->get('description'),
            'challenge'=>$request->get('challenge'),
            'features'=>$request->get('features'),
            'heroes'=>$request->get('heroes'),
            'thought'=>$request->get('thought'),
            'topics'=>$request->get('topics'),
            'cv_name'=>$cvName,
            'cv_path'=>$cvPath,
            'picture_name'=>$pictureName,
            'picture_path'=>$picturePath,
            'portfolio_name'=>$portfolioName,
            'portfolio_path'=>$portfolioPath
            ));
 
        $masterclass->save();

        $masterclass2= masterclassForm::latest()->first();

        $mail = Mail::send('emails.welcome2', ['masterclass2' => $masterclass2], function ($m) use ($masterclass2) {
            $m->from($masterclass2->email, 'Nauja masterclass registracija');

            $m->to('apply@artdepartmentmasterclass.com', $masterclass2->name)->subject('Your Reminder!');
        });
        //flash()->error('Success!','Your flyer has been created');
        flash()->overlay('Your application form was succesfully submited!','We will read it carefully and send you a confirmation via e-mail.');

        return Redirect::to('/apply');
    }
}
