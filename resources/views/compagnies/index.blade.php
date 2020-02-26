@extends('layouts.app')
   
@section('content')
    <h1>compagnies </h1>
    @if (count($compagnies) >=1 )
        @foreach ($compagnies as $compagnie)
            <div class="card">
                <div class="card-body">
                   <h1>{{$compagnie->arline_name}} </h1>
                </div>
            </div>

            </div>
        @endforeach
    @else
        <p>no flights </p>
    @endif  --}}
 @endsection 