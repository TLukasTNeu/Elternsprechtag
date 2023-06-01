<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use App\Models\Lehrer;
use App\Models\Register;
use App\Models\Schueler;
use App\Models\Teacher;
use App\Models\Admin;
use Hash;
use DB;
use Session;
use Carbon;
use Excel;

class AdminController extends Controller
{
  function admin() 
    {    
      $data = Lehrer::all();
      return view('admin', ['data' => $data]);
    }


  function adminShowLoginView() 
  {
    $data = Admin::all();
    return view('adminLogin', ['data' => $data]);

  }



  function login(Request $req) 
  {

    

    $req->validate([
      'password'=> 'required'
    ]);

     $user = Admin::where('adminName', '=', $req->benutzername)->get();
    

    if($user){
      foreach($user as $i){
        if(Hash::check($req->password, $i->password)){
          $req->session()->put('LoggedAdmin', $i->benutzername);
        
          
          $adminController = new AdminController();
          $redirect = $adminController->admin();
          return  $redirect;
      
           }
       
        }
    }
     
    return back()->with('fail', 'Passwort nicht registriert!');
  }   



  
  public function logoutAdmin(){
    if(Session::has('LoggedAdmin')) {
       Session::pull('LoggedAdmin');
       return redirect('adminEnter');     
    }
  }

  function importTeacher()
  {

    if(isset($_POST["Import"])){
    
      $filename=$_FILES["file"]["tmp_name"];    
       if($_FILES["file"]["size"] > 0)
       {
          $file = fopen($filename, "r");
            while (($getData = fgetcsv($file, 10000, ";")) !== FALSE)
             {
              $num = $getData[4];
              $id = (int)$num;
              $hashedPW= Hash::make($getData[3]);
              

               $sql = "INSERT into lehrer (lehrerVN,lehrerNN,raum,password,lehrerID) 
                     values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$hashedPW."', '".$id."')";
                     DB::insert($sql);
          if(!isset($result))
          {
            echo "<script type=\"text/javascript\">
                alert(\"Invalid File:Please Upload CSV File.\");
                window.location = \"index.php\"
                </script>";  

          }
          else {
              echo "<script type=\"text/javascript\">
              alert(\"CSV File has been successfully Imported.\");
              window.location = \"index.php\"
            </script>";
          }
             }
        
             fclose($file);  
       }
    }   
  }


  function importStudent()
  {

    if(isset($_POST["Import"])){
    
      $filename=$_FILES["file"]["tmp_name"];    
       if($_FILES["file"]["size"] > 0)
       {
          $file = fopen($filename, "r");
            while (($getData = fgetcsv($file, 10000, ";")) !== FALSE)
             {
              $num = $getData[4];
              $id = (int)$num;
              $hashedPW= Hash::make($getData[3]);
              

               $sql = "INSERT into schueler (klasse,schuelerVN,schuelerNN,password,schuelerID) 
                     values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$hashedPW."','".$id."')";
                     DB::insert($sql);
          if(!isset($result))
          {
            echo "<script type=\"text/javascript\">
                alert(\"Invalid File:Please Upload CSV File.\");
                window.location = \"index.php\"
                </script>";  

          }
          else {
              echo "<script type=\"text/javascript\">
              alert(\"CSV File has been successfully Imported.\");
              window.location = \"index.php\"
            </script>";
          }
             }
        
             fclose($file);  
       }
    }   
  }


  function fehlendeLehrer(){

    $data = Lehrer::all();
    $fehlend = array();

    foreach($data as $i)
    {
      if($i->startZeit=="00:00:00" && $i->endeZeit=="00:00:00")
      {
        array_push($fehlend, $i);
      }
    }

    return $fehlend;
    
  }

  public function viewSchueler()
  {    
      $status = DB::table('view_status')
          ->where('status', 1)
          ->first();

      if ($status->name == 'lehrerphase') {
          return redirect('/termineStudent');
      } elseif ($status->name == 'elternphase') {
          return redirect('teacherOption');
      } elseif ($status->name == 'adminphase') {
          return redirect('termineStudent');
      } else {
     
          return view('');
      }
  }


  public function viewLehrer() {
      $status = DB::table('view_status')
      ->where('status', 1)
      ->first();

  if ($status->name == 'lehrerphase') {
      return redirect('/teacherConfigTermine');
  } elseif ($status->name == 'elternphase') {
      return redirect('/termineTeacher');
  } elseif ($status->name == 'adminphase') {
      return redirect('/termineTeacher');
  } else {
 
      return view('');
  }
  }

  public function update(Request $request)
  {
      $name = $request->input('name');
      $status = $request->input('status');


      DB::table('view_status')
          ->where('name', '!=', $name)
          ->update(['status' => 0]);


      DB::table('view_status')
          ->where('name', $name)
          ->update(['status' => $status]);

      return redirect()->back();
  }


  

}
