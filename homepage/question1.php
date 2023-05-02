<!DOCTYPE HTML>
<html>
	<head>
		<title>Question1</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/q1_1.css" />
		<link rel="stylesheet" href="assets/css/proj.css" />
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="assets/js/drop.js"></script>
		
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<nav >
					<a href="index.html"><img class="navimg" src="images/cropped.png" width=50% height=50%></a>
					<div style = "float:right" >
						<ul>
							<li class="item"><a href="predict.php">Predictors</a></li>
							<li class="item"><a href="team.html">About Team</a></li>
						</ul>
					</div>
				</nav>

				<!-- Menu -->
				<div class="question">
							<h1>Which Branch is getting more popular? </h1>
				</div>
				
						
					

					<div class="dropdowns">
						<form method="post">
							<label for="college">Select College:</label>
							<select name="college">
								<option value="">Select</option>
								<option value="Bom">IIT Bombay </option>
								<option value="Del">IIT Delhi</option>
								<option value="Mad">IIT Madras</option>
								<option value="Bhi">IIT Bhilai</option>
								<option value="Bhu">IIT Bhubaneswar</option>
								<option value="Gan">IIT Gandhinagar</option>
								<option value="Goa">IIT Goa</option>
								<option value="Guw">IIT Guwahati</option>
								<option value="Hyd">IIT Hydrabad</option>
								<option value="Ind">IIT Indore</option>
								<option value="Jam">IIT Mandi</option>
								<option value="Jod">IIT Jodhpur</option>
								<option value="Kan">IIT Kanpur</option>
								<option value="Kha">IIT Kharagpur</option>
								<option value="Man">IIT Mandi</option>
								<option value="Pal">IIT Palakkad</option>
								<option value="Pat">IIT Patna</option>
								<option value="Roo">IIT Roorkee</option>
								<option value="Rop">IIT Ropar</option>
								<option value="Tir">IIT Tirupati</option>
								<option value="Var">IIT Varanasi</option>
							   
							</select>
						  <br>
						  
						  <label for="branch[]">Select Branch:</label>  
							<select id="branchdrop" name="branch[]" multiple>
							<option value="Aerospace Engineering (5 Years, Bachelor and Masters of Technology)5">Aerospace Engineering (5 Years, Bachelor and Masters of Technology)</option>
							<option value="Agricultural and Food Engineering (4 Years,Bachelor of Technology)">Agricultural and Food Engineering (4 Years,Bachelor of Technology)</option>
							<option value="Agricultural and Food Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Agricultural and Food Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Applied Geology (4 Years, Bachelor of Science)">Applied Geology (4 Years, Bachelor of Science)</option>
							<option value="Applied Geology (5 Years, Integrated Master of Science)">Applied Geology (5 Years, Integrated Master of Science)</option>
							<option value="Applied Geology (5 Years, Integrated Master of Technology)">Applied Geology (5 Years, Integrated Master of Technology)</option>
							<option value="Applied Geophysics (5 Years, Integrated Master of Technology)">Applied Geophysics (5 Years, Integrated Master of Technology)</option>
							<option value="Applied Mathematics (5 Years, Integrated Master of Science)">Applied Mathematics (5 Years, Integrated Master of Science)</option>
							<option value="Architecture (5 Years, Bachelor of Architecture)">Architecture (5 Years, Bachelor of Architecture)</option>
							<option value="Artificial Intelligence (4 Years, Bachelor of Technology)">Artificial Intelligence (4 Years, Bachelor of Technology)</option>
							<option value="Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)">Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)</option>
							<option value="Bio Engineering (4 Years, Bachelor of Technology)">Bio Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Bio Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Bio Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Bio Technology (4 Years, Bachelor of Technology)">Bio Technology (4 Years, Bachelor of Technology)</option>
							<option value="Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))">Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Biochemical Engineering with M.Tech. in Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))">Biochemical Engineering with M.Tech. in Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Bioengineering with M.Tech in Biomedical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Bioengineering with M.Tech in Biomedical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Biological Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Biological Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Biological Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Biological Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Biological Sciences and Bioengineering (4 Years, Bachelor of Technology)">Biological Sciences and Bioengineering (4 Years, Bachelor of Technology)</option>
							<option value="Biomedical Engineering (4 Years, Bachelor of Technology)">Biomedical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Biosciences and Bioengineering (4 Years, Bachelor of Technology)">Biosciences and Bioengineering (4 Years, Bachelor of Technology)</option>
							<option value="Biotechnology and Biochemical Engineering (4 Years, Bachelor of Technology)">Biotechnology and Biochemical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Biotechnology and Biochemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Biotechnology and Biochemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Biotechnology and Bioinformatics (4 Years, Bachelor of Technology)">Biotechnology and Bioinformatics (4 Years, Bachelor of Technology)</option>
							<option value="BS in Mathematics (4 Years, Bachelor of Science)">BS in Mathematics (4 Years, Bachelor of Science)</option>
							<option value="Ceramic Engineering (4 Years, Bachelor of Technology)">Ceramic Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Ceramic Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Ceramic Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Chemical and Biochemical Engineering (4 Years, Bachelor of Technology)">Chemical and Biochemical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Chemical Engineering (4 Years, Bachelor of Technology)">Chemical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Chemical Science and Technology (4 Years, Bachelor of Technology)">Chemical Science and Technology (4 Years, Bachelor of Technology)</option>
							<option value="Chemical Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Chemical Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Chemistry (4 Years, Bachelor of Science)">Chemistry (4 Years, Bachelor of Science)</option>
							<option value="Chemistry (5 Years, Integrated Master of Science)">Chemistry (5 Years, Integrated Master of Science)</option>
							<option value="Chemistry with Specialization (4 Years, Bachelor of Science)">Chemistry with Specialization (4 Years, Bachelor of Science)</option>
							<option value="Civil and Infrastructure Engineering (4 Years, Bachelor of Technology)">Civil and Infrastructure Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Civil Engineering (4 Years, Bachelor of Technology)">Civil Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Civil Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Civil Engineering and M. Tech. in Structural Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M. Tech. in Structural Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Civil Engineering and M.Tech in Transportation Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M.Tech in Transportation Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Civil Engineering and M.Tech. in Environmental Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering and M.Tech. in Environmental Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Civil Engineering with any of the listed specialization (5 Years, Bachelor and Master of Technology (Dual Degree))">Civil Engineering with any of the listed specialization (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Computational Engineering (4 Years, Bachelor of Technology)">Computational Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Computer Science and Engineering (4 Years, Bachelor of Technology)">Computer Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Computer Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Computer Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Data Science and Artificial Intelligence (4 Years, Bachelor of Technology)">Data Science and Artificial Intelligence (4 Years, Bachelor of Technology)</option>
							<option value="Data Science and Engineering (4 Years, Bachelor of Technology)">Data Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Earth Sciences (4 Years, Bachelor of Science)">Earth Sciences (4 Years, Bachelor of Science)</option>
							<option value="Economics (4 Years, Bachelor of Science">Economics (4 Years, Bachelor of Science)</option>
							<option value="Economics (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Economics (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Economics (5 Years, Integrated Master of Science)">Economics (5 Years, Integrated Master of Science)</option>
							<option value="Electrical and Electronics Engineering (4 Years, Bachelor of Technology)">Electrical and Electronics Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electrical Engineering (4 Years, Bachelor of Technology)">Electrical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electrical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering (IC Design and Technology) (4 Years, Bachelor of Technology)">Electrical Engineering (IC Design and Technology) (4 Years, Bachelor of Technology)</option>
							<option value="Electrical Engineering (Power and Automation) (4 Years, Bachelor of Technology)">Electrical Engineering (Power and Automation) (4 Years, Bachelor of Technology)</option>
							<option value="Electrical Engineering and M.Tech Power Electronics and Drives (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering and M.Tech Power Electronics and Drives (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering with M.Tech. in Communications and Signal Processing (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in Communications and Signal Processing (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering with M.Tech. in Microelectronics (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in Microelectronics (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electrical Engineering with M.Tech. in Power Electronics (5 Years, Bachelor and Master of Technology (Dual Degree))">Electrical Engineering with M.Tech. in Power Electronics (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electronics and Communication Engineering (4 Years, Bachelor of Technology)">Electronics and Communication Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electronics and Electrical Communication Engineering (4 Years, Bachelor of Technology)">Electronics and Electrical Communication Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electronics and Electrical Communication Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Electronics and Electrical Communication Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Electronics and Electrical Engineering (4 Years, Bachelor of Technology)">Electronics and Electrical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electronics and Instrumentation Engineering (4 Years, Bachelor of Technology)">Electronics and Instrumentation Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Electronics Engineering (4 Years, Bachelor of Technology)">Electronics Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Energy Engineering (4 Years, Bachelor of Technology)">Energy Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Energy Engineering with M.Tech. in Energy Systems Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Energy Engineering with M.Tech. in Energy Systems Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Engineering and Computational Mechanics (4 Years, Bachelor of Technology)">Engineering and Computational Mechanics (4 Years, Bachelor of Technology)</option>
							<option value="Engineering Design (5 Years, Bachelor and Master of Technology (Dual Degree))">Engineering Design (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Engineering Physics (4 Years, Bachelor of Technology)">Engineering Physics (4 Years, Bachelor of Technology)</option>
							<option value="Engineering Physics (5 Years, Bachelor and Master of Technology (Dual Degree))">Engineering Physics (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Engineering Science (4 Years, Bachelor of Technology)">Engineering Science (4 Years, Bachelor of Technology)</option>
							<option value="Environmental Engineering (4 Years, Bachelor of Technology)">Environmental Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Environmental Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Environmental Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Exploration Geophysics (4 Years, Bachelor of Science)">Exploration Geophysics (4 Years, Bachelor of Science)</option>
							<option value="Exploration Geophysics (5 Years, Integrated Master of Science)">Exploration Geophysics (5 Years, Integrated Master of Science)</option>
							<option value="Geological Technology (5 Years, Integrated Master of Technology)">Geological Technology (5 Years, Integrated Master of Technology)</option>
							<option value="Geophysical Technology (5 Years, Integrated Master of Technology)">Geophysical Technology (5 Years, Integrated Master of Technology)</option>
							<option value="Industrial and Systems Engineering (4 Years, Bachelor of Technology)">Industrial and Systems Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Industrial and Systems Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))">Industrial and Systems Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Industrial Chemistry (4 Years, Bachelor of Technology)">Industrial Chemistry (4 Years, Bachelor of Technology)</option>
							<option value="Industrial Chemistry (5 Years, Bachelor and Master of Technology (Dual Degree))">Industrial Chemistry (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Instrumentation Engineering (4 Years, Bachelor of Technology)">Instrumentation Engineering (4 Years, Bachelor of Technology)</option>
							<option value=">Interdisciplinary Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Interdisciplinary Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Manufacturing Science and Engineering (4 Years, Bachelor of Technology)">Manufacturing Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Manufacturing Science and Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))">Manufacturing Science and Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Materials Engineering (4 Years, Bachelor of Technology)">Materials Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Materials Science and Engineering (4 Years, Bachelor of Technology)">Materials Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Materials Science and Metallurgical Engineering (4 Years, Bachelor of Technology)">Materials Science and Metallurgical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Materials Science and Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Materials Science and Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mathematics & Computing (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Mathematics & Computing (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Mathematics and Computing (4 Years, Bachelor of Science)">Mathematics and Computing (4 Years, Bachelor of Science)</option>
							<option value="Mathematics and Computing (4 Years, Bachelor of Technology)">Mathematics and Computing (4 Years, Bachelor of Technology)</option>
							<option value="Mathematics and Computing (5 Years, Bachelor and Master of Technology (Dual Degree))">Mathematics and Computing (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mathematics and Computing (5 Years, Integrated Master of Science)">Mathematics and Computing (5 Years, Integrated Master of Science)</option>
							<option value="Mathematics and Computing (5 Years, Integrated Master of Technology)">Mathematics and Computing (5 Years, Integrated Master of Technology)</option>
							<option value="Mathematics and Scientific Computing (4 Years, Bachelor of Science)">Mathematics and Scientific Computing (4 Years, Bachelor of Science)</option>
							<option value="Mechanical Engineering (4 Years, Bachelor of Technology)">Mechanical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mechanical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechanical Engineering and M. Tech. in Mechanical System Design (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering and M. Tech. in Mechanical System Design (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechanical Engineering and M. Tech. in Thermal Science & Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering and M. Tech. in Thermal Science & Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value=">Mechanical Engineering and M.Tech. in Computer Integrated Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering and M.Tech. in Computer Integrated Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechanical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechanical Engineering with M.Tech. in Manufacturing Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mechanical Engineering with M.Tech. in Manufacturing Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mechatronics Engineering (4 Years, Bachelor of Technology)">Mechatronics Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Metallurgical and Materials Engineering (4 Years, Bachelor of Technology)">Metallurgical and Materials Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Metallurgical and Materials Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical and Materials Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical and Materials Engineering and M.Tech. in Materials Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical and Materials Engineering and M.Tech. in Materials Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical Engineering & Materials Science (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering & Materials Science (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical Engineering (4 Years, Bachelor of Technology)">Metallurgical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Metallurgical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical Engineering and Materials Science (4 Years, Bachelor of Technology)">Metallurgical Engineering and Materials Science (4 Years, Bachelor of Technology)</option>
							<option value="Metallurgical Engineering and Materials Science with M.Tech. in Ceramics and Composites (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering and Materials Science with M.Tech. in Ceramics and Composites (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Metallurgical Engineering and Materials Science with M.Tech. in Metallurgical Process Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Metallurgical Engineering and Materials Science with M.Tech. in Metallurgical Process Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mineral and Metallurgical Engineering (4 Years, Bachelor of Technology)">Mineral and Metallurgical Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mineral Engineering (4 Years, Bachelor of Technology)">Mineral Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mining Engineering (4 Years, Bachelor of Technology)">Mining Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mining Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mining Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Mining Machinery Engineering (4 Years, Bachelor of Technology)">Mining Machinery Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Mining Safety Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Mining Safety Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Naval Architecture and Ocean Engineering (4 Years, Bachelor of Technology)">Naval Architecture and Ocean Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Naval Architecture and Ocean Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))">Naval Architecture and Ocean Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Ocean Engineering and Naval Architecture (4 Years, Bachelor of Technology)">Ocean Engineering and Naval Architecture (4 Years, Bachelor of Technology)</option>
							<option value="Ocean Engineering and Naval Architecture (5 Years, Bachelor and Master of Technology (Dual Degree))">Ocean Engineering and Naval Architecture (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Petroleum Engineering (4 Years, Bachelor of Technology)">Petroleum Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Pharmaceutical Engineering & Technology (4 Years, Bachelor of Technology)">Pharmaceutical Engineering & Technology (4 Years, Bachelor of Technology)</option>
							<option value="Pharmaceutical Engineering & Technology (5 Years, Bachelor and Master of Technology (Dual Degree))">Pharmaceutical Engineering & Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Physics (4 Years, Bachelor of Science)">Physics (4 Years, Bachelor of Science)</option>
							<option value="Physics (5 Years, Bachelor of Science and Master of Science (Dual Degree))">Physics (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option>
							<option value="Physics (5 Years, Integrated Master of Science)">Physics (5 Years, Integrated Master of Science)</option>
							<option value="Physics with Specialization (4 Years, Bachelor of Science)">Physics with Specialization (4 Years, Bachelor of Science)</option>
							<option value="Polymer Science and Engineering (4 Years, Bachelor of Technology)">Polymer Science and Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Production and Industrial Engineering (4 Years, Bachelor of Technology)">Production and Industrial Engineering (4 Years, Bachelor of Technology)</option>
							<option value="Quality Engineering Design and Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))">Quality Engineering Design and Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))</option>
							<option value="Statistics and Data Science (4 Years, Bachelor of Science)">Statistics and Data Science (4 Years, Bachelor of Science)</option>
							<option value="Textile Technology (4 Years, Bachelor of Technology)">Textile Technology (4 Years, Bachelor of Technology)</option>
							</select>
						<br>

						<label for="category">Select Category:</label>
						<select name="category">
							<option value="">Select</option>
							<option value="Open">Open </option>
							<option value="OBC-NCL">OBC-NCL</option>
							<option value="EWS">EWS</option>
							<option value="SC">SC</option>
							<option value="ST">ST</option>
							<option value="PWD">PWD</option>
						</select>
						<br>
							<button type="submit" name="submit">Enter</button>
							</form>
</div>
				
				<div class = "chartcont">
					
				<?php

					$host = 'localhost';
					$username = 'homie';
					$password = 'homie';
					$dbname = 'mydb';
					$conn = new mysqli($host, $username, $password, $dbname);

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}


					if(isset($_POST['submit'])){

						$city = $_POST['college'];
						
						
						

						$filter_branches = array("Computer Science and Engineering (4 Years, Bachelor of Technology)", "Civil Engineering (4 Years, Bachelor of Technology)", "Chemical Engineering (4 Years, Bachelor of Technology)");
						$filter_branches = $_POST['branch'];
						$filter_branches = "'" . implode("','", $filter_branches) . "'";

						$sql1 = "SELECT branch,cr FROM orcr WHERE city = '{$city}' and category = 'OPEN' and branch IN ($filter_branches) ORDER BY branch, year";
						$result1 = $conn->query($sql1);

						$sql2 = "SELECT distinct(branch) FROM orcr WHERE city = '{$city}' and category = 'OPEN' and branch IN ($filter_branches)";
						$result2 = $conn->query($sql2);

						$conn->close();

						$branches = array();
						$ranks = array();

						if ($result1) {

							while($row = $result1->fetch_assoc()) {
								if ( isset( ${$row['branch']} ) ){
									array_push( ${$row['branch']} , $row['cr'] );
								}else{
									${$row['branch']} = array();
									array_push( ${$row['branch']} , $row['cr'] );
								}
							}

						} else {
							echo "0 results";
						}

						

						if($result2){
							while($row = $result2->fetch_assoc()) {
							
								array_push($branches, $row['branch']);

								$x = count(${$row['branch']});

								for ($i = 0; $i < 5 - $x; $i++) {
									array_unshift(${$row['branch']}, null);
								}

								array_push($ranks , ${$row['branch']} );

							}

						}
						

						// print_r($branches);
						// print_r($ranks);


						$ranks = json_encode($ranks);
						$branches = json_encode($branches);

						$years = array(2018, 2019, 2020, 2021, 2022);
						$years = json_encode($years);

					}



					?>

					<canvas class="charts" id="myChart"> </canvas>
					<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
					<script src="scripts.js"></script>
					<script>
					const ctx = document.getElementById('myChart');

					var ranks = <?php echo $ranks ?>;
					var branches = <?php echo $branches ?>;
					var labelList = <?php echo $years ?>;

					let dataa = [];

					for (let i = 0; i < branches.length; i++){
						let dict = {
							label : branches[i],
							data : ranks[i],
							borderWidth: 1
						}
						dataa.push(dict);
					}

					new Chart(ctx, {
						type: 'line',
						data: {
							labels: labelList,
							datasets: dataa
						},
						options: {
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
				

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="assets/js/drop.js"></script>

	</body>
</html>