{{-- @extends('layouts.master')
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
              
              <form action="{{ route('students.update',$users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                  
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"/ value="{{ $users->name }}"> 
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address"/ value="{{ $users->address }}">
                    </div>
                    <div class="form-group">
                      <label for="cnic">Cnic</label>
                      <input type="text" class="form-control" name="cnic" id="cnic" placeholder="Enter cnic"/ value="{{ $users->cnic }}"> 
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="email2">Email Address</label>
                      <input type="email" class="form-control" name="email" id="email2" placeholder="Enter Email"/ value="{{ $users->email }}">
                      <small id="emailHelp2" class="form-text text-muted">
                        We'll never share your email with anyone else.
                      </small>
                    </div>
                    <div class="form-group">
                      <label for="class">Class</label>
                      <input type="text" class="form-control" name="class" id="class" placeholder="Enter Class"/ value="{{ $users->class }}"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Example file input</label>
                      <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1"/ value="{{ $users->file }}">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="{{ $users->phone }}">
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
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection --}}



@extends('layouts.master')
@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Edit Student</h3>
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
            <a href="#">Edit Student</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Edit Form</div>
               @if (session('success'))
                    <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                    </div>
                  @endif
            </div>
            <div class="card-body">
              <a href="{{ route('students.index') }}" class="btn btn-success mb-3">Show Students</a>

              {{-- ✅ Edit Form starts here --}}
              <form action="{{ route('students.update', $users->id) }}" method="POST">
                @csrf
                
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{ ( $users->name) }}" required>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" id="address" value="{{ ( $users->address) }}" required>
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select name="gender" id="gender" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="male" {{ $users->gender }}>Male</option>
                        <option value="female" {{ $users->gender }}>Female</option>
                        <option value="other" {{ $users->gender }}>Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" name="email" id="email" value="{{( $users->email) }}" required>
                    </div>
                    <div class="form-group">
                      <label for="class_id">Class</label>
                    <select name="class_id" id="class_id" class="form-control" required>
                      <option value="">Select Class</option>
                      @foreach ($classes as $class)
                        <option value="{{ $class->id }}" {{ $users->class_id == $class->id ? 'selected' : '' }}>
                          {{ $class->name }}
                        </option>
                      @endforeach
                    </select>

                    </div>
                    <div class="form-group">
                      <label for="roll_no">Roll No</label>
                      <input type="number" class="form-control" name="roll_no" id="roll_no" value="{{ ( $users->roll_number) }}" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" name="phone" id="phone" value="{{ ($users->phone) }}" required>
                    </div>
                    <div class="form-group">
                      <label for="dob">Date Of Birth</label>
                      <input type="date" class="form-control" name="dob" id="dob" value="{{ ( $users->dob) }}" required>
                    </div>
                    <div class="card-action">
                      <button type="submit" class="btn btn-success">Update</button>
                      <a href="{{ route('students.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                  </div>
                </div>
              </form>
              {{-- ✅ Edit Form ends here --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

