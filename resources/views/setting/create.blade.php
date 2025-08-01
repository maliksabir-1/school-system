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
          <li class="nav-item"><a href="#">Basic Form</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Form Elements</div>
              @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
              @endif
            </div>

            <div class="card-body">
              <form action="{{ route('setting.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="school_name">School Name</label>
                      <input type="text" class="form-control" name="school_name" id="school_name" placeholder="Enter School Name" required>
                    </div>

                    <div class="form-group">
                      <label for="session_year">Session Year</label>
                      <input type="text" class="form-control" name="session_year" id="session_year" placeholder="Enter Session Year" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="logo">School Logo</label>
                      <input type="file" class="form-control" name="logo" id="logo" required>
                    </div>

                    <div class="form-group">
                      <label for="contact_email">Contact Email</label>
                      <input type="email" class="form-control" name="contact_email" id="contact_email" placeholder="Enter Email" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required>
                    </div>

                    <div class="form-group">
                      <label for="contact_phone">Contact Phone</label>
                      <input type="text" class="form-control" name="contact_phone" id="contact_phone" placeholder="Enter Phone" required>
                    </div>

                    <div class="card-action mt-3">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
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
