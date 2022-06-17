@extends('layout.frontend')
@section('content')
            @foreach($medicine as $m)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>{{$m->generic_name}}</h4>
                        <p>{{Str::limit(strtolower($m->description),50)}}</p>
                        <p><strong>Price: </strong>Rp. {{$m->price}}</p>
                        <p class="btn-holder"><a href="{{url('add-to-cart/'.$m->id)}}" 
                            class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
@endsection