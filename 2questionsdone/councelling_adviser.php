<html>
	<head>
		<title>JOSAA Analysis</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>


<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">JOSAA DATA ANALYSIS</span>
								</a>

							<!-- Nav -->
								<!-- <nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav> -->

							<!-- Navigation Bar -->
							<nav >
								<!-- <a href="try.html"><img class="navimg" src="images/cropped.png" width=50% height=50%></a> -->
								<div style = "float:right" >
									<ul>
										<li class="item"><a href="councelling_adviser.php">Predictors</a></li>
										<li class="item"><a href="team.html">About Team</a></li>
									</ul>
								</div>
							</nav>

						</div>
					</header>

	<div class = "DIV1">
		<center>
		<h1> Counselling Advisor </h1>
		</center>
	</div>
	<div class = "DIV4">
		
		<div class = "DIV3">
			<form action="" method="post" class="form"> 
				<p class="rank"> Enter Rank <input type="number"  name="rank"> </p>
				
				<p class="rank"> Category  </p>
				<select class = "dropforcp" name="cat">
				<option value="">Select</option>
				<option value="Open">Open </option>
				<option value="OBC-NCL">OBC-NCL</option>
				<option value="EWS">EWS</option>
				<option value="SC">SC</option>
				<option value="ST">ST</option>
				<option value="PWD">PWD</option>
				</select>

				
				<input type="submit" value="Submit" class="gap">
				<input type="reset" value="Reset" class="gap">
			</form> 
			</div>
			<?php
				$servername = "localhost"; 
				$port_no = 3306; 
				$username = "anant";
				$password = "YES";
				$myDB= "dbase";
				try{
					$conn = new PDO("mysql:host=$servername;port=$port_no;dbname=$myDB", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
					if (  isset($_POST['rank']) && isset($_POST['cat'])) {
						$stmt = $conn->query("SELECT institute,program FROM rank_data natural join IIT natural join program where OR_<= {$_POST['rank']} and CR>= {$_POST['rank']} and seattype = \"{$_POST['cat']}\" GROUP BY institute,program ORDER BY CR ;");
						echo '<table border="1">',"\n";
						echo "<tr> <td> Institute </td> <td> Branch </td> </tr>"; 
						
						while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		
							echo "<tr>";
							echo "<td>";
							echo $row['institute'];
							echo "</td>";
							echo "<td>";
							echo $row['program'];
							echo "</td>";
						}
						

					
					}
				
					}
					
					catch(PDOException $e) {
						echo "Connection failed: " . $e->getMessage();
					}
			?>
		
	</div>
	
</body>

</html>

