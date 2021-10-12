@extends('layouts.master')

@section('content')
  @foreach ($fiveRandomPhrases as $phrase )  
   <div class="d-flex">
      <div class="">
        <p class="h3"> <span class="text-grey">English:</span>  {{ucfirst($phrase->english)}}</p>
      </div>
      <div class="">
        <p class="h3">{{ucfirst($phrase->irish)}}</p>
      </div>
    </div>
  @endforeach
@endsection