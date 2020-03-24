 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-student-modal">Add Appointment</button>

            <h1>Clients</h1>
            @include('students.modals._add-student-modal')
              <br><br>
             @foreach($students as $date => $student_list)
                <h5>{{$date}}</h5>
         
                 
                <table class="table" border="0">
                <thead>
                  @foreach($student_list as $student)
                    <tr>
                       
                        <td>{{$student->time}}
                          {{$student->last_name}}, {{$student->first_name}}  {{$student->middle_name}}, {{$student->description}}
                        </b></td>
                        <td><div style="display: flex;justify-content: flex-end;">
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit-student-modal-{{$student->id}}">Edit</button>
                             @include('students.modals._edit-student-modal')

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-student-modal-{{$student->id}}">Delete</button>
                             @include('students.modals._delete-student-modal') 
                        </div></td>
                        
                    </tr>  
                  @endforeach 
                </thead>
                </table>
                @endforeach

      

        </div>
    </div>
</div>
@endsection

