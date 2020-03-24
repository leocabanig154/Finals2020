<!-- Modal -->
<div class="modal fade" id="add-student-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="{{ route('students.store') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Client(s)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    
                            @csrf

                            <input class="form-control mb-2" name="first_name" placeholder="First Name"  />    
                            <input class="form-control mb-2" name="middle_name" placeholder="Middle Name"  />
                            <input class="form-control mb-2" name="last_name" placeholder="Last Name"   />
                            <input class="form-control mb-2" name="description" placeholder="Description"  required/>
                            <label>Date (yyyy-mm-dd)</label>
                            <input class="form-control mb-2" name="date" placeholder="yyyy-mm-dd"  required/>

                            <div class="form-group">
                            <label for="sel2" >Time In</label>
                            <select class="form-control" id="sel2" type="text" name="time" class="form-control" aria-describedby="basic-addon1" value="" required>
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

                           <!--  <div class="form-group">
                            <label for="sel2" >Time Out</label>
                            <select class="form-control" id="sel2" type="text" name="timeout" class="form-control" aria-describedby="basic-addon1" value="" required>
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
                            </div> -->
                           
                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="sumbit" class="btn btn-primary">Add Client</button>
      </div>
     </form>
    </div>
  </div>
</div>