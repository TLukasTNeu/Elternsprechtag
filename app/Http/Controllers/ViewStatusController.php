<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewStatusController extends Controller
{


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