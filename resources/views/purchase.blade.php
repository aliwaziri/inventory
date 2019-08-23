<!DOCTYPE html>
<html>
<head>
    <title>Purchase</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PURCHASE</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/')}}">Customer</a></li>
      <li><a href="{{ url('product')}}">Product</a></li>
      <li class="active"><a href="{{ url('purchase')}}">Purchase</a></li>
      <li><a href="{{ url('sales')}}">Sales</a></li>
    </ul>
  </div>
</nav>

<div class="container">


  <h2>Purchase</h2>



  <form method="post" action="{{ url('/insertpurchase')}}"> 
   <div class="form-group">
    {{csrf_field()}}

    <div class="col-sm-4">
    <label for="pid">Product Name :</label>
    <select name="pid" id="pid" class="form-control">
    @foreach($producttable as $product)
        <option value="{{$product->pid}}">{{$product->pname}}</option>
    @endforeach
    </select>
    </div>
     
     
    <div class="form-group">
    <div class="col-sm-4">
    <label class="control-label col-sm-2" for="quantity">Quantity:</label>
   
        <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
      </div>
    </div>
    <div class="form-group">             
      <div class="col-sm-4">
      <button type="submit" class="btn btn-default">Submit</button>
       @if(session ('info'))
        <div class="alert alert-success">
       {{session('info')}}
       </div>
       @endif

      </div>
    </div>
  </form>
</div>

</body>
</html>
