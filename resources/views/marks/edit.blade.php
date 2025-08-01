@extends('layouts.master')
@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Edit Exam Mark</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Marks</a></li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Update Exam Mark</div>
              @if (session('Success'))
                <div class="alert alert-success" role="alert">
                  {{ session('Success') }}
                </div>
              @endif
            </div>
            <div class="card-body">
              <a href="{{ route('mark.index') }}" class="btn btn-success mb-3">Show Marks</a>

              {{-- ✅ Edit Form --}}
              <form action="{{ route('mark.update', $users->id) }}" method="POST">
                @csrf
                
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="student_id">Student</label>
                      <select name="student_id" class="form-control" required>
                        <option value="">Select Student</option>
                        @foreach ($students as $student)
                          <option value="{{ $student->id }}" {{ $users->student_id == $student->id ? 'selected' : '' }}>
                            {{ $student->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

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
                      <label for="marks_obtained">Marks Obtained</label>
                      <input type="number" step="0.01" class="form-control" name="marks_obtained" value="{{ $users->marks_obtained }}" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="exam_id">Exam</label>
                      <select name="exam_id" class="form-control" required>
                        <option value="">Select Exam</option>
                        @foreach ($exams as $exam)
                          <option value="{{ $exam->id }}" {{ $users->exam_id == $exam->id ? 'selected' : '' }}>
                            {{ $exam->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="max_marks">Maximum Marks</label>
                      <input type="number" step="0.01" class="form-control" name="max_marks" value="{{ $users->max_marks }}" required>
                    </div>

                    <div class="card-action mt-4">
                      <button type="submit" class="btn btn-primary">Update</button>
                      <a href="{{ route('mark.index') }}" class="btn btn-secondary">Cancel</a>
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
