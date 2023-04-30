
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="proj.css" rel="stylesheet" >
  </head>
  <body>
		<!-- Navigation Bar -->
		<nav >
			<a href="try.html"><img class="navimg" src="cropped.png" width=50% height=50%></a>
			<div style = "float:right" >
				<ul>
					<li class="item"><a href="predict.php">Predictors</a></li>
					<li class="item"><a href="team.html">About Team</a></li>
				</ul>
			</div>
		</nav>
		

		<div class="data"> 
		  <div class="split left">
			<div class="centered">
				<div class="card-container">
					<!-- Card 1 -->
					<div class="card-parent">
						<button class="card">
							<h4>Which branches are getting more popular? </h4>
						</button>
						<div class="panel">
							<form method="post">
							<label for="college">Select College:</label>
							<select name="college">
								<option value="">Select</option>
								<option value="Bom">IIT Bombay </option>
								<option value="Del">IIT Delhi</option>
								<option value="Mad">IIT Madras</option>
								<option value="Bhi">IIT Bhiwandi</option>
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
								<option value="Man">IIT</option>
								<option value="Pal">IIT</option>
								<option value="Pat">IIT</option>
								<option value="Roo">IIT</option>
								<option value="Rop">IIT</option>
								<option value="Tir">IIT</option>
								<option value="Var">IIT</option>
							   
								</select>
								<button type="submit" name="submit">Submit</button>
							</form>
						</div>
					</div>
					
					<div class="card-parent">
						<button class="card">
							<h4>What is flow of the students?</h4>
						</button>
						<div class="panel">
							<p> HEy!</p>
						</div>
					</div>
		
					<div class="card-parent">
						<button class="card">
							<h4>What do toppers prefer? (Trend followed by top 1000 rankers)</h4>
						</button>
						<div class="panel">
							<p> HEy!</p>
						</div>
					</div>
		
					<div class="card-parent">
						<button class="card">
							<h4>What is the Effect of new branches?</h4>
						</button>
						<div class="panel">
							<p> HEy!</p>
						</div>
					</div>
		
					<div class="card-parent">
						<button class="card">
							<h4>What is the effect of different seat allocation rounds?</h4>
						</button>
						<div class="panel">
							<p> HEy!</p>
						</div>
					</div>
		
					<div class="card-parent">
						<button class="card">
							<h4>Which college is getting more popular?</h4>
						</button>
						<div class="panel">
							<p> HEy!</p>
						</div>
					</div>
			
					<!-- Card 2 -->
					<!-- <button class="card">
						<h4>What is flow of the students?</h4>
					</button>
			 -->
					<!-- Card 3 -->
					<!-- <button class="card">
						<h4>What do toppers prefer? (Trend followed by top 1000 rankers)</h4>
					</button> -->
			
					<!-- Card 4 -->
					<!-- <button class="card">
						<h4>What is the Effect of new branches?</h4>
					</button> -->
			
					<!-- Card 5 -->
					<!-- <button class="card">
						<h4>What is the effect of different seat allocation rounds?</h4>
					</button> -->
			
					<!-- Card 6 -->
					<!-- <button class="card">
						<h4>Which college is getting more popular?</h4>
					</button> -->
				</div>
			</div>
		  </div>
		  
		  <div class="split right">
			<div class="centered">
        <?php
		
        // Connect to database
        $host = 'localhost';
        $username = 'homie';
        $password = 'homie';
        $dbname = 'mydb';
        $conn = new mysqli($host, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
		if(isset($_POST['submit'])){
			$college_selected = $_POST['college'];
		}

        $sql1 = "SELECT city,cr,year FROM `orcr_18_22_neutral_abb_cleaned__1_` WHERE abb = 'CE4' and category = 'OPEN' ORDER by city, year";
        $result1 = $conn->query($sql1);
    
        $sql2 = "SELECT distinct(city) FROM `orcr_18_22_neutral_abb_cleaned__1_` WHERE abb = 'CE4'";
        $result2 = $conn->query($sql2);
    
        $conn->close();
    
        $cities = array();
        $ranks = array();
    
        if ($result1->num_rows > 0) {
    
            while($row = $result1->fetch_assoc()) {
                if ( isset( ${$row['city']} ) ){
                    array_push( ${$row['city']} , $row['cr'] );
                }else{
                    ${$row['city']} = array();
                    array_push( ${$row['city']} , $row['cr'] );
                }
            }
    
        } else {
            echo "0 results";
        }
    
        while($row = $result2->fetch_assoc()) {
            
            array_push($cities, $row['city']);
            array_push($ranks , ${$row['city']} );
    
        }
    
        $ranks = json_encode($ranks);
        $cities = json_encode($cities);
    
        $years = array(2018, 2019, 2020, 2021, 2022);
        $years = json_encode($years);
    
    ?>
    <canvas class = "charts" id="myChart"> </canvas>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="scripts.js"></script>
	<script>
		const ctx = document.getElementById('myChart');

		var ranks = <?php echo $ranks ?>;
		var cities = <?php echo $cities ?>;
		var labelList = <?php echo $years ?>;

		let dataa = [];
		
		for (let i = 0; i < cities.length; i++){
			let dict = {
				label : cities[i],
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
	</div>

		

		<!-- Card Container -->
		
		<script>
			var acc = document.getElementsByClassName("card");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
				  panel.style.maxHeight = null;
				} else {
				  panel.style.maxHeight = panel.scrollHeight + "px";
				}
			  });
			}
		</script>
	
    
		
		

  </body>
</html>