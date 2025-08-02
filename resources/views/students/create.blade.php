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
              <form action="{{ route('student.post') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     {{-- User --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="user_id">User</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                      <option value="">Select User</option>
                      @foreach ($allUsers as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                {{-- Class --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="class_id">Class</label>
                    <select name="class_id" id="class_id" class="form-control" required>
                      <option value="">Select Class</option>
                      @foreach ($allClasses as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                {{-- Section --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="section_id">Section</label>
                    <select name="section_id" id="section_id" class="form-control">
                      <option value="">Select Section</option>
                      @foreach ($allSections as $section)
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                {{-- Parent --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="parent_id">Parent</label>
                    <select name="parent_id" id="parent_id" class="form-control">
                      <option value="">Select Parent</option>
                      @foreach ($allParents as $parent)
                        <option value="{{ $parent->id }}">{{ $parent->father_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                {{-- Name --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                </div>

                {{-- Email --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                </div>

                {{-- Phone --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control">
                  </div>
                </div>

                {{-- Address --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control" rows="2"></textarea>
                  </div>
                </div>

                {{-- DOB --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" class="form-control">
                  </div>
                </div>

                {{-- Gender --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control">
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>

                {{-- Image --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image">Profile Image</label>
                    <input type="file" name="image" class="form-control-file">
                  </div>
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
