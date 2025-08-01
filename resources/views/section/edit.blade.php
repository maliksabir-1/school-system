@extends('layouts.master')
@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Edit Teacher</h3>
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
            <a href="#">Edit Teacher</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Edit Teacher Info</div>
              @if (session('Success'))
                <div class="alert alert-success" role="alert">
                  {{ session('Success') }}
                </div>
              @endif
            </div>
            <div class="card-body">
              <a href="{{ route('section.index') }}" class="btn btn-success">Show Teachers</a>
              {{-- ✅ Form starts here --}}
              <form action="{{ route('section.update', $users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
              
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{ $users->name }}" required>
                    </div>
                  </div>

                 <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="class_id">Class</label>
                      <select name="class_id" id="class_id" class="form-control" required>
                        <option value="">Select Class</option>
                        @foreach ($classes as $class)
                          <option value="{{ $class->id }}" {{  $users->class_id == $class->id ? 'selected' : '' }}>
                            {{ $class->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>


                  <div class="col-md-6 col-lg-4">
                   <div class="form-group">
                      <label for="teacher_id">Teacher</label>
                      <select name="teacher_id" id="teacher_id" class="form-control" required>
                        <option value="">Select Teacher</option>
                        @foreach ($teachers as $teacher)
                          <option value="{{ $teacher->id }}" {{ ( $users->teacher_id == $teacher->id) ? 'selected' : '' }}>
                            {{ $teacher->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="card-action">
                      <button type="submit" class="btn btn-success">Update</button>
                      <a href="{{ route('section.index') }}" class="btn btn-secondary">Cancel</a>
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
