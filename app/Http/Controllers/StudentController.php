<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use App\Models\Lehrer;
use App\Models\Register;
use App\Models\Schueler;
use Hash;
use DB;
use Session;
use Carbon;

class StudentController extends Controller
{

  public function list(){
    
    $data = Lehrer::all();
    $fehlend = array();

    foreach($data as $i)
    {
      if($i->startZeit=="00:00:00" && $i->endeZeit=="00:00:00")
      {
        array_push($fehlend, $i);
      }
    }

    $data = Schueler::all();
    return view('home', ['data' => $data], ['fehlend' => $fehlend]);

  }

    function login(Request $req) 
    {
      $req->validate([
        'password'=> 'required'
      ]);

       $user = Schueler::where('klasse', '=', $req->klasse)->get();
      

      if($user){
        foreach($user as $i){
          if(Hash::check($req->password, $i->password)){
            $req->session()->put('LoggedStudent', $i->schuelerID);
            return redirect('studentLogin');
             }
         
          }
      }

      
      return back()->with('fail', 'Passwort nicht registriert!');
    
    }   
       
    

    function termineStudent(Request $req) 
    {
        

        if(Session::has('LoggedStudent')) {
            $data = Schueler::where('schuelerID', '=', session('LoggedStudent'))->first();

            $display = array();
            $lehrer = array();
            $display = Register::where('schuelerID', $data->schuelerID)->get();

           for($i = 0; $i<=count($display)-1;$i++)
           {
               $lehrer[$i] = Lehrer::where('lehrerID', $display[$i]->lehrerID)->first();
           
           }
                
           
         return view('termineSchueler',['display' => $display , 'lehrer' => $lehrer , 'data'=>$data]);
        }

    }


    
    public function studentLogin()
    {
      $data = Lehrer::all();
      $dataStudent = array();
       if(Session::has('LoggedStudent')) {
        $dataStudent = ['LoggedStudent'=>Schueler::where('schuelerID', '=', session('LoggedStudent'))->first()];
        $statusController = new ViewStatusController();
        $redirect = $statusController->viewSchueler();
        return $redirect;
       }
    }

    public function logoutStudent(){
      if(Session::has('LoggedStudent')) {
         Session::pull('LoggedStudent');
         return redirect('/'); 
      }
    }
    

    
    function terminAuswahl(Request $req) 
    {

       $user = Lehrer::where('lehrerID', '=', $req->name)->first();
        
     
     if($user){
        $req->session()->put('LoggedTeacher', $user->lehrerID);
        return redirect('termine');  
         }

    }


    public function termine()
    {
      $search = Lehrer::where('lehrerID', '=', session('LoggedTeacher'))->first();
      $searchStudent = Schueler::where('schuelerID', '=', session('LoggedStudent'))->first();
      $bookedDatesStudent = Register::where('schuelerID', $searchStudent->schuelerID)->get();
      $bookedDates = Register::where('lehrerID', $search->lehrerID)->get();

      $lehrerNames = Lehrer::all();
      
      $data = array();
       if(Session::has('LoggedTeacher')) {
        $data = ['LoggedTeacher'=>Lehrer::where('lehrerID', '=', session('LoggedTeacher'))->first()];
        return view('/termineBuchen', $data, ['bookedDates' => $bookedDates ,'bookedDatesStudent' => $bookedDatesStudent , 'lehrerNames' => $lehrerNames]);
       }
    }



    function bookAppointment(Request $req) 
    {
      $data = Register::where('schuelerID', '=', session('LoggedStudent'))
                      ->where('lehrerID', '=', session('LoggedTeacher'))
                      ->first();

     $register = Register::all();

        if(Session::has('LoggedStudent')) {

        foreach(Register::all() as $i)
          {
           if($i==$data)
           {
            $edit = Register::find($data->rNr);      
            $edit->zeit=$req->zeit;
            $edit->save();
            return redirect('termine');
           }

          }


           DB::insert('insert into registrierung (schuelerID, lehrerID, zeit) values (?,?,?)', [session('LoggedStudent'),session('LoggedTeacher'), $req->zeit,]);
           
           return redirect('termine');

          
        }

    }

    function deleteAppointment() 
    {       
        if(Session::has('LoggedStudent')) {
            $data = Register::where('schuelerID', '=', session('LoggedStudent'))
                            ->where('lehrerID', '=', session('LoggedTeacher'))
                            ->first();

                    
            $edit = Register::find($data->rNr);
            $edit->delete();
          
            return redirect('termine');
        }

    }

    
  


    function isBooked()
    {
      $search = Lehrer::where('lehrerID', '=', session('LoggedTeacher'))->first();
      $bookedDates = Register::where('lehrerID', $search->lehrerID)->get();
     
      $searchStudent = Schueler::where('schuelerID', '=', session('LoggedStudent'))->first();
      $bookedDatesStudent = Register::where('schuelerID', $searchStudent->schuelerID)->get();

      return $bookedDatesStudent;
      
    }


    
}
