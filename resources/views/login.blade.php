
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">

   <p>Please enter your email and password</p>
   </div>
    <form id="Login" method="post" action="{{ URL::to('loginstore') }}">
    	{{csrf_field()}}

        <div class="form-group">


            <input type="email" class="form-control" name="email" placeholder="Email Address">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="password" placeholder="Password">

        </div>
        <div class="forgot">
 
</div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
<p class="botto-text"> Designed by Pious Mitra</p>
</div></div></div>


</body>
</html>