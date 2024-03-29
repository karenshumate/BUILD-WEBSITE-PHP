
<html>
<head>
	<title><?php echo"Personal Media Library"; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="/">Personal Media Library</a></h1>

			<ul class="nav">
                <li class="books"><a href="#">Books</a></li>
                <li class="movies"><a href="#">Movies</a></li>
                <li class="music"><a href="#">Music</a></li>
                <li class="suggest"><a href="#">Suggest</a></li>
            </ul>

		</div>

	</div>

	<div id="content">
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
					<li>
            <a href="#">
              <img src="img/media/forest_gump.jpg" alt="Forrest Gump">
              <p>View Details</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/media/princess_bride.jpg" alt="The Princess Bride">
              <p>View Details</p>
            </a></li>
          <li>
            <a href="#">
              <img src="img/media/elvis_presley.jpg" alt="Elvis Forever">
              <p>View Details</p>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="img/media/garth_brooks.jpg" alt="No Fences">
              <p>View Details</p>
            </a>
          </li>								
				</ul>

			</div>

		</div>

	</div>

	<div class="footer">

		<div class="wrapper">

			<ul>		
				<li><a href="http://twitter.com/treehouse">Twitter</a></li>
				<li><a href="https://www.facebook.com/TeamTreehouse">Facebook</a></li>
			</ul>

			<p>&copy;<?php echo date('Y");n?> Personal Media Library</p>

		</div>
	
	</div>

</body>
</html>