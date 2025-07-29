@extends('layouts.master')
@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Forms</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Forms</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Basic Form</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Form Elements</div>
               @if (session('success'))
                    <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                    </div>
                  @endif
            </div>
            <div class="card-body">
              <a href="{{ route('students.index') }}" class="btn btn-success">Show Students</a>
              {{-- ✅ Form starts here --}}
              <form action="{{ route('student.post') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required>
                      </div>
                      <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control" required>
                          <option value="">Select Gender</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                      <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                      </div>
                      <div class="form-group">
                        <label for="class_id">Class</label>
                           <select name="class_id" id="class_id" class="form-control" required>
                              <option value="">Select Class</option>
                                    @foreach ($classes as $class)
                                      <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                            </select>


                      </div>
                       <div class="form-group">
                        <label for="address">Roll No</label>
                        <input type="number" class="form-control" name="roll_no" id="roll_no" placeholder="Enter Roll No" required>
                      </div>
                    </div>

                    

                    <div class="col-md-6 col-lg-4">
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" required>
                      </div>
                      <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" required>
                      </div>
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
