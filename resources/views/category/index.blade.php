  @extends('layout.conquer2')
  @section('content')
  <h2>Categories Table</h2>            
  <table class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->description}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->updated_at}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
