<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARA CRUD OPRATION</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  .container{
    border-radius: 10px;
  }
</style>
</head>
<body>
<ul class="nav bg-dark p-2">
    <li class="nav-item">
      <a class="nav-link text-light" href="/">Home</a>
    </li>
 </ul>
       @if($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
      </div>
      @endif
    <div class="container">
       <h1 class="text-center mt-5">Laravel Crud </h1>
    <div class="text-right">
        <a href="crud/insertuser" class="btn btn-dark mt-2 ">Add User</a>
    </div>
       <table class="table table-dark mt-2">
    <thead class="text-center">
      <tr>
        <th>Sr. No.</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="text-center">
      @foreach($crud as $crud)
      <tr>
        <th>{{ $loop->index+1 }}</th>
        <td>{{ $crud->firstname }}</td>
        <td>{{ $crud->lastname }}</td>
        <td>
          <a href="/crud/edit/{{ $crud->id }}" class="btn btn-primary  text-light">Edit</a>
          <form action="/crud/delete/{{ $crud->id }}" method="POST" class="d-inline">
            @csrf
            @method('Delete')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

    </div>
</body>
</html>