@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Academic Term List</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Tables</a></li>
          <li class="separator"><i class="icon-arrow-right"></i></li>
          <li class="nav-item"><a href="#">Academic Terms</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Academic Terms</h4>
              <a href="{{ route('book.create') }}" class="btn btn-black" style="float: right">Add book</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                       <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($users as $item)
                      <tr>
                       <td>{{ $item->id }}</td>
                       <td>{{ $item->title }}</td>
                       <td>{{ $item->author }}</td>d>
                        <td>{{ $item->end_date }}</td>
                        <td>
                          <a href="{{ route('book.edit', $item->id) }}" class="btn btn-secondary">Edit</a>
                          <a href="{{ route('book.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                                                 
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
