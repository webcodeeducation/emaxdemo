<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>PHP Installer</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">
      <!-- Bootstrap core CSS -->
      <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
   </head>
   <body>
      <header>
         <!-- Fixed navbar -->
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Emax Computer Center</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav mr-auto">
				<?php
				/*while($row=mysqli_fetch_assoc($res)){
				?>
				 <li class="nav-item">
                     <a class="nav-link" href="?id=<?php echo $row['id']?>"><?php echo $row['page']?></a>
                  </li>
				<?php
				}*/
				?>
               </ul>
            </div>
         </nav>
      </header>
      <!-- Begin page content -->
      <main role="main" class="container">
         <?php
			echo '<h1 class="mt-5">Emax Computer Center</h1>';
			echo "<p>Welcome to computer center</p>";
		 ?>
      </main>
      <footer class="footer">
         <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
         </div>
      </footer>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
      <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
   </body>
</html>
