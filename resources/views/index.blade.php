<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>Comics</title>
</head>
<body>
  <div class="container">
    <div class="row">
      @foreach ($comics as $comic)
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$comic->cover}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <h5 class="card-title">{{$comic->author->name}} {{$comic->author->lastname}}</h5>
              <p class="card-text">{{$comic->text}}</p>
              <a href="#" class="btn btn-primary">Show more</a>
            </div>
          </div>
        </div>

      @endforeach
    </div>
  </div>

</body>
</html>
