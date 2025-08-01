@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Edit setting Info</h3>
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
              <div class="card-title">Edit Form</div>
              @if (session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
              @endif
            </div>

            <div class="card-body">
              <form action="{{ route('setting.update', $users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                

                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="school_name">School Name</label>
                      <input type="text" class="form-control" name="school_name" id="school_name"
                             value="{{ ($users->school_name) }}" required>
                    </div>

                    <div class="form-group">
                      <label for="session_year">Session Year</label>
                      <input type="text" class="form-control" name="session_year" id="session_year"
                             value="{{( $users->session_year) }}" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="logo">setting Logo</label>
                      <input type="file" class="form-control" name="logo" id="logo">
                      @if($users->logo)
                        <div class="mt-2">
                          <img src="{{ asset('storage/' . $users->logo) }}" alt="Logo" width="100">
                        </div>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="contact_email">Contact Email</label>
                      <input type="email" class="form-control" name="contact_email" id="contact_email"
                             value="{{( $users->contact_email) }}" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" id="address"
                             value="{{($users->address) }}" required>
                    </div>

                    <div class="form-group">
                      <label for="contact_phone">Contact Phone</label>
                      <input type="text" class="form-control" name="contact_phone" id="contact_phone"
                             value="{{($users->contact_phone) }}" required>
                    </div>

                    <div class="card-action mt-3">
                      <button type="submit" class="btn btn-primary">Update</button>
                      <a href="{{ route('setting.index') }}" class="btn btn-secondary">Cancel</a>
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
