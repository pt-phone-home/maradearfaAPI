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
          <h1 class="">Welcome</h1>
          <p class="fs-5">Welcome to this repository of Irish Clichés and phrases. The content for this repository has been transfered by hand from 'Mar a Déará'. We have created this repository so that the wonderful work contained in that publication is avaialble online, in a searchable format. Our home page presents a random phrase from the collection, every time the page is refreshed.</p>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-12 col-md-2">
          <h1>Left side</h1>
          </div>
          <div class="col-12 col-md-8">
              @foreach ($phrases as $phrase)

              <div class="card p-4 m-2">
                  <p>{{$phrase->english}}</p>
                  <hr>
                  <p>{{$phrase->irish}}</p>
              </div>
              @endforeach
          </div>
          <div class="col-12 col-md-2 ">
            <h1>Right Side</h1>
          </div>
          
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>