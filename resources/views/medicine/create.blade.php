  @extends('layout.conquer2')
  @section('content')
  <form action="{{route('buyer.store')}}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-body">
      <h2>Create Medicine</h2>
      <div class="form-group">
        <label for="name">Generic Name :</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="form">Form :</label>
        <input type="text" class="form-control" id="form" name="form">
      </div>
      <div class="form-group">
        <label for="formula">Restriction Formula :</label>
        <input type="text" class="form-control" id="formula" name="formula">
      </div>
      <div class="form-group">
        <label for="price">Price :</label>
        <input type="number" class="form-control" id="price" name="price">
      </div>
      <div class="form-group">
        <label for="description">Description :</label>
        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Category 
        </label>
        <div class="col-md-4">
          <select class="form-control" name="category">
            <option value="">Select...</option>
          </select>
        </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                </div>
            </div>
        </div>
</form>
  
@endsection
