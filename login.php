<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<style type="text/css">
  .lgbtn{
   cursor: pointer;
   padding: 15px 32px;
   text-align: center;
 }
   span.psw{
    cursor: pointer;
    bottom: 8px;
    font-size: 14px;
    float: right;
    }

</style>
<body style="background: url(img/bodybg/bg11.jpg) no-repeat; background-size: cover;opacity: 0.9">
  <div class="container" style="width:400px; margin-top:100px; margin-bottom:150px">
  	<div class="card">
      <img src="img/dummy/sethsevanabg1.jpg" class="card-img-top">
  		<div class="card-body">
    <form class="form-group" action="functions.php" method="post">
      <label>Username :</label><br>
      <input type="text" name="username" class="form-control" placeholder="Username"><br>
      <label>Password :</label><br>
      <input type="password" name="password" class="form-control" placeholder="Password"><br>
      <div class="loginbtn">
      <button type="submit" name="login_submit" id="lgbtn" class="btn btn-success btn-lg" >Login</button>
    </div>

      <div class="forgetpsw">
        <span class="psw"><a href="#">Forget Password?</a></span>
    </form>
  





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>










