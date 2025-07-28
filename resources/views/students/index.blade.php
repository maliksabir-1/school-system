@extends('layouts.master')
@section('content')
    <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">DataTables.Net</h3>
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
                  <a href="{{ route('students.index') }}">Tables</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Datatables</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                      <a href="{{ route('students.create')}}" class="btn btn-black" style="float: right">Add Student</a>
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                     <table id="basic-datatables" class="display table table-striped table-hover">

                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Class</th>
                            <th>Date of Birth</th>
                            <th>Cnic No</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                           <th>ID</th>
                           <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Class</th>
                            <th>Date of Birth</th>
                            <th>Cnic No</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($users as $item)

                          <tr>
                            <td>{{$item->id ?? ""}}</td>
                            <td>{{$item->name ?? ""}}</td>
                            <td>{{$item->email ?? ""}}</td>
                            <td>{{$item->phone ?? ""}}</td>
                            <td>{{$item->address ?? ""}}</td>
                            <td>{{$item->class ?? ""}}</td>
                            <td>{{$item->dob ?? ""}}</td>
                            <td>{{$item->cnic ?? ""}}</td>
                            <td>
                            <img src="{{ asset('storage/' . $item->image) }}" style="width: 100px; height: 100px;" alt="img">
                            </td>


                             <td>
                                <a href="{{ route('students.edit',['id' => $item->id ]) }}" class="btn btn-secondary">Edit</a>
                                <a href="{{ route('students.delete',['id' => $item->id ]) }}" class="btn btn-danger">Delete</a>
                              </td>
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
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#basic-datatables").DataTable({});

        $("#multi-filter-select").DataTable({
          pageLength: 5,
          initComplete: function () {
            this.api()
              .columns()
              .every(function () {
                var column = this;
                var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                  .appendTo($(column.footer()).empty())
                  .on("change", function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column
                      .search(val ? "^" + val + "$" : "", true, false)
                      .draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function (d, j) {
                    select.append(
                      '<option value="' + d + '">' + d + "</option>"
                    );
                  });
              });
          },
        });

        // Add Row
        $("#add-row").DataTable({
          pageLength: 5,
        });

        var action =
          '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function () {
          $("#add-row")
            .dataTable()
            .fnAddData([
              $("#addName").val(),
              $("#addPosition").val(),
              $("#addOffice").val(),
              action,
            ]);
          $("#addRowModal").modal("hide");
        });
      });
    </script>
@endsection