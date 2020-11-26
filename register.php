<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body>
<div class="container">
<h3>Sign up</h3>
	<form method="post" action="signup.php">

		Enter your login: <input type="text" name="login" required=""><br>

		Enter your password:  <input type="password" name="password" required=""><br>

		<input type="submit" value="Submit" name="submit" class="btn">
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
	</form>
</div>
 </body>

</html>