<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Medicine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Daftar Obat</h2>
  <p>Berikut adalah daftar obat:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama Obat</th>
        <th>Formula</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>{{ $message -> generic_name }}</td>
        <td>{{ $message -> form }}</td>
        <td>{{ $message -> price }}</td>
      </tr>
        
    </tbody>
  </table>
</div>

</body>
</html>