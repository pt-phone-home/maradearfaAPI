<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Irish Clichés and Phrases</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-dark">
    <div class="container">
        @include('components.navbar')
    </div>
        <div class="container">
          <h1 class="text-white">Hello</h1>
           <div class="row">
             <div class="col-12 col-md-2 ">
              <h1 class="text-white">Left side</h1>
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
                <h1 class="text-white">Right Side</h1>
              </div>
              
           </div>
        </div>

    <script src="/js/app.js"></script>
</body>
</html>