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
            </div>
            <div class="card-body">
              <a href="{{ route('students.index') }}" class="btn btn-success">Show Students</a>
              {{-- ✅ Form starts here --}}
              <form action="{{ route('student.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"/> 
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address"/>
                    </div>
                    <div class="form-group">
                      <label for="cnic">Cnic</label>
                      <input type="text" class="form-control" name="cnic" id="cnic" placeholder="Enter cnic"/> 
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="email2">Email Address</label>
                      <input type="email" class="form-control" name="email" id="email2" placeholder="Enter Email"/>
                      <small id="emailHelp2" class="form-text text-muted">
                        We'll never share your email with anyone else.
                      </small>
                    </div>
                    <div class="form-group">
                      <label for="class">Class</label>
                      <input type="text" class="form-control" name="class" id="class" placeholder="Enter Class"/> 
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Example file input</label>
                      <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1"/>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone"/>
                    </div>
                    <div class="form-group">
                      <label for="dob">Date Of Birth</label>
                      <input type="date" class="form-control" name="dob" id="dob"/>
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
