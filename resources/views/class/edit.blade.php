@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Edit Student</h3>
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
            <a href="#">Students</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Edit</a>
          </li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Edit Form</div>
            </div>
            <div class="card-body">
              <a href="{{ route('class.index') }}" class="btn btn-success">Back to List</a>

              {{-- ✅ Edit Form starts here --}}
              <form action="{{ route('class.update', $users->id) }}" method="POST">
                @csrf
                

                <div class="row">
                  <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" 
                             class="form-control" 
                             name="name" 
                             id="name" 
                             value="{{ old('name', $users->name) }}" 
                             placeholder="Enter Name"/> 
                    </div>

                    
                    <div class="card-action mt-3">
                      <button type="submit" class="btn btn-success">Update</button>
                      <a href="{{ route('class.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                     <div class="form-group">
                      <label for="section">Section</label>
                      <input type="text" 
                             class="form-control" 
                             name="section" 
                             id="section" 
                             value="{{ old('section', $users->section) }}" 
                             placeholder="Enter Section"/> 
                    </div>

                    </div>
                  
                </div>
              </form>
              {{-- ✅ Edit Form ends here --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
