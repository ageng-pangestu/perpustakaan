<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>

    <body class="bg-dark">
            <h1 class="h1 text-white text-center">ADMIN PERPUSTAKAAN</h1>
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card o-hidden border-0 shadow-lg my-2">
          <div class="card-body p-2">

         <div class="p-5">
               <div class="text-center">
                   
               </div>
                <form method="post" action="cek_login.php">
            <div class="form-group mb-3">
            <label>Username</label>
            <input type="text" name="user" class="form-control">
        
            </div>
            <div class="form-group mb-3">
            <label>Password</label>
            <input type="password" name="pass" class="form-control">
            </div>
                <button type="submit"  class="btn btn-secondary" name="submit">Log in</button>                
           </form>

          </div>
            </div>
          </div>
      </div>
    </div>
    
    </body>
</html>

