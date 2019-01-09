<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      body{
        background-image: url(bg1.jpg);
        background-size: cover;
        font-family: verdana;
        margin-left: 40%;
        margin-top: 16%;
        background-color: grey;
      }

.container{
  background-color:grey;
  width: 45%;
  height: 25%;
  border: 5% solid grey;
  
}
.container input[type="submit"]{
  border: none;
  outline: none;
  background: black;
  color: white;
  width: 83%;
  
  margin-left: 8%;
  cursor: pointer;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
}
.container input[type="submit"]:hover{
  opacity: 0.8;
}
.container input[type="text"]{
  border-top: none;
  border-left: none;
  border-right: none;
  margin-left: 15%;
  width:70%;
  transition-duration: 0.8s;
}
.container input[type="text"]{
  outline-color: red;
}
.container input[type="password"]{
  border-top: none;
  border-left: none;
  border-right: none;
  margin-left: 15%;
  width:70%;
}
.name{
  outline: none;
}

    </style>
  </head>
  <body>
    <div class="container">


    <h2><center>Login</center></h2>
    <form class="" action="login.php" method="post">
      <p>

<input type="text" name="username" class="name" placeholder="Username">
      </p>
      <p>

<input type="password" name="password" id="password" placeholder="Password">
      </p>
      <p>
<input type="checkbox" onclick="myFunction()" style="margin-left:15%">Show Password
      </p>
      <p>
<input type="submit" name="" value="Login" >
      </p>
    </div>
    </form>
  </body>
</html>
<script type="text/javascript">
function myFunction()
{
  var x = document.getElementById("password");
  if (x.type === "password")
  {
      x.type = "text";
  }
  else
  {
      x.type = "password";
  }
}
</script>
