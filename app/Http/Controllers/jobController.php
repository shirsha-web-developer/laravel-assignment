<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobseeker as Jobseeker;
use App\Models\testquestions as testquestions;
use Illuminate\Support\Facades\Validator;
class jobController extends Controller
{
    public function addJob(){
        return view('addjob');

    }
    public function thankyou(){
        return view('thankyou');

    }

    public function showquestions(){
        $questions=testquestions::all()->toArray();
        //dd($questions);
        return view('show-questions',compact('questions'));

    }
    public function add_job(Request $request){
        //dd($request->all());
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'qual' => 'required',
            'position' => 'required',
            'phone' => 'required',
        ]);

        $record = [
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'hqual' => $request['qual'],
            'position' => $request['position'],
            'phone' => $request['phone'],
        ];
         
        Jobseeker::create($record);
        return redirect()->route('showquestions');

    }

    public function countscore(Request $request){
        $questions=testquestions::all()->toArray();
        $score=0;
        //dd($request->all());
        foreach($questions as $key => $q){
            $x='option';
            //dd($x.$key+1);
            //echo $request['option.$loop->iteration'];
            if($request[$x.$key+1]==$q['ans']){
                //dd('entered');
                $score= $score+$q['marks'];
                //dd($score);

            }
        }
        //dd($score);
        return view('thankyou',['score'=>$score]);
        
    }
}
