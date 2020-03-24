<div class="modal fade" id="delete-student-modal-{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to Delete{{$student->full_name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="{{route('students.destroy', array('id'=>$student->id)) }}" method="post">
        @csrf 
          <div class="modal-body">  
     
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="sumbit" class="btn btn-danger">Delete Appointment</button>
          </div>
        </form>

    </div>
  </div>
</div>