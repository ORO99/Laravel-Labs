
@extends('layout');
@section('content')
<table class="table table-success">
  <tbody>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Desc</th>
      </tr>
       @foreach($posts as $post)
      <tr>
        <td> {{$post["id"] }} </td>
        <td> {{$post["title"] }} </td>
        <td> {{$post["desc"] }} </td>
        <td> <a href="{{ route('viewpost', $post['id']) }}" class="btn btn-info">View</a> </td>
        <td> <a href="{{ route('updatepage', $post['id']) }}" class="btn btn-secondary">Update</a> </td>
        <td> <a href="{{ route('delete', $post['id']) }}" class="btn btn-danger">Delete</a> </td>
      </tr>
      @endforeach 
  </tbody>
</table>
{{$posts->links()}}
@endsection