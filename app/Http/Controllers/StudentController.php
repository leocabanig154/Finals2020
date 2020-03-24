<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Carbon\Carbon;
use Validator;

class StudentController extends Controller
{
    public function index(){
    	// $students = Student::all()
     //    ->where('date');
     //    return view("students.index", array('students' => $students));

        // $students = Student::all();

        // $dates = Student::groupBy('date')->pluck('date');
        // return view('students.index', compact('dates', 'students'));
        $students = Student::orderBy('date')->get()->groupBy(function($item){
            return Carbon::parse($item->date)->format('M d, yy l');
        });
        return view('students.index', compact('students'));


      
        
        


    }
    public function addStudent(){
    	return view('students.add-student'); 
    }

    public function store(Request $request){

        $rule  =  array(
                    'date'       => 'required|date|after_or_equal:today',
                    // 'timeout'   => 'required',
                    // 'timeout'   => 'after:time',
                    // 'date_out'         => 'required|date|after:date',
                       ) ;
        $validator = Validator::make($request->all(),$rule);
        if ($validator->fails())
            {
            $messages = $validator->messages();
            return redirect()->route('students.index')->withErrors($messages);
        }
        
        $book = Student::where('time',$request->time)
                    // ->where('timeout',$request->timeout)
                    ->whereDate('date',Carbon::parse($request->date))
                    ->get();
        if (count($book)>0){
            return redirect()->route('students.index')->withErrors(["Already have appointed on that time!"]);
        }



    	$request->validate([
    		'first_name' => 'required',
    		'last_name' => 'required',
    	]);

    	$student = new Student;
    	$student->first_name = $request->first_name;
    	$student->middle_name = $request->middle_name ?  $request->middle_name: 'N/A';
    	$student->last_name = $request->last_name;
        $student->description = $request->description;
        $student->date = $request->date;
        $student->time = $request->time;
        // $student->timeout = $request->timeout;
    	$student->save();

    	return redirect()->route('students.index')->withStatus('Appointed Added.'); 
    }
        public function update(Request $request){
        $rule  =  array(
                    'date'       => 'required|date|after_or_equal:today',
                    // 'timeout'   => 'required',
                    // 'timeout'   => 'after:time',
                    // 'date_out'         => 'required|date|after:date',
                       ) ;
        $validator = Validator::make($request->all(),$rule);
        if ($validator->fails())
            {
            $messages = $validator->messages();
            return redirect()->route('students.index')->withErrors($messages);
        }
        
        $book = Student::where('time',$request->time)
                    // ->where('timeout',$request->timeout)
                    ->whereDate('date',Carbon::parse($request->date))
                    ->get();
        if (count($book)>0){
            return redirect()->route('students.index')->withErrors(["Already have appointed on that time!"]);
        }


         $request->validate([
          'first_name'=> 'required',
          'last_name'=> 'required'
         ]);   

         $student = Student::find($request->id);
         if($student){
         	$student->first_name =$request->first_name;
         	$student->last_name =$request->last_name;
         	$student->middle_name =$request->middle_name ? $request->middle_name :'N/A';
            $student->description = $request->description;
            $student->date = $request->date;
            $student->time = $request->time;

            $student->save();
         }
         return redirect()->back()->withStatus('Appointed Update.');
        } 

        public function destroy(Request $request){
              $student = Student::find($request->id);

              if($student){
                $student->delete();
              }
              return redirect()->back()->withStatus('Appointment Deleted.');
        }
}