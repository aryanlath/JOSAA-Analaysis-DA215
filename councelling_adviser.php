
<html>
<head>
<style>
		.DIV1{
			background-color: rgb(255, 251, 136);
			background-image: url('https://www.simplilearn.com/ice9/free_resources_article_thumb/What_is_Data_Types_of_Data_and_How_To_Analyze_Data.jpg');
			font-size: 20px;
		}
		h1 {
			color: White;
		}
		p{
			color:rgb(249, 253, 29);
		}
		.DIV2{
			background-color: rgb(131, 214, 252);
			font-size: 20px;
			height :300px;
			width :30%;
		}
		.DIV3{
			background-color: rgb(252, 135, 131);
			font-size: 20px;
			height :300px;
			width :60%;
		}
		.DIV4{
			display: flex;
			/* background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABMlBMVEX/////0SkAAAD/mSpmZmb/0ymzs7PniyZpaWm3t7f/2Cr/zgD/lir/mCr/2iv/1ipwcHBYWFjExMSdnZ0aGho+Pj7m5uYlJSWSkpLR0dGbm5s1NTVRUVH/lBP/0Bv39/f/jwD/lBX/8synp6f/0aj//PMwMDDb29v/nitdXV3/777/9+//6aRJSUmGhobkuyX/yikQEBB7e3v/0zj/2Vn/5c//7Nv/rmD/+un/5pj/10y1lB2UeRjZsiP/xSn/qyr/uSn/2rr/3Wz/4YM2LAleTQ8pIgdtWRLMpyH/t3P/wYn/sCn/9dj/4ov/vX//oDv/ypwaFQT/8cR9ZhSvjxz/qlQxJwhQQQ11YBOihRq1bB3MeiEYFAT/17Q9NAmOVRcyHghsQBGiYRtdOA/MnCEpGAfyioNJAAAPvklEQVR4nO1deV/bOBPGNaaQg3CftWMDgUDCEa5CCoXAlnJfLdvu0e577ff/Cq+kkWUpvpLgRPb+/PyxS+Mg62FGc2ks9/WlSJEiRYoUKVKkSJEiRYoUKVKkaMbtAsat7Gl0EfUsRl32NLqIM0NRFONM9jS6iDvC8E72NLqIKmFYlT2NLuKfwLBxFXR1LYsYZteCvnLViHZC0aJyrepmJeALC4ThQtAQpq5eBw0hFfemlVetHwHfOCAMDwK+8cNS85Z5H/XUIsKSriK8D/jGAVmHQQzf4yH0painFhVUMr2S/xdKGmKoBX2B/JHU6KcWEYgQ9SBTsYMY7gRcb+ixFiESYl5VrSBrWkcMg4K2K0tFY0Q9rQgBKzHgC7uGYuwGXI/3KsQgM9zzv44C06CwdC/sLyQfWIjWtf/1c8Tw3P/ytRV3EYIQH/wvHyKGh/6XH2IvQhCivu97eQ0x9A/a9vX4i5AI0Xr0vYoC04Cw9NGKvwhBiP5qigLTgLD0IQki7OtDsanuGzrfajuab5mmoqOYtDuTihRIiFZngliyEiFCvBLzQdG3P97nE7AKMZAQzYDg2hclMyEiREK0zE4S9YZpxUaEz8H1wKV7b4dYnJqaWllZQf8tel7fvw8W4dlza9N7PQ6MbEBc4oXiyuLG5BsekxuLK948fXGYDcydo0TdCKkmCZga2l5+443l7aGplsdBwYLRo2r5uRFWTnIwuzHvw87G/MZsSyORIlZQ1B4hdjDD4GoLYGykFkIPUBsZCx3rAG4aVB+IEGfZFm42NdMSOxszIepK/qzZnu143BGKQbn62Ghb/DBGg7R1lxDs4YZHNXhRjE2GE/LApK+ywtLv6W7AQsAtZ9d9Ofz59HTx9PSn7/V1bznCH7Q12xYZDhTEMevhgov9HjP/5cvRh+PNTSUzjJFRNjePPxx9+cXjm/0eTvIZETSUXvlChhJeGllXJrTYPOWn71+PM8OZQkFDUAD4x0IBfXr89ftT8y8sNg95iwnudhLpvhbYpBrijafeibP9ebSpZQo2MTe0QkY7Pvop/tI70ayWjF4aURGHzVHGmDjVL5uIgD89W56ZwuYX8RcFi4MjqDaDxOiAqy6cQZ0TtPOrkgljx1hmlK+Cts45g54HVna6jluj7qjpID/Hr4Um5TQM3IZh+Kpr4Sv/64Ns1FLdkNqdcuAQ5JfgkSLwQ+Tq59Xn24NSdcdXjgXliF+MbNxSz42oDzgneHHM66eRrd8twB9ibcdPhqCrxxfOIOuS+bjARWmflALHT7mzlWyhng3gh1FQPjnDjErl48IIp6GcghpG1Vbj0nkYP6KqnKaOSGXUBM6KXg7z/Ng3no0gBXUwfOlpUWWD84OXGTbZ7JljhloRICDDUQxPG3uEohdBw3CCVmTxWyUoUmyzktM1rLIZfXAI1h0jf6u1QRBR/MDGW5XIisOQY2TYGuQDyYWWNZRi2DE3Q/JoOSiyYsxnhyCXja+1SxBRZE6jFgc9ZfWYC8V2E68kiMZhrn+md0T2fDZ2HTNzbDt6vrzRtooSFI7DjM1+QDtEh3hvPtx77UZsuBYh32xx0BFBfilueNyzcf9gdra9FYRyXrV082WpSZRMhL/aoQyfMpZazZ+aoRV+9RHi/tKLqVtqvhw5Q5M0nOUtXb1vcFu840xHbTJ8qXi3LTchUGR6Ou4MV2ncq7qVJzMxoya4DwwxLN16ebRFaRvST7aO8ulqtUMdxXDsqT2Dxxd0ZzYL07/hozPslS1L13XLoqKkjbKz9jQ2bR3lFuHtKwgq2qY9NFQYKyYVHp1HOXpT01fa32s8Xl89WKap63Qvc5vO4jtzhVxpqp1YzUOI3+nYNMdQdd00rYer68fG3n63K2+IKu0EbhZhVDoqCBGG+9Hwc1jdhK2kn2g8yu9llF5HEMWnnwQ1lQPbGV7aIuSKRnev0lEEzU4yvFxir0B3YC5oVZQ3M68WoaJpNHablEfQdvdHVEn5LvzD14oQqakd2MgLv+3cntoZYbvt1fw4WyMv16cBzYWHCDtJKVzIXLjCmh6DbqR9AYbCpnDn8RrPkO5n9EtjuCxYUr49oxQFQWZNl2URtLP7HWDIty5EoqSKtgM3kJbpT9FlCBGb8NDdWSQyVIbpQmy9ryharAjLUHhgKxJ+zkJckcSQOovfoHrB75V2mto3o/CbXHexyBsa4SGDzqozbtimxrW33yPM8P5eaHSrRrMMmc/vYcVNwAhvSrN8ynYeFUNqTGVtQ8Ge4QUsQ6HNLSJTihYiGFNZe4mw7fsLcRbi81r1iAgqw9BVJGtDGHKnb8RZiE1uvrv17SLzTWr+BDKE/F58XqvTMqmb4SepMoRdtc/AUOjii47hZ3KPnuyylcjBK89ra2vVahU8w0bPGEIdYwHdGd3/mcwk+mrbbRZgINC9pRlfhtGtw8+cP7yDmwO60EbEHAC6CWSCA/w6FPp3dyNjCOtwAEbNOu0ORvQEiY9D5Iyd3cM1CLJXfG1pZP5w+BsXeR+sHe7uGIRmV864qSJy59UFLoMocv5QEbq+X11JZAzBH3L54cFC9RzR7EZHdOnWtbjJsxR/wtavoDaRxaUK6Zieb2Eu3cEGH3nzS/9VezI8w03OlMrAGJ898XpDyjQaxWsYXkpND+2FeERCb/Hxix3EbOv09Obm9PSj0jlJ2uYmsSGDZBffaJ2GXxp3H0/UnI3yaackwZTK7FKEZiHFraZ7Zo7t1qr5XO5kqxOKmkLGl9k2BGp66c4QK2pe5ZHL3SjtcyxcylZSmuZ/p8U2/vmS92oTcuWPrVPUTsl3M99lJviAWU5NhWpbQ2+mmM+1TFHbOiGHEYGSytwgRZjGc/hQcAuxSU2JGFulqJVv8DcLpElxWho3AIm+f9J+L34lXlsuhnm1NXujncLfovDTibolguxd0HYhPlqsmC6GaC22wlD7mMuR/5OmoZo8ahSLTgaF5sZ1S125hajmTsMpYoJkGULmJKsYzIEXIn8KlpcQ1Xyoz9A+5vPkDxEHEVZIr+IiSxK1mxx/mIKnEG9CGCIJ5vMqEeE3JsKGnGMGK9c6HCY0Tb2+toXjGGcyFZfDwBSDhYiMDNVl8PbEkO7ruoSjFCvXlmU9EIYkdHsqaNoJmp3F9X3etytEDWkB0mRsj7TCEwvY9h/QvXrMsYT4qaa96Ehl+GiYiFA1nZMhKx4MVTXgecutMh4ih30KdJrYleArU0Uce/cYaekRt7A6VKBes3kDwTZ3wJCHTwxw+9jG2PaWpr5sZ/SHjht4H3vEcQl3eVovnNaQDsWfZWounVOivIQInsBPQ+l1TSPOftu5ReUF37RH59fs60iAwqlz0LLwF6XInUjnJUTVm6ByAgRJUAA6KjYoXJv5oHPSIsWjaTX1tEPl9A9K0Tn90jOw8VJTTSFLEFkZhdnR5rywYZn+x6RFjCuXXYOtRBps5y123cOcesU1mgKBOhCk+6Ku1L4SeEZxlwGp8L9sFi9sUm4h5r2C0zJPUPtVfuLrBtjTf9t6ytTJlQkjHq4MQzuhKoqvaHSvQlaHiS+gsmhbG2YS9tyBjUtNUaRGCEJyRR8mic2zhw7A2vwHKDou4yFcTbWTPEcQWmikZ4VegPaa34EicxlLHrZGtKbaFlmEOSAIj+XHIGfygkDRPonWw+s3OX1QUqBNn66MKcEmiraeXrltjZhgEIawODOxliDGIrcW7QjLXXVrSjAwQ1ibmd9iS/DMLiQOcBaV+n3PuIZ3GDivJB8UvghGph6jN33cOSUocBp/EIb0dPz3HnVFcSXScLtpo6nay5OvgrHGvzlm1hEizaMew3Io5PDxP6GZlKv/1mUe28LjNiv0JZJ8uMx5DA+nL/pE7TRPyqO1N2L300JXOi7aR0kT2wbIIwpvCQ1YiZ5FN9HYnLCkV3jw4MwIestAz1A3xBdWrDgeg5pTL4aCnmrEznxwRaMH2V6dBRmIA63pFKcJJwQHn1j2YogyYY6iQjeaJsShDrVYHL9TatKkbSePggDcHZq6liJm+VOsW3gNHROMsYVID4X2ZtjkMmAZxjCj8ECRC91I9dSrMgzWhjuMCJZhzLJeP6w7C1Hv87GlLorDOO+N3eFQPsAnDv1Nn5qveAamDkV20CA5CiNGpwoFYtZZiDiHenFHbfxaBI6w0yR5Q7t1cAlGg76ZxZdiGZwGPB0je+ItAy/E/0Lg9iNAR4EiFC/IdmhSliFvTPMPnrszPPB+qJYsUwpx21s6/zCCZDFuaeAOY1dB9AHn8ltDTj0tJMjhU1v6h0806ifG/yXOlv6db4diOfd3omwprbm9bR2/x7YE5QPuoMg2EKujIEPQ3onzNmQ9R9kJXGdet4QEKSktm7aLWO7G+GAsnI4HkuINMaCxdnxxfHwKY3ZcwOIUjzH0ARwhkhhv2GfvCC8ODYDiTQ0McRgQOxBW0EVYt0mJ2TCA4ThiQ/4pMhwStXEFfTKeOIZwYsbqyMggUcuZwREBgs5uoIvwNKqs0y86AXfubhtISu5E0BFD2ZNuC/98hriy/2Z1ZmZmFmNsRsDcLI8B9AlZhxPhw8YI5NnLftuWFkVb6vYW5MAp13OUsQZ5UcKoD0O3tyBtce+8BootyLsulm3HMCc6i5FFPsDZQB+QI7UGw4eNETbcdiQUMo9HbB8kQaxNTk6OEkyKGOWxjj4gHbhJSg/pyxKW7XXYNxSyDomWJmXTAkBC6emBgQESpxQHBIi2dBZ9Qh7ZSFICTFPgGnMMYTIkWpqkBNhOgScmJqYJJkRM88AfkG8nKQHmzohuA0lKgNlxfG0hSemhkyAOzozPIQwKGCGfUeD8MHnpoc1wbghsaZilmUsgQ0iBN4YGyLRDvMUQRECJSoDpc0LbrTBEuQV5bioWryNpA9OUoZeWejOU/VR6u/B7jbM/pB2l2yHaf5usxHPJO8K7cEpNSFYCTA/Crs1jCDwm5m1AqEZ+JGZJ3pHWnQFefLGMHbwgznXm90Fw+CdYs9vhg8YKdI90on+wX6C42g8YnASC6DoIM2EJsPOGndqqQLE2SBn21yjBVftNNfKOlu8MUxM2qVGe4jJlOLhOCbJ3X04kK2hDKDIL846juD7oiJD//M18wiIaAvbSwEmHyqojQkyQec2YvAawXbCS4rxNsWbbmRohyMScrEIiB9aSMd0PFOkyRCJEBPun7cvJqkEJYB0LyGtginQZDmI/2M9sUbIKNE1g1QzkNRDFVSpCRJB5iYRVL1wosiQDsRqly3CVC3SWk2hERTCPt86Vatg7rmP25ubOYL+b7Q1XJLU/Slow6gP/Pr6kxaK+GPIhGIt34UYD7wJxwo2oiKlpF7/pxIXawSiONSP5XiJFihQpUqRIkSJFihQpUqRIkSJK/B+X3LKNeLcCuwAAAABJRU5ErkJggg=="); */
		}
		.REG {
			background-color: white;
			border: 2px solid black;
			color: green;
			padding: 5px 10px;
			text-align: center;
			display: inline-block;
			font-size: 20px;
			margin: 10px 30px;
			cursor: pointer;
		}
</style>
</head>
<body>
	<div class = "DIV1">
		<center>
		<h1> Mehta Family School of Data Science and Aritficial Intelligence </h1>
		</center>
		<center>
		<h1> IIT Guwahati </h1>
		</center>
		<center>
		<b><p>Welcome to our Information Portal </p></b>
		</center>
	</div>
	<div class = "DIV4">
		<div class = "DIV2"  >
			
		</div>
		<div class = "DIV3">
			<form action="" method="post" > 
				<p> Rank <input type="number"  name="rank"> </p>
				<p> Catogery <input type="text"  name="cat"> </p>
				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
 
			</form> 
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
						echo "<tr> <td> institute </td> <td> Branch </td> </tr>"; 
						
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
	</div>
	
</body>

</html>



<!-- SELECT institute,CR,Year_ FROM fri.orcr_18_22_neutral_abb_cleaned__1_ WHERE abb = \"{$_POST['Branch']}\" and seat_type = 'OPEN' ORDER by institute,Year_"; -->

<!-- SELECT institute,min(OR_),Year_ FROM fri.orcr_18_22_neutral_abb_cleaned__1_ group by institute,Year_"; -->
