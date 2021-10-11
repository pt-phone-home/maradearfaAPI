<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Irish Clichés and Phrases</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="">
    <div class="container">
        @include('components.navbar')
    </div>
    <div class="container">
      <div class="row">
        <div class="col-8 offset-2">
          <h1 class="">Irish Clichés and Phrases Repository</h1>
          <p class="fs-5">Welcome to this repository of Irish Clichés and phrases. The content for this repository has been transfered by hand from 'Mar a Déará'. We have created this repository so that the wonderful work contained in that publication is avaialble online, in a searchable format. Our home page presents a random phrase from the collection, every time the page is refreshed.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Phrase count: {{$phraseCount}}</p>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark">
      <div class="container">
        <div class="row py-4">
          <div class="col-12 col-md-2"></div>
          <div class="col-12 col-md-4">
            <div class="input-group mb-2 mb-md-0">
              <input type="search" class="form-control rounded" placeholder="Search by English word" aria-label="Search"
              aria-describedby="search-addon" />
              <button type="button" class="btn btn-outline-light">search</button>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="input-group">
              <input type="search" class="form-control rounded" placeholder="Search by Irish word" aria-label="Search"
              aria-describedby="search-addon" />
              <button type="button" class="btn btn-outline-light">search</button>
            </div>
          </div>
          <div class="col-12 col-md-2"></div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row mt-4">
          <div class="col-12 col-md-2">
          <h3>Selection of phrases (English)</h3>
          <p>Click on the link to see Irish Version</p>
          <div class="card px-4 py-2">
            @foreach ($twentyRandomPhrasesInEnglish as $englishPhrase)
              <p>{{$englishPhrase}}</p>
            @endforeach
          </div>
          </div>
          <div class="col-12 col-md-8">
            @foreach ($fiveRandomPhrases as $phrase )  
              <div class="card p-4 m-2">
                <p class="fs-lg">{{$phrase->english}}</p>
                <hr>
                <p>{{$phrase->irish}}</p>
              </div>
              @endforeach
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