@extends('layouts.master')
@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Add Teacher</h3>
      <ul class="breadcrumbs mb-3">
        <li class="nav-home">
          <a href="#"><i class="icon-home"></i></a>
        </li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Teacher</a></li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Create</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Teacher Form</div>
            @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif
          </div>

          <div class="card-body">
            <a href="{{ route('teachers.index') }}" class="btn btn-success mb-3">Show Teachers</a>

            {{-- ✅ Form Starts --}}
            <form action="{{ route('teachers.post') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">

                {{-- User --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="user_id">User</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                      <option value="">Select User</option>
                      @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                {{-- Name --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                  </div>
                </div>

                {{-- Date of Birth --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob">
                  </div>
                </div>

                {{-- Gender --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>

                {{-- Qualification --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" class="form-control" name="qualification" id="qualification">
                  </div>
                </div>

                {{-- Phone --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                  </div>
                </div>

                {{-- Address --}}
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                  </div>
                </div>

                {{-- Submit --}}
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                  </div>
                </div>

              </div>
            </form>
            {{-- ✅ Form Ends --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
