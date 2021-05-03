<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
@extends('master')
@section("content")

<div class="container">

    <div class="row">
        
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['image']}}" alt="">
            <!-- <img class="detail-img" src="{{$product['image']}}" alt=""> -->
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a><br><br>
            <h5>Name : {{$product['name']}}</h5>
            <h5>price : {{$product['price']}}</h5>
            <h5>category : {{$product['category']}}</h5>
            <h5>description : {{$product['description']}}</h5>
            <br><br>
            <form action="/add_to_cart"enctype="multipart/form-data" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
            <button class="btn btn-success">Add to Cart</button>
            </form>
            <br><br>
            <!-- <button class="btn btn-primary">Buy Now</button> -->
        </div>
    </div>

</div>
</html>
@endsection