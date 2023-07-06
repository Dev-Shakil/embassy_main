<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use App\Models\Visa;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
   public function index(Request $request){
        if($request->isMethod('GET')){
           
            $candidates = DB::table('candidates')
                    ->leftJoin('visas', 'candidates.id', '=', 'visas.candidate_id')
                    ->select('candidates.*', 'visas.visa_no', 'visas.mofa_no')->where('candidates.agency', '=', Session::get('user'))
                    ->get();
            // dd($candidates);
            return view('user.index', compact('candidates'));
        }
        else{
            // dd($request->all());
            $candidate = new Candidates();
            $candidate->name = $request->pname;
            $candidate->passport_number = $request->pnumber;
            $candidate->passport_issue_date = $request->pass_issue_date;
            $candidate->passport_expire_date = $request->pass_expire_date;
            $candidate->date_of_birth = $request->date_of_birth;
            $candidate->place_of_birth = $request->place_of_birth;
            $candidate->address = $request->address;
            $candidate->father = $request->father;
            $candidate->mother = $request->mother;
            $candidate->religion = $request->religion;
            $candidate->married = $request->married;
            $candidate->medical_center = $request->medical_center_name;
            $candidate->medical_issue_date = $request->medical_issue_date;
            $candidate->medical_expire_date = $request->medical_expire_date;
            $candidate->police = $request->police_licence;
            $candidate->driving_licence = $request->driving_licence;
            $candidate->is_delete = 0;
            $candidate->agency = Session::get('user');
            // dd(Session::get('user'));
            // dd($candidate->save());
            if($candidate->save()){
                return response()->json([
                    'title'=> 'Success',
                    'success' => true,
                    'icon' => 'success',
                    'message' => 'Successfully created',
                    'redirect_url' => '/'
                ]);
            }
            else{
                return response()->json([
                    'title'=> 'Error',
                    'success' => false,
                    'icon' => 'error',
                    'message' => 'Cannot add',
                    'redirect_url' => '/'
                ]);
            }
        }
   }

   public function visa_add(Request $request, $id){
        if($request->isMethod('GET')){
           
            return view('user.addvisa', ['id' => $id]);
        }
        else{
           
            $visa = new Visa();
            $visa->visa_no = $request->input('visa_no');
            $visa->candidate_id = $id;
            $visa->visa_date = $request->input('visa_date');
            $visa->spon_id = $request->input('spon_id');
            $visa->spon_name_arabic = $request->input('spon_name_arabic');
            $visa->salary = $request->input('salary');
            $visa->spon_name_english = $request->input('spon_name_english');
            $visa->prof_name_arabic = $request->input('prof_name_arabic');
            $visa->prof_name_english = $request->input('prof_name_english');
            $visa->mofa_no = $request->input('mofa_no');
            $visa->mofa_date = $request->input('mofa_date');
            $visa->okala_no = $request->input('okala_no');
            $visa->musaned_no = $request->input('musaned_no');
            // dd($visa->save());
            $flag = Visa::where('candidate_id', $id)->first();
            // dd(1,$request->all(), 2, $id, 3, $flag);
            if ($flag == null){
                if($visa->save()){
                    return response()->json([
                        'title'=> 'Success',
                        'success' => true,
                        'icon' => 'success',
                        'message' => 'added succesfully',
                        'redirect_url' => 'user/index'
                    ]);
                }
                else{
                    return response()->json([
                        'title'=> 'Error',
                        'success' => false,
                        'icon' => 'error',
                        'message' => 'Cannot add',
                        // 'redirect_url' => 'user/index'
                    ]);
                }
            }
            else{
                return response()->json([
                    'title'=> 'Error',
                    'success' => false,
                    'icon' => 'error',
                    'message' => 'This candidate have a visa',
                    'redirect_url' => 'user/index'
                ]);
            }

            
            
        }
    }  
    
    public function embassy_list(){
        $candidates = DB::table('candidates')
                    ->leftJoin('visas', 'candidates.id', '=', 'visas.candidate_id')
                    ->select('candidates.*', 'visas.*')
                    ->get();
        // dd($candidates);
        return view('user.embassy_list', compact('candidates'));
    }

    public function edit($id, Request $request){
        if($request->isMethod('GET')){
            $candidates = DB::table('candidates')
                    ->leftJoin('visas', 'candidates.id', '=', 'visas.candidate_id')
                    ->select('candidates.*', 'visas.*')->where('candidates.id', '=', $id)
                    ->get();
            // dd($candidates);        
            return view('user.edit', compact('id', 'candidates'));
        }
    }

    public function personal_edit($id, Request $request){
        // dd(1, $id, 2, $request->all());
        $candidate = Candidates::where('id', $id)->first();
        if($candidate){
            $candidate->name = $request->pname;
            $candidate->passport_number = $request->pnumber;
            $candidate->passport_issue_date = $request->pass_issue_date;
            $candidate->passport_expire_date = $request->pass_expire_date;
            $candidate->date_of_birth = $request->date_of_birth;
            $candidate->place_of_birth = $request->place_of_birth;
            $candidate->address = $request->address;
            $candidate->father = $request->father;
            $candidate->mother = $request->mother;
            $candidate->religion = $request->religion;
            $candidate->married = $request->married;
            $candidate->medical_center = $request->medical_center_name;
            $candidate->medical_issue_date = $request->medical_issue_date;
            $candidate->medical_expire_date = $request->medical_expire_date;
            $candidate->police = $request->police_licence;
            $candidate->driving_licence = $request->driving_licence;
            $candidate->is_delete = 0;
            // dd($candidate->save());
            if($candidate->save()){
                return response()->json([
                    'title'=> 'Success',
                    'success' => true,
                    'icon' => 'success',
                    'message' => 'Successfully Updated Candidate',
                   
                ]);
            }
            else{
                return response()->json([
                    'title'=> 'Error',
                    'success' => false,
                    'icon' => 'error',
                    'message' => 'Cannot edit',
                    
                ]);
            }
        }
        else{
            return response()->json([
                'title'=> 'Error',
                'success' => false,
                'icon' => 'error',
                'message' => 'Candidate does not exist',
                
            ]);
        }
    }

    public function visa_edit($id, Request $request){
        $visa = Visa::where('id', $id)->first();
        if($visa){
            $visa->visa_no = $request->input('visa_no');
            $visa->candidate_id = $id;
            $visa->visa_date = $request->input('visa_date');
            $visa->spon_id = $request->input('spon_id');
            $visa->spon_name_arabic = $request->input('spon_name_arabic');
            $visa->salary = $request->input('salary');
            $visa->spon_name_english = $request->input('spon_name_english');
            $visa->prof_name_arabic = $request->input('prof_name_arabic');
            $visa->prof_name_english = $request->input('prof_name_english');
            $visa->mofa_no = $request->input('mofa_no');
            $visa->mofa_date = $request->input('mofa_date');
            $visa->okala_no = $request->input('okala_no');
            $visa->musaned_no = $request->input('musaned_no');
            if(visa->save()){
                return response()->json([
                    'title'=> 'Success',
                    'success' => true,
                    'icon' => 'success',
                    'message' => 'Successfully Updated Visa',
                   
                ]);
            }
            else{
                return response()->json([
                    'title'=> 'Error',
                    'success' => false,
                    'icon' => 'error',
                    'message' => 'Cannot edit',
                    
                ]);
            }
        }
        else{
           
                return response()->json([
                    'title'=> 'Error',
                    'success' => false,
                    'icon' => 'error',
                    'message' => 'Visa Not Found ',
                    
                ]);
           
        }
    }

    public function update(Request $request){
        // dd($request->all());
        $name = request('uname');
        $phn = request('wsphn');
        $email = session('user');
        $user = User::where('email', $email)->first();
        if($user){
            $user->embassy_man_name = $name;
            $user->embassy_man_phone = $phn;
            if($user->save()){
                return redirect()->route('user/index')->with('success', 'User created successfully');

            }
            else{
                return response()->json([
                    'title'=> 'Error',
                    'success' => false,
                    'icon' => 'error',
                    'message' => 'Internal error',
                    
                ]);
            }
        }
        else{
            return response()->json([
                'title'=> 'Error',
                'success' => false,
                'icon' => 'error',
                'message' => 'User Not Found ',
                
            ]);
        }
    }  

    public function printer($id){
        $candidates = DB::table('candidates')
        ->leftJoin('visas', 'candidates.id', '=', 'visas.candidate_id')
        ->select('candidates.*', 'visas.*')->where('candidates.id', '=', $id)
        ->get();


        $agencyemail = Session::get('user');
        $agency = User::select('*')->where('email', '=', $agencyemail)->get();
        // dd(1,$candidates, $agency);        
        return view('user.print', compact('id', 'candidates', 'agency'));
    }
}
