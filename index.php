<?php
   ob_start();
   session_start();
?>
<html lang = "en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="loginstyle.css">
   <title>Login</title>
</head>
<body>
   <h2 style="margin-left:10rem; margin-top:5rem;">Enter Username and Password</h2> 
   <?php
      $msg = '';
      
   ?>

   <h4 style="margin-left:10rem; color:red;"><?php echo $msg; ?></h4>
   <br/><br/>
   <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <div>
         <label for="username">Username:</label>
         <input type="text" name="username" id="name">
      </div>
      <div>
         <label for="password">Password:</label>
         <input type="password" name="password" id="password">
      </div>
      <section style="margin-left:2rem;">
         <button type="submit" name="login">Login</button>
      </section>
   </form>

   <p style="margin-left: 2rem;"> 
      <a href = "logout.php" tite = "Logout">Click here to clean Session.</a>
   </p>
   </div> 
</body>
</html>