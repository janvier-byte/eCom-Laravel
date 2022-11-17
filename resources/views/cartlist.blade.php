@extends('Master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
      <a href="#">Filter</a>    
</div>
<div class="col-sm-4">
<div class="trending-wrapper">
        <h4>Result for Products</h4>
        @foreach($products as $item)
        <div class="row searched-item cart-list-style">
            <div class="col-sm-3">
              <a href="detail/{{$item->id}}">
                <img class="tranding-image" src="{{$item->gallery}}">
             </a>
            </div>
            <div class="col-sm-6">
              <a href="detail/{{$item->id}}">
                <div class="">
                    <h2>{{$item->name}}</h2>
                    <h5>{{$item->description}}</h5>
                </div>
            </div>
            <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}"class="btn btn-warning">Move to Cart</a>
            
            </div>
    </div>
    @endforeach
</div>
</div>
</div>
@endsection