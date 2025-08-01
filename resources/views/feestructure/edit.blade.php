@extends('layouts.master')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Edit Fee structure</h3>
      <ul class="breadcrumbs mb-3">
        <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Edit</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Update Fee structure</div>
            @if (session('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
            @endif
          </div>

          <div class="card-body">
            <a href="{{ route('feestructure.index') }}" class="btn btn-success mb-3">Back to List</a>

            <form action="{{ route('feestructure.update', $users->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="class_id">Class ID</label>
                    <input type="number" class="form-control" name="class_id" id="class_id" value="{{ $users->class_id }}" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" name="amount" id="amount" value="{{ $users->amount }}" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="month">Month</label>
                    <input type="text" class="form-control" name="month" id="month" value="{{ $users->month }}" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="year">Year</label>
                    <input type="number" class="form-control" name="year" id="year" value="{{ $users->year }}" required>
                  </div>
                </div>

                <div class="col-md-12 mt-3">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{ route('feestructure.index') }}" class="btn btn-secondary">Cancel</a>
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
