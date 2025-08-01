@extends('layouts.master')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Forms</h3>
      <ul class="breadcrumbs mb-3">
        <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Forms</a></li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Fee structure Form</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Fee structure Form</div>
            @if (session('Success'))
              <div class="alert alert-success" role="alert">
                {{ session('Success') }}
              </div>
            @endif
          </div>

          <div class="card-body">
            <a href="{{ route('feestructure.index') }}" class="btn btn-success mb-3">Show FEE structures</a>

            <form action="{{ route('feestructure.post') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="class_id">Class ID</label>
                    <input type="number" class="form-control" name="class_id" id="class_id" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" class="form-control" name="amount" id="amount" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="month">Month</label>
                    <input type="text" class="form-control" name="month" id="month" placeholder="e.g. January" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="year">Year</label>
                    <input type="number" class="form-control" name="year" id="year" required>
                  </div>
                </div>

                <div class="col-md-12 mt-3">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-danger">Cancel</button>
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
