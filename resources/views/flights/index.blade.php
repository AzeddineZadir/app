@extends('layouts.app')
   
@section('content')
    <h1>flighgts</h1>
    @if (count($flights) > 1)
        @foreach ($flights as $flight)
            <div class="card">
                <div class="card-body">
                   <h1> <a href="/flights/{{$flight->id}}">{{$flight->name}} </a></h1>
                </div>
            </div>

            </div>
        @endforeach
    @else
        <p>no flights </p>
    @endif
 @endsection 