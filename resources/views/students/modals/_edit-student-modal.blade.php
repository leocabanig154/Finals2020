<div class="modal fade" id="edit-student-modal-{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="{{ route('students.update') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    
                            @csrf
                            <label>First Name</label>
                            <input type="hidden" name="id" value="{{ $student->id }}"/>
                            <input class="form-control mb-2" name="first_name" placeholder="First Name" value="{{$student->first_name}}" />    
                            <label>Middle Name</label>
                            <input class="form-control mb-2" name="middle_name" placeholder="Middle Name" value="{{$student->middle_name}}" />
                            <label>Last Name</label>
                            <input class="form-control mb-2" name="last_name" placeholder="Last Name" value="{{$student->last_name}}" />
                            <label>Description</label>
                            <input class="form-control mb-2" name="description" placeholder="Last Name" value="{{$student->description}}" required />
                            <label>Date</label>
                            <input class="form-control mb-2" name="date" placeholder="yyyy-mm-dd" value="{{$student->date}}" required/>
                            <label>Time</label>
                             <div class="form-group">
                            <select class="form-control" id="sel2" type="text" name="time" class="form-control" aria-describedby="basic-addon1" value="{{$student->time}}" required>
                              <option>{{$student->time}}</option>
                              <option>08:00:00</option>
                              <option>09:00:00</option>
                              <option>10:00:00</option>
                              <option>11:00:00</option>
                              <option>01:00:00</option>
                              <option>02:00:00</option>
                              <option>03:00:00</option>
                              <option>04:00:00</option>
                              <option>05:00:00</option>
                            </select>
                            </div>
                            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Update Client</button>
      </div>
     </form>
    </div>
  </div>
</div>