@extends('layout');
@section('content')
  @include('errors');
  <div class="container py-3">
    <form action="{{ route('storepost') }}" method="post">
      @csrf
      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color:palegreen; font-size:20px">Id</label>
            <input name="id" type="text" class="form-control" value="{{ old('id') }}" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color:palegreen; font-size:20px">Title</label>
            <input name="title" type="text" class="form-control" value="{{ old('title') }}" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color:palegreen; font-size:20px">Description</label>
            <textarea name="desc" id="" cols="30" rows="5" class="form-control">{{ old('desc') }}</textarea>
          </div>  
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
          <div class="mt-3">
            <x-button type="primary" href="/homepage">Back</x-button>
          </div>
        </div>
      </div>
@endsection