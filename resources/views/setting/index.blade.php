@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Setting List</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#"><i class="icon-home"></i></a>
          </li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Tables</a></li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">School Table</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Setting Data</h4>
              <a href="{{ route('setting.create') }}" class="btn btn-black" style="float: right">Add School</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>School Name</th>
                      <th>Session Year</th>
                      <th>Address</th>
                      <th>Contact Email</th>
                      <th>Contact Phone</th>
                      <th>Logo</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>School Name</th>
                      <th>Session Year</th>
                      <th>Address</th>
                      <th>Contact Email</th>
                      <th>Contact Phone</th>
                      <th>Logo</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($users as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->school_name }}</td>
                        <td>{{ $item->session_year }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->contact_email }}</td>
                        <td>{{ $item->contact_phone }}</td>
                        <td>  
                            <img src="{{ asset('storage/' . $item->logo) }}" alt="Logo" width="60">
                        </td>
                           <td>
                              <a href="{{ route('setting.edit',['id' => $item->id ]) }}" class="btn btn-secondary">Edit</a>
                              <a href="{{ route('setting.delete',['id' => $item->id ]) }}" class="btn btn-danger">Delete</a>
                            </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- JS Assets --}}
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#basic-datatables").DataTable();
    });
  </script>
@endsection
