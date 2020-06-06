@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

		<form action="/clubs/{{ $club->id }}/edit" method="POST" enctype="multipart/form-data">

            @method('PUT')

            @csrf

            <h2 class="title is-2">Update Club</h2>

            <div class="form-group">

                <label for="exampleFormControlInput1">Name</label>

                <input type="text" class="form-control" name = "name" value="{{ $club->name }}" id="exampleFormControlInput1" placeholder="Name">

            </div>

            @error('name')

                <p class="">{{ $errors->first('name') }}</p>

            @enderror


            <div class="form-group">

        
                <img src="{{ $club->image_url }}" alt="" srcset="">

            </div>

            <div class="form-group">
                
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            
        </form>

        </div>
    </div>
</div>
@endsection
