<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
@extends('master')
@section("content")
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{URL('image/sec.jpg')}}"  class="d-block w-100" alt="..." style="height:50%;">
    </div>
    <div class="carousel-item">
      <img src="{{URL('image/th.jpg')}}"  class="d-block w-100" alt="..." style="height:50%;">
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<div class="trending-wrapper">
<h3>Trending Products</h3>

@foreach($products as $item)
<div class="trending-item">
 <a href="detail/{{$item['id']}}" > 
<img class="trending-image" src="{{$item['gallery']}}">
<!-- <img src="{{ $object->image_path }}" alt="Any alt text"/> -->
<div class="">
<h3>{{$item['name']}}</h3>
</div>
</a>
</div>
@endforeach
</div>
</div>
</div>
</html>
@endsection