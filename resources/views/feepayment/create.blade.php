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
          <li class="nav-item"><a href="#">Fee Payment Form</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Fee Payment Form</div>
              @if (session('Success'))
                <div class="alert alert-success" role="alert">
                  {{ session('Success') }}
                </div>
              @endif
            </div>

            <div class="card-body">
              <a href="{{ route('feepayment.index') }}" class="btn btn-success">Show Payments</a>
              <form action="{{ route('feepayment.post') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="student_id">Student ID</label>
                      <input type="number" class="form-control" name="student_id" id="student_id" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="fee_structure_id">Fee Structure ID</label>
                      <input type="number" class="form-control" name="fee_structure_id" id="fee_structure_id" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="amount_paid">Amount Paid</label>
                      <input type="number" class="form-control" name="amount_paid" id="amount_paid" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="payment_date">Payment Date</label>
                      <input type="date" class="form-control" name="payment_date" id="payment_date" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="method">Payment Method</label>
                      <input type="text" class="form-control" name="method" id="method" placeholder="e.g. Cash, Bank, Online" required>
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
