  @extends('layout.conquer2')
  @section('content')
    <form method="POST" action="{{route('buyer.store')}}">
      @csrf
      <h2>Create Buyer</h2>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea class="form-control" id="address" name="address" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  
@endsection
