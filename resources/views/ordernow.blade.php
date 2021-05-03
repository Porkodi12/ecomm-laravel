<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
@extends('master')
@section("content")
<br>
<div class="custom-product">
<div class="col-sm-10">
	<table class="table table-striped">
  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount</td>
      <td>$ {{$total}}</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tax</td>
      <td>$ 0</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery</td>
      <td>$ 10</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Total Amount</td>
      <td>$ {{$total+10}}</td>
      
    </tr>
  </tbody>
</table>

<form action="/orderplace" method="POST">
	@csrf
  <div class="form-group row">
    <div class="col-sm-10">
      <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
    </div>
  </div>
  
  <br>
  <fieldset class="form-group">
    <div class="row">
      <label class="col-form-label col-sm-2 pt-0">Payment Method</label><br>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment_method"  value="onp" checked>
          <span class="form-check-label" >
            Online Payment
          </span>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment_method" value="emi">
          <span class="form-check-label">
            EMI Payment
          </span>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment_method" value="cod" >
          <span class="form-check-label">
           COD
          </span>
        </div>
      </div>
    </div>
  </fieldset>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Order Now</button>
    </div>
  </div>
</form>

</div>
</div>

</html>
@endsection