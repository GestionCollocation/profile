<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\Profile;




class ProfileController extends Controller
{
    public function enregistrer(){

    	$newProfile = new Profile;

    	$newProfile->name="mohammed";
    	$newProfile->email="mohammed1@gmail.com";
    	$newProfile->password="abc123";
    	$newProfile->sexe="M";
    	$newProfile->telephone="062428229";
    	$newProfile->apropos="??????";
    	$newProfile->photo="mohammed";

    	$newProfile->save();


    }

        public function listprofil(){
  

    	$profiles=Profile::all();
    	//dd($profiles);
    	return view('profile',compact('profiles'));
    }

    public function edit(Request $request,Profile $profile){
        
       // $profiles=Profile::find($id);

        $this->validate($request,[
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'sexe'=>'required',
                 'telephone'=>'required',
                 'apropos'=>'required',
            ]);
        /*
        $profiles->name=$request->name;
        $profiles->email=$request->email;
        $profiles->password=$request->password;
        $profiles->sexe=$request->sexe;
        $profiles->telephone=$request->telephone;
        $profiles->apropos=$request->apropos;
        */
        // $profiles->photo=$request-input('photo');
       // $profiles = Profile::update($request->all());
         
           // $profiles->save();
            //dd($request->all());
$profile -> update($request->all());
            return redirect()->back();
           // return redirect()->route('edit')->with('success','profile update successflly');

        
            // $request->validate([
            //     'name'=>'required',
            //     'email'=>'required',
            //     'password'=>'required',
            //     'sexe'=>'required',
            //     'telephone'=>'required',
            //     'apropos'=>'required',
            // ]);



            // $profile = Profile::update($request->all());
            //  return redirect()->route('edit')->with('success','profile update successflly');
    }


    public function update(Request $request, $id){
        $user=user::find($id);
        //dd($request->all());
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->sexe=$request->sexe;
        $user->telephone=$request->telephone;
        $user->apropos=$request->apropos;
        
        // $profiles->photo=$request-input('photo');
         $user->save();
         //return redirect('profile');
         return redirect('profile')->with('success','profile update successflly');
       
    }

}
