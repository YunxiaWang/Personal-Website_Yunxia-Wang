<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Yunxia Wang - Hardware Projects</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<!--use header.php in the components folder for all pages' header to make consistency-->
	<?php include 'components/header.php'; ?>

	<!--all the images on this page are my own property -->
	<div class="microwave">
		<h1>Microwave Components Part Time Develope - Clear Microwave, Inc, PA, USA<br></h1>
		<h2>A New Ka-band (26.5G – 40G) 180º Hybrid Coupler<br></h2>
		<p>&bull; Published a paper as the first author -- A new Ka-band 180° hybrid coupler, Wireless and Microwave 
			Technology Conference (WAMICON), 2015 IEEE 16th Annual and attractions; providing navigation based on Google maps.<br>
			&bull; Consists of a Wilkinson power splitter and a 180° differential phase shifter which composed of a 5-section λ/4 short 
			circuit stub spacing at approximately λ/4 wavelength and a 50 Ohm reference transmission line.<br></p>
		<h2>A Novel Broadband (6G -12G) 180º Hybrid<br></h2>
		<p>&bull; Consists of three-stage coupler lines with 90° phase shifting and a 90° phase shifter composed of a 3-section short circuit stub.<br></p>
		<img src="images/microwave.png" alt="Microwave Hybrid Coupler">
	</div>

	<div class="pcb">
		<h2>433MHz Super-regenerative Wireless Receiver Design Based on PCB Antenna and PCB Resonant Inductor<br></h2>
		<p>&bull; Designed a planar antenna with receiving range of 110m within 2*3cm-sized PCB.<br>
		&bull; Designed planar resonant inductors within 1*1cm-sized PCB and flexible PCB (FPCB).<br>
		&bull; Developed minimized and wearable wireless receivers for the microelectronic neutral bridge system.<br>
		&bull; Awarded excellent senior design thesis in the university.<br></p>
		<img src="images/pcb.png" alt="PCB Antenna Inductor">
	</div>

	<div class="skill_list">
		<h2>My Hardware Engineering Tool Skills</h2>
		<ul>
			<li>ADS</li>
			<li>AWR</li>
			<li>HFSS</li>
			<li>Network Analyzer</li>
			<li>Altium Designer</li>			
			<li>Cadence</li>
			<li>Quartus</li>			
			<li>Multisim</li>
			<li>AutoCAD</li>
			<li>VHDL</li>
		</ul>
	</div>

	<!--form using checkbox for choose desired skills-->
	<form class="skill_check" action="hprj.php" method="post">
  		<input type="checkbox" name="check[]" value="ADS">
  		<input type="checkbox" name="check[]" value="AWR">
  		<input type="checkbox" name="check[]" value="HFSS">
  		<input type="checkbox" name="check[]" value="Network Analyzer">
  		<input type="checkbox" name="check[]" value="Altium Designer">
  		<input type="checkbox" name="check[]" value="Cadence">
  		<input type="checkbox" name="check[]" value="Quartus">
  		<input type="checkbox" name="check[]" value="Multisim">
  		<input type="checkbox" name="check[]" value="AutoCAD">
  		<input type="checkbox" name="check[]" value="VHDL"><br>
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