<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ITIBlog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/homepage">All Posts <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <button type="button" class="btn btn-success"><a href="/addpage" style="color: white; text-decoration:none;">Add Post</a></button>
  </div>
</nav>

<table class="table table-dark">
  <tbody>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Desc</th>
      </tr>
       @foreach($users as $user)
      <tr>
        <td> {{$user["id"] }} </td>
        <td> {{$user["title"] }} </td>
        <td> {{$user["desc"] }} </td>
        <td> <a href="/viewpost/{{$user['id'] }}" class="btn btn-info">View</a> </td>
        <td> <a href="/updatepage/{{$user['id'] }}" class="btn btn-warning">Update</a> </td>
        <td> <a href="" class="btn btn-danger">Delete</a> </td>
      </tr>
      @endforeach 
  </tbody>
</table>
</body>
</html>
