@extends('layouts.master')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Attendance Form</h3>
      <ul class="breadcrumbs mb-3">
        <li class="nav-home">
          <a href="#"><i class="icon-home"></i></a>
        </li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Forms</a></li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Attendance</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Attendance Add</div>
          </div>
          <div class="card-body">
            <a href="{{ route('attendance.index') }}" class="btn btn-success mb-3">Show Students</a>

            {{-- ✅ Form starts here --}}
            <form action="{{ route('attendance.post') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date" id="date" required>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                      <option value="">-- Select Status --</option>
                      <option value="present">Present</option>
                      <option value="absent">Absent</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4">
                  <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <textarea name="remarks" id="remarks" class="form-control" rows="3" placeholder="Enter remarks (optional)"></textarea>
                  </div>
                </div>

                <div class="col-12 mt-3">
                  <div class="card-action">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </div>
            </form>
            {{-- ✅ Form ends here --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
