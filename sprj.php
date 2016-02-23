<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Yunxia Wang - Software Projects</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<!--use header.php in the components folder for all pages' header to make consistency-->
	<?php include 'components/header.php'; ?>

	<!--all the images on this page are my own property -->
	<div class="tour">
		<h2>Cornell Tour Guide System<br></h2>
		<p>&bull;Developed an ANDROID application providing search and category functions for information of Cornell facilities
		 and attractions; providing navigation based on Google maps.<br>
		&bull;Built server and database in PHP and MYSQL as the back-end for the app. </p>
		<img src="images/tour1.png" alt="Cornell Tour Guide System">
		<img src="images/tour2.png" alt="Cornell Tour Guide System">
	</div>

	<div class="recognize">
		<h2>Handwritten Mathematical Expression Recognition and Calculation<br></h2>
		<p>&bull; Designed a C++ application recognizing math expression written in one row based on KNN algorithm. <br>
		&bull; Implemented Seam Carving and directly scaling algorithm to process bitmap images and training data.
		&bull; Accelerated recognizing runtime using high-level synthesis and FPGA.</p>
		<img src="images/recognize1.png" alt="Handwritten Recognition">
		<img src="images/recognize2.png" alt="Handwritten Recognition">
	</div>

	<div class="skill_list">
		<h2>My Software Programming Skills</h2>
		<ul>
			<li>JAVA</li>
			<li>C++</li>
			<li>ANDROID</li>
			<li>PHP</li>
			<li>MYSQL</li>			
			<li>HTML</li>
			<li>CSS</li>			
			<li>JAVASCRIPT</li>
			<li>MATLAB</li>			
			<li>ASSEMBLY</li>
		</ul>
	</div>

	<!--form using checkbox for choose desired skills-->
	<form class="skill_check" action="sprj.php" method="post">
  		<input type="checkbox" name="check[]" value="JAVA">
  		<input type="checkbox" name="check[]" value="C++">
  		<input type="checkbox" name="check[]" value="ANDROID">
  		<input type="checkbox" name="check[]" value="PHP">
  		<input type="checkbox" name="check[]" value="MYSQL">
  		<input type="checkbox" name="check[]" value="HTML">
  		<input type="checkbox" name="check[]" value="CSS">
  		<input type="checkbox" name="check[]" value="JAVASCRIPT">
  		<input type="checkbox" name="check[]" value="MATLAB">
  		<input type="checkbox" name="check[]" value="ASSEMBLY"><br>
  		<input type="submit" name= "submit" value="Submit"><br>
	</form>

	<div class= "check_result">
	<?php 
	if(isset($_POST["check"])) {
		$check = $_POST["check"]; 
		if(!empty($_POST['submit'])) {
			showArray($check);
		}
	}
/* php function to show checked items in the array */
		function showArray($array) {
			foreach ($array as $item) {
				echo "$item, ";
			}
			echo "are my strongest skills!";
		}
	?>
	</div>

	<!--use footer.php in the components folder for all pages' footer to make consistency-->
	<?php include 'components/footer.php'; ?>
</body>
</html>