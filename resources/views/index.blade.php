@extends('layouts.master')

@section('content')
  @foreach ($fiveRandomPhrases as $phrase )  
    <div class="card p-4 m-2">
      <p class="h3"> <span class="text-grey">English:</span>  {{$phrase->english}}</p>
      <hr>
      <p class="h3">{{$phrase->irish}}</p>
    </div>
  @endforeach
@endsection