@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Edit Academic Term</h3>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Update Term</div>
              @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
              @endif
            </div>

            <div class="card-body">
              <form action="{{ route('exam.update', $users->id) }}" method="POST">
                @csrf
                

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{ $users->name }}" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="term">Term</label>
                      <input type="text" class="form-control" name="term" id="term" value="{{ $users->term }}" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="start_date">Start Date</label>
                      <input type="date" class="form-control" name="start_date" id="start_date" value="{{ $users->start_date }}" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="end_date">End Date</label>
                      <input type="date" class="form-control" name="end_date" id="end_date" value="{{ $users->end_date }}" required>
                    </div>
                  </div>

                  <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('exam.index') }}" class="btn btn-secondary">Back</a>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
