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
              <form action="{{ route('parent.update',$users->id) }}" method="POST" >
                @csrf
                <div class="row">
                  {{-- Phone Field --}}
<div class="col-md-6 col-lg-4">
    <div class="form-group">
        <label for="phone">Phone</label>
        <input 
            type="text" 
            class="form-control" 
            name="phone" 
            id="phone" 
            placeholder="Enter Phone Number" 
            value="{{( $users->phone) }}">
    </div>
</div>

{{-- Relation Dropdown --}}
<div class="col-md-6 col-lg-4">
    <div class="form-group">
        <label for="relation">Relation</label>
        <select class="form-control" name="relation" id="relation">
            <option value="">Select Relation</option>
            <option value="Mother" {{ ( $users->relation) }}>Mother</option>
            <option value="Father" {{ ($users->relation)  }}>Father</option>
            <option value="Guardian" {{ ( $users->relation)}}>Guardian</option>
            <option value="Other" {{ ( $users->relation) }}>Other</option>
        </select>
    </div>
</div>

                  
                  <div class="col-md-6 col-lg-4">
                   
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
