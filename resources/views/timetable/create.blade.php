@extends('layouts.master')
@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Forms</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#"><i class="icon-home"></i></a>
          </li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Forms</a></li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Class Schedule Form</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Class Schedule</div>
              @if (session('Success'))
                <div class="alert alert-success" role="alert">
                  {{ session('Success') }}
                </div>
              @endif
            </div>
            <div class="card-body">
              <a href="{{ route('timetable.index') }}" class="btn btn-success mb-3">Show All Schedules</a>

              {{-- ✅ Class Schedule Form --}}
              <form action="{{ route('timetable.post') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="class_id">Class</label>
                      <select name="class_id" class="form-control" required>
                        <option value="">Select Class</option>
                        @foreach ($classes as $class)
                          <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="section_id">Section</label>
                      <select name="section_id" class="form-control" required>
                        <option value="">Select Section</option>
                        @foreach ($sections as $section)
                          <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="day">Day</label>
                      <select name="day" class="form-control" required>
                        <option value="">Select Day</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="subject_id">Subject</label>
                      <select name="subject_id" class="form-control" required>
                        <option value="">Select Subject</option>
                        @foreach ($subjects as $subject)
                          <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="teacher_id">Teacher</label>
                      <select name="teacher_id" class="form-control" required>
                        <option value="">Select Teacher</option>
                        @foreach ($teachers as $teacher)
                          <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="start_time">Start Time</label>
                      <input type="time" name="start_time" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="end_time">End Time</label>
                      <input type="time" name="end_time" class="form-control" required>
                    </div>

                    <div class="card-action mt-4">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-danger">Cancel</button>
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
