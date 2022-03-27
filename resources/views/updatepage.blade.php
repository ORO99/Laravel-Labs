@extends('layout');
@section('content');
  <div class="container py-5">
    @include('errors')
    <form action="{{ route('edit', $post['id']) }}" method="post">
      @csrf
      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color:palegreen; font-size:20px">ID</label>
            <input name="id" value={{$post["id"]}} type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color:palegreen; font-size:20px">Title</label>
            <input name="title" value={{$post["title"]}} type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color:palegreen; font-size:20px">Description</label>
            <textarea name="desc"  id="" cols="30" rows="5" class="form-control">{{$post["desc"]}}</textarea>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
    </div>
@endsection