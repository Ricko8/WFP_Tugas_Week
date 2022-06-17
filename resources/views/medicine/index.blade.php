  @extends('layout.conquer2')
  @section('content')
  
  <h2>Medicines Table</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Obat</th>
        <th>Bentuk</th>
        <th>Formula</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>ID Kategori</th>
        <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->generic_name}}</td>
            <td>{{$d->form}}</td>
            <td>{{$d->restriction_formula}}</td>
            <td>{{$d->price}}</td>
            <td>{{$d->description}}</td>
            <td>{{$d->category_id}}</td>
            <td>{{$d->faskes1}}</td>
            <td>{{$d->faskes2}}</td>
            <td>{{$d->faskes3}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
  @endsection
  {{-- @section('javascript')

  <script>
     function showInfo(){
       $.ajax({
         type: 'POST',
         url:"{{route("showInfo")}}",
         data:'_token-<?php echo csrf_token()?>',
         success:function(data){
           $('#showinfo').html(data.msg)
         }
       });
     }
  </script>

  @endsection --}}
