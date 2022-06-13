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
  <h2>Kategori</h2>
  <p>Daftar kategori:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listdata as $li)
      <tr>
        <td>{{ $li -> name }}</td>
        <td>{{ $li -> description }}</td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>