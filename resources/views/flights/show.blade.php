@extends('layouts.app')
   
@section('content')
<a href="/flights" >go back </a>
    <h1>{{$flight->id}}</h1>
    <h1>{{$flight->name}}</h1>
    <h1>{{$flight->destination}}</h1>
    <h1>{{$flight->delayed}}</h1>
    <h1>{{$flight->active}}</h1>
    <h1>{{$flight->price}}</h1>
    <h1>{{$flight->arrival_t}}</h1>
    <h1>{{$flight->departure_t}}</h1>
    <h1>{{$flight->airline_id}}</h1>

 @endsection 