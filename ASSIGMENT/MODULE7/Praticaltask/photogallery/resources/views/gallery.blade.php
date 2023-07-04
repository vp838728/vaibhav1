@extends('layout.main')
@section('mainsection')
</br>

@foreach($data as $d)
<div class="card-container">
  <div class="card">
    <img src="{{url('website/upload/'.$d->file)}}" width="200px" height="120px" alt="Denim Jeans">
    <h1>{{$d->name;}}</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans..</p>
    <p><button>Add to Cart</button></p>
  </div>
</div>
@endforeach
@endsection