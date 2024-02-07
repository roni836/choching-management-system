@extends('admin.base')

@section('content')

<div class="mt-3">
    <div class="d-flex items-center justify-content-between">
        <h2>Manage Students (5)</h2>
    <button class="btn btn-success">Add Student</button>
    </div>
    <div class="table-responsive mt-3">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td>
              <button class="btn btn-primary">Edit</button>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
    
@endsection