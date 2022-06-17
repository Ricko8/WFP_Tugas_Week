<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Medicines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Medicines Table</h2>
  @if($message)            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Obat</th>
        <th>Bentuk</th>
        <th>Formula</th>
        <th>Harga</th>
        <th>Kategori</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->generic_name}}</td>
            <td>{{$message->form}}</td>
            <td>{{$message->restriction_formula}}</td>
            <td>{{$message->price}}</td>
            <td>{{$message->category->name}}</td>
          </tr>
    </tbody>
  </table>
  @else
  <h1>TIDAK ADA DATA</h1>
  @endif
</div>

</body>
</html>
