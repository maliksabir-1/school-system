@extends('layouts.master')
@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Forms</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Forms</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Basic Form</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Form Elements</div>
               @if (session('Success'))
                    <div class="alert alert-success" role="alert">
                      {{ session('Success') }}
                    </div>
                  @endif
            </div>
            <div class="card-body">
              <a href="{{ route('parent.index') }}" class="btn btn-success">Show parent</a>
              {{-- ✅ Form starts here --}}
              <form action="{{ route('parent.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  {{-- Phone Field --}}
                 <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="user_id">Student/User</label>
                      <select name="user_id" id="user_id" class="form-control" required>
                        <option value="">Select Student</option>
                        @foreach ($allUsers as $user)
                          <option value="{{ $user->id }}" {{ old('user_id', $users->user_id ?? '') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                  </div>

               {{-- Father Name --}}
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="father_name">Father Name</label>
                      <input type="text" name="father_name" id="father_name" class="form-control" placeholder="Enter Father's Name"
                        value="{{ old('father_name', $users->father_name ?? '') }}">
                    </div>
                  </div>

                  
                  {{-- Phone --}}
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number"
                        value="{{ old('phone', $users->phone ?? '') }}">
                    </div>
                  </div>
                   {{-- Address --}}
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <textarea name="address" id="address" class="form-control" rows="2" placeholder="Enter Address">{{ old('address', $users->address ?? '') }}</textarea>
                    </div>
                  </div>
                   <div class="col-md-12 col-lg-12">
                   
                    <div class="card-action">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
              {{-- ✅ Form ends here --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
