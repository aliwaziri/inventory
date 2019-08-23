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
      <a class="navbar-brand" href="#">CUSTOMER</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('/')}}">Customer</a></li>
      <li><a href="{{ url('product')}}">Product</a></li>
      <li><a href="{{ url('purchase')}}">Purchase</a></li>
      <li><a href="{{ url('sales')}}">Sales</a></li>
    </ul>
  </div>
</nav>

<div class="container">


  <h2>Customer</h2>
  <form class="form-horizontal" method="post" action="{{ url('/insertcustomer')}}">
   <div class="form-group">
    {{csrf_field()}}


      <label class="control-label col-sm-2" for="cname">Customer Name:</label>
      <div class="col-sm-4">
        <input type=name class="form-control" id="cname" placeholder="Enter Name" name="cname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phonenumber">Phone Number:</label>
      <div class="col-sm-4">
        <input type="phonenumber" class="form-control" id="cphonenumber" placeholder="Enter phonenumber" name="cphonenumber">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
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
