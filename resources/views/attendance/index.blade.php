@extends('layouts.master')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Attendance Records</h3>
      <ul class="breadcrumbs mb-3">
        <li class="nav-home">
          <a href="#"><i class="icon-home"></i></a>
        </li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item"><a href="#">Attendance</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">

        {{-- 🗓️ Date Filter --}}
        <form method="GET" action="{{ route('attendance.index') }}" class="mb-4">
          <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Filter by Date</label>
            <div class="col-sm-4">
              <input type="date" name="date" class="form-control" id="date" value="{{ request('date') }}">
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary">Filter</button>
            </div>
          </div>
        </form>

        {{-- ✅ Data Table --}}
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Attendance List</h4>
            <a href="{{ route('attendance.create') }}" class="btn btn-success" style="float: right">Add Attendance</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>student_id</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                 <tfoot>
                    <tr>
                    <th>ID</th>
                    <th>student_id</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    <th>Actions</th>
                    </tr>
                  </tfoot>
                <tbody>
                  @foreach ($users as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{$item->student_id}}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ ucfirst($item->status) }}</td>
                    <td>{{ $item->remarks }}</td>
                    <td>
                      <a href="{{ route('attendance.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                      <a href="{{ route('attendance.delete', $item->id) }}" class="btn btn-warning btn-sm">Delete</a>
                      {{-- Optional: Add delete button if needed --}}
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

{{-- ✅ DataTables Scripts --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $("#basic-datatables").DataTable();
  });
</script>
@endsection
