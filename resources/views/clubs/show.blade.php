@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card" style="width: 18rem;">
          <img src="{{ $club->image_url }}" class="card-img-top" alt="{{ $club->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $club->name }}</h5>

              <a href="/clubs/{{$club->id }}/edit" class="btn btn-primary">Edit</a>

              <a href="" class="btn btn-danger">Delete</a>
              
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
