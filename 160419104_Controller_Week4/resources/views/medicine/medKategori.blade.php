<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Medicine</h2>    
    <div class="row">
    @foreach($listdata as $li)
    <div class="col-10 col-lg-4">
        <img src="{{ asset ('img/med/' .$li -> image)}}" width="250px" height="250px">
        <div>
            <h5>{{ $li -> generic_name }}</h5>
            <p>{{ $li -> form }}</p>
            <p>{{ $li -> price }}</p>
        </div>
    </div>
    </div>
    @endforeach
</div>
</body>
</html>
