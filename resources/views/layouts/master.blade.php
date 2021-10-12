<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Irish Clichés and Phrases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"> --}}
    </head>
<body class="">
    <div class="container">
        @include('components.navbar')
    </div>
    {{-- <div class="container">
      <div class="row">
        <div class="col-8 offset-2">
          <h1 class="">Irish Clichés and Phrases Repository</h1>
          <p class="fs-5">Welcome to this repository of Irish Clichés and phrases. The content for this repository has been transfered by hand from 'Mar a Déará'. We have created this repository so that the wonderful work contained in that publication is avaialble online, in a searchable format. Our home page presents a random phrase from the collection, every time the page is refreshed.</p>
        </div>
      </div>
    </div> --}}
    <div class="container">
      <div class="row">
        <div class="col">
          {{-- <p>Phrase count: {{$phraseCount}}</p> --}}
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark">
      <div class="container">
        <div class="row py-4">
          <div class="col-12 col-md-2"></div>
          <div class="col-12 col-md-4">
            <form method="POST" action="{{route('english_search')}}">
              @csrf
              <div class="form-row align-items-start">
                <div class="col-auto">
                  <label class="sr-only" for="inlineFormInput">Search</label>
                  <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Search by English word" name="englishSearch">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-dark mb-2">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-12 col-md-4">
            <div class="input-group">
              <input type="search" class="form-control rounded" placeholder="Search by Irish word" aria-label="Search"
              aria-describedby="search-addon" />
              <button type="submit" class="btn btn-outline-light">search</button>
            </div>
          </div>
          <div class="col-12 col-md-2"></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-4">
        <div class="col-12 col-md-2">
          <div class="card px-4 py-2">
            <h6>Selection of phrases (English)</h6>
            <p style="font-size: 12px">Click on the link to see Irish Version</p>
              @foreach ($twentyRandomPhrasesInEnglish as $englishPhrase)
                <a class="link-secondary" style="font-size:13px" href="{{route('show', ['id' => $englishPhrase->id])}}">{{$englishPhrase->english}}</a>
              @endforeach
          </div>
        </div>
        <div class="col-12 col-md-8">
          @yield('content')
          
        </div>
        <div class="col-12 col-md-2 ">
          <h3>Selection of phrases (Irish)</h3>
          <p>Click on the link to see English Version</p>
        </div>
        
      </div>
    </div>
   
    

    <script src="/js/app.js"></script>
</body>
</html>