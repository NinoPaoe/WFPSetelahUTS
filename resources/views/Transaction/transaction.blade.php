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
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="mediumBody">
                <div>
                    <div id="msg"></div>
                </div>
            </div>
        </div>
    </div>
</div>            
  <table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Pembeli</th>
        <th>Kasir</th>
        <th>Tanggal Transaction</th>
        <th>Action </th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
    <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->buyer->name }}</td>
        <td>{{ $d->user->name }}</td>
        <td>{{ $d->created_at }}</td>
        <td><a class="btn btn-default" data-toggle="modal" id="mediumButton" data-target="#mediumModal" onclick="getDetailData({{$d->id}});">Lihat Rincian Pembelian</a></td>
    </tr>
    @endforeach
</table>
<script>
  function getDetailData(id) {
    $.ajax({
        type:'GET',
        url:'{{route("transaction.showAjax")}}',
        data:'_token= <?php echo csrf_token() ?> &id='+id,
        success:function(data) {
            $("#msg").html(data.msg);
        }
    });
}
</script>
</div>

</body>
</html>
