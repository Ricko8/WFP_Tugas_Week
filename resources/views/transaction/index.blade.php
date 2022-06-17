  @extends('layout.conquer2')
  @section('content')

  <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="showModal">
        <div class="modal-header">
          <h4 class="modal-title">Detail Transaction</h4>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

  </div>
  <h2>Daftar Transaksi</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pembeli</th>
        <th>Kasir</th>
        <th>Tanggal Transaction</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->buyer->name}}</td>
            <td>{{$d->user->name}}</td>
            <td>{{$d->transaction_date}}</td>
            <td><a class="btn btn-default" data-toggle="modal" href="{{route("transaction.showAjax")}}"
              >Lihat Rincian Pembelian</a></td>
              {{-- onclick="getDetailData({{$d->id}});" --}}
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
<script>
function getDetailData(id){
  $.ajax({
  type:'POST',
  url:'{{route("transaction.showAjax")}}',
  data:'_token= <?php echo csrf_token() ?> &id='+id,
  success:function(data) {
  $("#msg").html(data.msg);
  console.log("object");
    }
  });
}
</script>

