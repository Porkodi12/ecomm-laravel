<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
@extends('master')
@section("content")
<div class="custom-product">

<div class="col-sm-10">
<div class="trending-wrapper">
<h4>my orders</h4>
<!-- <a class="btn btn-success" href="ordernow">Order Now</a> -->
<div class="">
@foreach($orders as $item)
<div class="row searched-item cart-list-devider">
<div class="col-sm-3">
 	<a href="detail/{{$item->id}}" > 
		<img class="trending-image" src="{{$item->gallery}}">
		
	</a>
</div>
<div class="col-sm-3">
 	
		<div class="">
		<h2>{{$item->name}}</h2>
		<h5>{{$item->description}}</h5>
		</div>
	
</div>

</div>
@endforeach
</div>
	<!-- <a class="btn btn-success" href="ordernow">Order Now</a> -->
</div>
</div>

</html>
@endsection