<!DOCTYPE html>
<html>
<head>
    <title>Inventory</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PRODUCT</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/')}}">Customer</a></li>
      <li class="active"><a href="{{ url('product')}}">Product</a></li>
      <li><a href="{{ url('purchase')}}">Purchase</a></li>
      <li><a href="{{ url('sales')}}">Sales</a></li>
    </ul>
    </ul>
  </div>
</nav>

<div class="container">


  <h2>Product</h2>
  <form class="form-horizontal" method="post" action="{{ url('/insertproduct')}}">
   <div class="form-group">
   	{{csrf_field()}}
      <label class="control-label col-sm-2" for="name">Product Name:</label>
      <div class="col-sm-4">
        <input type=name class="form-control" id="pname" placeholder="Enter Name" name="pname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cost">Cost:</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" id="cost" placeholder="Enter Cost" name="cost">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="quantity">Quantity:</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default">Submit</button>

        @if(session('info'))
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
