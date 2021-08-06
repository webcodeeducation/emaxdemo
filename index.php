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
	   <style>
	footer {
    background-color: rgba(44, 62, 80, 1.0);

    width: 100%;
    bottom: 0;
    font-weight: lighter;
    color: white;
}
.footerHeader{
    width:100%;
    padding:1em;
    background-color:rgba(52, 73, 94,1.0);
    text-align:center;
    color:white;
}
footer h3{
    font-weight:lighter;
}
footer ul{
    padding-left:5px;
    list-style:none;
}
footer p{
    text-align : justify;
    font-size : 12px;
}
footer iframe {
    width:100%;
    position:relative;
    height:170px;
}
.sm{
    list-style:none;
    overflow:auto;
}
.sm li {
    display: inline;
    padding:5px;
    float:left;
} 
.sm li a img {
    width:32px;
}	   
	  </style>
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
      <footer>
    <div class="footerHeader" ></div>
    <div class="container">
		<div class="col-md-4" >
		    <h3>About us</h3>
		    <p>
		        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		    </p>
		</div>
		
		<div class="col-md-4">
		    <h3>Our Location </h3>
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d433868.0837064906!2d35.66744174160663!3d31.836036762053016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5fb85d7981af%3A0x631c30c0f8dc65e8!2sAmman!5e0!3m2!1sen!2sjo!4v1499168051085" sytle="" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-4" >
		    <h3>Contact Us</h3>
		    <ul>
		        <li>Phone : 123 - 456 - 789</li>
		        <li>E-mail : info@comapyn.com</li>
		        <li>Fax : 123 - 456 - 789</li>
		    </ul>
		    <p>
		        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
		    </p>
		    <ul class="sm">
		        <li><a href="#" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
		        <li><a href="#" ><img src="https://lh3.googleusercontent.com/00APBMVQh3yraN704gKCeM63KzeQ-zHUi5wK6E9TjRQ26McyqYBt-zy__4i8GXDAfeys=w300" class="img-responsive" ></a></li>
		        <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive"  ></a></li>
		    </ul>
		</div>
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
