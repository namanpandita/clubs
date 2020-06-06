@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Clubs</h1>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($clubs as $club)
                        <tr>
                            <th scope="row">
                                <a href="/clubs/{{ $club->id }}"> {{ $club->id }} </a> 
                                </th>
                            <td><a href="/clubs/{{ $club->id }}"> {{ $club->name }} </a> </td>
                            <td><img src="{{ $club->image_url }}" alt="{{ $club->name }}"></td>
                        </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $clubs->links() }}
        </div>
    </div>
</div>
@endsection
