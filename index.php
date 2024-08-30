
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Orange Bus | Home</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<nav>
		<div class="container">
			<div class="nav-con">
				<div >
					<img src="logoo.png" width="80px" height="50px">
				</div>

				<ul id="main">
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.html">About us</a></li>
					<li><a href="cart.html">Cart</a></li>
					<li id="login"><a href="login.html">Login/Sign up</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="second-bar" id="second-bar">
		<div class="container">
			<form method="POST">
				<div class="flex">
					<div class="box">
						<p>Departure<span>*</span></p>
						<input type="date" name="Departure" class="input" required>
					</div>

					<div class="box">
						<p>Add Return<span>*</span></p>
						<input type="date" name="Return" class="input" required>
					</div>

					<div class="box">
						<p>Passengers<span>*</span></p>
						<select name="Passengers" class="input">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						</select>
					</div>

					<input type="submit" value="Find Tickets" name="Find Tickets" class="find">
				</div>
			</form>
		</div>
	</section>

	<section class="product">
		<div class="container">
			<h2>Best Options</h2>
		<?php
			$a = 0;
			//include("conn.php");
			$sql = "SELECT * FROM user";
			//$result = mysqli_query($conn, $sql);
			echo "<table >";
			//while ($row = mysqli_fetch_assoc($result)) {
				for ($i=0; $i < 17; $i++) { 
					// code...
					$a = $a + 1;

			//echo "<form method=get action=>";
				if ($a%2 == 1) {
					echo "<tr><td>";
				}else{
					echo "<td>";
				}
				//echo $a;
				
				/*
				foreach ($row as $key => $value) {
					echo $i%3;
					echo "$key"."--"."$value<br>";
					//echo $key."--".$value."<br>";
					
				}
				*/
				
					echo "<div class=pro-con><div class=pro1><img src=bus1.jpg width=300px height=180px><div class=detail><span>Date : 1 Sep 2024</span><br><span>Time: 00:00 - 07:00 am</span><br><span>By: Orange bus</span><br><span>Num: AW4526</span><br><button type=button  value=click me class=book-btn>Book now</button></div></div></div>";
					
				
				if ($i%2== 1) {
					echo "</td></tr>";
				}else{
					echo "</td>";
				}
			}
		?>

	</div>
	</section>

	<footer class="sec1">
		<div class="foot">
            <h1>GET IN TOUCH</h1>
            <address >
              <strong>SWK, Inc.</strong><br>
              Muang, Chiang rai,<br>
              57000, TH<br>
              <abbr title="Phone">P:</abbr> (+66) 000 000 0000
            </address>
        </div>

        <div class="copyright">
            <p>Copyright © MyCompany. All rights reserved.</p>
        </div>
	</footer>
</body>
</html>
