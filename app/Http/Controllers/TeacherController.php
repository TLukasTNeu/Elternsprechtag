<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use App\Models\Lehrer;
use App\Models\Register;
use App\Models\Schueler;
use Hash;
use Session;
use Carbon;

class TeacherController extends Controller
{


    function teacherShowLoginView() 
    {

        $data = Lehrer::all();
        return view('lehrerLogin', ['data' => $data]);

    }


    function teacherLogin(Request $req) 
    {
      $req->validate([
        'password'=> 'required'
      ]);

       $user = Lehrer::where('lehrerID', '=', $req->lehrerID)->get();
      

      if($user){
        foreach($user as $i){
          if(Hash::check($req->password, $i->password)){
            $req->session()->put('LoggedUser', $i->lehrerID);
            $statusController = new ViewStatusController();
            $redirect = $statusController->viewLehrer();
            return  $redirect;
             }
         
          }
      }
       
      return back()->with('fail', 'Passwort nicht registriert!');
    }   


    public function teacherConfigTermine()
    {
      $data = array();
       if(Session::has('LoggedUser')) {
        $data = ['LoggedUser'=>Lehrer::where('lehrerID', '=', session('LoggedUser'))->first()];
        return view('configTermine', $data);
       }
    }

    public function logoutTeacher(){
      if(Session::has('LoggedUser')) {
         Session::pull('LoggedUser');
         return redirect('/lehrerLogin');     
      }
    }


    public function configTime(Request $req)
    {
     
       if(Session::has('LoggedUser')) {
        $data = Lehrer::where('lehrerID', '=', session('LoggedUser'))->first();
        
        $edit = Lehrer::find($data->lehrerID);
        $edit->startZeit = $req->zeitVon;
        $edit->endeZeit = $req->zeitBis;
        $edit->dauerProSprechstunde = $req->dauer;
        $edit->save();
        
        return redirect('termineLehrer');

       }
    }

    function teacherOption() 
    {
 
      $data = Lehrer::all();
      $fehlend = array();
  
      foreach($data as $i)
      {
        if($i->startZeit=="00:00:00" && $i->endeZeit=="00:00:00")
        {
          array_push($fehlend, $i);
        }
      }
  
   
   
        $data = Lehrer::all();
        return view('lehrerauswahl', ['data' => $data], ['fehlend' => $fehlend]);

    }

    function termineTeacher()
    {
        $data = Lehrer::where('lehrerID', '=', session('LoggedUser'))->first();


        $display = array();
        $schueler = array();
        $display = Register::where('lehrerID', $data->lehrerID)->get();

       for($i = 0; $i<=count($display)-1;$i++)
       {
           $schueler[$i] = Schueler::where('schuelerID', $display[$i]->schuelerID)->first();
       
       }
            
       
     return view('termineLehrer',['display' => $display , 'schueler' => $schueler , 'data'=>$data]);

    }
  

    function teacherTool(Request $req) 
    {
        
        if(Session::has('LoggedUser')) {
            $data = Lehrer::where('lehrerID', '=', session('LoggedUser'))->first();


            $edit = Lehrer::find($data->lehrerID);
            if($req->zeitVon!=null){
               $edit->startZeit = $req->zeitVon;
            }
            else{
              return back()->with('fail', 'Feld darf nicht leer sein!');
            }

            if($req->zeitBis!=null){
              $edit->endeZeit = $req->zeitBis;
              }
            else{
                return back()->with('fail', 'Feld darf nicht leer sein!');
            }
            
            $edit->dauerProSprechstunde = $req->dauer;
            $edit->save();
    
            $display = array();
            $schueler = array();
            $display = Register::where('lehrerID', $data->lehrerID)->get();

           for($i = 0; $i<=count($display)-1;$i++)
           {
               $schueler[$i] = Schueler::where('schuelerID', $display[$i]->schuelerID)->first();
           
           }
                
           
         return view('termineLehrer',['display' => $display , 'schueler' => $schueler , 'data'=>$data]);
        }

    }

  /**
   */
  public function __construct() {
  }
}
