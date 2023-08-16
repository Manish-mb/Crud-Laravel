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
      <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mt-3 p-4">
       <form method="post"  action="/crud/store" >
      @csrf
        <h2>User From</h2>
    <div class="form-group ">
      <label >Firstname:</label>
      <input type="text" class="form-control" name="firstname" value="{{old('firstname')}}">
      @if($errors->has('firstname'))
      <span class="text-danger">{{ $errors->first('firstname')}}</span>
        @endif
    </div>
    <div class="form-group ">
      <label >Lastname:</label>
      <input type="text" class="form-control" name="lastname" value="{{old('lastname')}}">
      @if($errors->has('lasstname'))
      <span class="text-danger">{{ $errors->first('lasstname')}}</span>
        @endif
    </div>
    <button type="submit" class="btn btn-dark mt-3">Submit</button>
  </form>
  </div>
  </div>
  </div>
</div>
</body>
</html>