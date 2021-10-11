@extends('layouts.master')

@section('content')
    @foreach ($locatedPhrases as $phrase )  
        <div class="card p-4 m-2">
        <p class="fs-lg">{{$phrase->english}}</p>
        <hr>
        <p>{{$phrase->irish}}</p>
        </div>
    @endforeach
@endsection