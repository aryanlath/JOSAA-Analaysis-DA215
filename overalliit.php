<html>
	<head>
		<title>JOSAA Analysis</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
		<link rel="stylesheet" href="assets/css/q1_1.css" />
		<link rel="stylesheet" href="assets/css/proj.css" />
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

					<div class="question" style = "text-align: center">
							<h1> Overall Distribution of Students in IIT's </h1>
				    </div>
				
				<div class = "chartcont" style="padding-left:23%" >

					<?php

					$host = 'localhost';
					$username = 'devanshu';
					$password = 'passwords';
					$dbname = 'mydb';
					$conn = new mysqli($host, $username, $password, $dbname);

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT SUM(M.total)/2 as total, SUM(M.supernumerary)/2 as extra, I.institute as city FROM seat_matrix M, iit I WHERE I.I_code = M.i_code GROUP BY city";
					$result = $conn->query($sql);

					$conn->close();

					$cities = array();
					$seats = array();

					if ($result->num_rows > 0) {

						while($row = $result->fetch_assoc()) {

							array_push( $seats , (int)($row['total'] + $row['extra']/2) );
							array_push( $cities , $row['city'] );

						}

					} else {
						echo "0 results";
					}



					$cities = json_encode($cities);
					$seats = json_encode($seats);

					?>
					<div style="margin: 0 auto"> 
					<canvas class="charts"  id="myChart"> </canvas>
					<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
					<script src="scripts.js"></script>
					<script>

						// import Chart from 'chart.js';
						// import ChartDataLabels from 'chartjs-plugin-datalabels';
						// import { schemeCategory10 } from 'chartjs-plugin-colorschemes';

						const ctx = document.getElementById('myChart');

						var cities = <?php echo $cities ?>;
						var seats = <?php echo $seats ?>;

						new Chart(ctx, {
							type: 'pie',
							data: {
								labels: cities,
								datasets: [{
									label: '',
									data: seats,
									// backgroundColor: [
									// 'rgb(255, 99, 132)',
									// 'rgb(54, 162, 235)',
									// 'rgb(255, 205, 86)'
									// ],
									hoverOffset: 4
								}]
							},
							options: {
								// plugins: {
								//     colorschemes: {
								//         scheme: schemeCategory10
								//     }
								// }
								maintainAspectRatio: false,
								scales: {
								y: {
									beginAtZero: true
								}
								}
							}
						});

					</script>

					</div>
				</div>
				</div>
				

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="assets/js/drop.js"></script>
	
</body>

</html>



<!-- SELECT institute,CR,Year_ FROM fri.orcr_18_22_neutral_abb_cleaned__1_ WHERE abb = \"{$_POST['Branch']}\" and seat_type = 'OPEN' ORDER by institute,Year_"; -->

<!-- SELECT institute,min(OR_),Year_ FROM fri.orcr_18_22_neutral_abb_cleaned__1_ group by institute,Year_"; -->
