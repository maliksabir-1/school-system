@extends('layouts.master')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Edit Attendance</h3>
      <a href="{{ route('attendance.index') }}" class="btn btn-secondary mb-3">Back to List</a>
    </div>

    <div class="card">
       @if (session('Success'))
                    <div class="alert alert-success" role="alert">
                      {{ session('Success') }}
                    </div>
                  @endif
      <div class="card-body">
        <form action="{{ route('attendance.update', $users->id) }}" method="POST">
          @csrf
          
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" id="date" value="{{ old('date', $users->date) }}" required>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                  <option value="present" {{ $users->status === 'present' ? 'selected' : '' }}>Present</option>
                  <option value="absent" {{ $users->status === 'absent' ? 'selected' : '' }}>Absent</option>
                </select>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="remarks">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" rows="3">{{ old('remarks', $users->remarks) }}</textarea>
              </div>
            </div>

            <div class="col-12 mt-3">
              <div class="card-action">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('attendance.index') }}" class="btn btn-danger">Cancel</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
