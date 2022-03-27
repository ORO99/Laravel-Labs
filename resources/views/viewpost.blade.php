@extends('layout');
@section('content')
<div class="card" style="width: 18rem; background-color:goldenrod; margin-right:auto; margin-left:auto">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body text-light">
    <h5 class="card-title">{{$post["title"] }}</h5>
    <p class="card-text">{{$post["desc"] }}</p>
    <p class="btn btn-primary">{{$post["id"] }}</p>
  </div>
</div>
@endsection