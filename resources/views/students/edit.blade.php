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
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Forms</a></li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Edit Student</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Edit Student</div>
              @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
              @endif
            </div>

            <div class="card-body">
              <a href="{{ route('students.index') }}" class="btn btn-success">Back to Students</a>

              {{-- ✅ Form starts --}}
              <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
               
                <div class="row">
                  
                  {{-- User --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="user_id">User</label>
                      <select name="user_id" class="form-control" required>
                        <option value="">Select User</option>
                        @foreach ($allUsers as $user)
                          <option value="{{ $user->id }}" {{ $student->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  {{-- Class --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="class_id">Class</label>
                      <select name="class_id" class="form-control" required>
                        <option value="">Select Class</option>
                        @foreach ($allClasses as $class)
                          <option value="{{ $class->id }}" {{ $student->class_id == $class->id ? 'selected' : '' }}>
                            {{ $class->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  {{-- Section --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="section_id">Section</label>
                      <select name="section_id" class="form-control">
                        <option value="">Select Section</option>
                        @foreach ($allSections as $section)
                          <option value="{{ $section->id }}" {{ $student->section_id == $section->id ? 'selected' : '' }}>
                            {{ $section->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  {{-- Parent --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="parent_id">Parent</label>
                      <select name="parent_id" class="form-control">
                        <option value="">Select Parent</option>
                        @foreach ($allParents as $parent)
                          <option value="{{ $parent->id }}" {{ $student->parent_id == $parent->id ? 'selected' : '' }}>
                            {{ $parent->father_name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  {{-- Name --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
                    </div>
                  </div>

                  {{-- Email --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" value="{{ $student->email }}">
                    </div>
                  </div>

                  {{-- Phone --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
                    </div>
                  </div>

                  {{-- Address --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <textarea name="address" class="form-control" rows="2">{{ $student->address }}</textarea>
                    </div>
                  </div>

                  {{-- DOB --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="dob">Date of Birth</label>
                      <input type="date" name="dob" class="form-control" value="{{ $student->dob }}">
                    </div>
                  </div>

                  {{-- Gender --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="gender">Gender</label>
                      <select name="gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
                      </select>
                    </div>
                  </div>

                  {{-- Image --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="image">Profile Image</label><br>
                      @if($student->image)
                        <img src="{{ asset('storage/' . $student->image) }}" alt="Image" width="80"><br><br>
                      @endif
                      <input type="file" name="image" class="form-control-file">
                    </div>
                  </div>

                  <div class="card-action mt-4">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                  </div>

                </div>
              </form>
              {{-- ✅ Form ends --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
