@extends('layouts.master')
@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Edit Teacher</h3>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Update Teacher Info</div>
            @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif
          </div>

          <div class="card-body">
            <a href="{{ route('teachers.index') }}" class="btn btn-primary mb-3">Back to List</a>

            {{-- ✅ Edit Form Starts --}}
            <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="row">

                {{-- User --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="user_id">User</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                      <option value="">Select User</option>
                      @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $teacher->user_id == $user->id ? 'selected' : '' }}>
                          {{ $user->name }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                </div>

                {{-- Name --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name"
                      value="{{ $teacher->name }}" required>
                  </div>
                </div>

                {{-- DOB --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob"
                      value="{{ $teacher->dob }}">
                  </div>
                </div>

                {{-- Gender --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="">Select Gender</option>
                      <option value="Male" {{ $teacher->gender == 'Male' ? 'selected' : '' }}>Male</option>
                      <option value="Female" {{ $teacher->gender == 'Female' ? 'selected' : '' }}>Female</option>
                      <option value="Other" {{ $teacher->gender == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                  </div>
                </div>

                {{-- Qualification --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="qualification">Qualification</label>
                    <input type="text" class="form-control" name="qualification" id="qualification"
                      value="{{ $teacher->qualification }}">
                  </div>
                </div>

                {{-- Phone --}}
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone"
                      value="{{ $teacher->phone }}">
                  </div>
                </div>

                {{-- Address --}}
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3">{{ $teacher->address }}</textarea>
                  </div>
                </div>

                {{-- Buttons --}}
                <div class="col-md-12 mt-3">
                  <button type="submit" class="btn btn-success">Update</button>
                  <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancel</a>
                </div>

              </div>
            </form>
            {{-- ✅ Edit Form Ends --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
