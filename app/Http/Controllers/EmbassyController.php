<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmbassyController extends Controller
{
   public function sendcandidate($id){
        $candidates = DB::table('candidates')
        ->leftJoin('visas', 'candidates.id', '=', 'visas.candidate_id')
        ->select('candidates.*', 'visas.visa_no', 'visas.prof_name_english')
        ->where('visas.candidate_id' ,'=', $id)
        ->get();
         return response()->json($candidates);
   }
}
