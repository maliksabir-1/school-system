@extends('layouts.master')
@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Edit Class Schedule</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Class Schedule</a></li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Edit</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Edit Schedule</div>
              @if (session('Success'))
                <div class="alert alert-success">{{ session('Success') }}</div>
              @endif
            </div>

            <div class="card-body">
              <a href="{{ route('timetable.index') }}" class="btn btn-success mb-3">Back to List</a>

              {{-- ✅ Edit Form --}}
              <form action="{{ route('timetable.update', $users->id) }}" method="POST">
                @csrf
                

                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="class_id">Class</label>
                      <select name="class_id" class="form-control" required>
                        <option value="">Select Class</option>
                        @foreach ($classes as $class)
                          <option value="{{ $class->id }}" {{ $users->class_id == $class->id ? 'selected' : '' }}>
                            {{ $class->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="section_id">Section</label>
                      <select name="section_id" class="form-control" required>
                        <option value="">Select Section</option>
                        @foreach ($sections as $section)
                          <option value="{{ $section->id }}" {{ $users->section_id == $section->id ? 'selected' : '' }}>
                            {{ $section->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="day">Day</label>
                      <select name="day" class="form-control" required>
                        @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                          <option value="{{ $day }}" {{ $users->day == $day ? 'selected' : '' }}>{{ $day }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="subject_id">Subject</label>
                      <select name="subject_id" class="form-control" required>
                        <option value="">Select Subject</option>
                        @foreach ($subjects as $subject)
                          <option value="{{ $subject->id }}" {{ $users->subject_id == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="teacher_id">Teacher</label>
                      <select name="teacher_id" class="form-control" required>
                        <option value="">Select Teacher</option>
                        @foreach ($teachers as $teacher)
                          <option value="{{ $teacher->id }}" {{ $users->teacher_id == $teacher->id ? 'selected' : '' }}>
                            {{ $teacher->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="start_time">Start Time</label>
                      <input type="time" name="start_time" class="form-control" value="{{ $users->start_time }}" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="end_time">End Time</label>
                      <input type="time" name="end_time" class="form-control" value="{{ $users->end_time }}" required>
                    </div>

                    <div class="card-action mt-4">
                      <button type="submit" class="btn btn-primary">Update</button>
                      <a href="{{ route('timetable.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                  </div>
                </div>
              </form>
              {{-- ✅ End Form --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
