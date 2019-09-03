<?php
$up = json_decode($_POST['up']) ;
$final = json_decode($_POST['json']);
$y = $_POST['y'];
$x = $_POST['x'];
ob_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<style type="text/css">
	@page { margin:  0cm 0cm;            }
    body {    margin-top: 3cm;    margin-left: 2cm;    margin-right: 2cm;    margin-bottom: 2cm;}
	h1 { text-align: left; color: #f7a500; font-family: "Arial Black"; font-size: 30px; }
	h2 { text-align: left;}
	p {	text-align: justify; }
	span { font-weight: bold; }
		.table { display: table;    margin: auto; background: black; width: 200px;}
		.row {   display: table-row; background: blue;}
		.cell {  display: table-cell; background: red;}
		.map { width: 100%; height: auto; margin-top: -4px;}

header {
	position: fixed;top: 0cm;left: 0cm;right: 0cm;height: 3cm;
	/** Extra personal styles **/
	background-color: #ffffff;color: white;text-align: center;line-height: 1.5cm;
}
footer {
	position: fixed;bottom: 0cm;left: 0cm;right: 0cm;height: 2cm; 
	/** Extra personal styles **/
	background-color: #ffffff;color: white;text-align: center;line-height: 1.5cm;
}

</style>
</head>
<body>
    <!-- Define header and footer blocks before your content -->
    <header>
        <img class="logoz" src="imgs/zombicide_logo_small.png" alt="zombicide_logo">
    </header>

    <footer>
        <img class="footer" src="imgs/zombicide_footer.png" alt="zombicide_footer"> 
    </footer>	
	<main>        
		<div class='center'>
			<div class='div_map'>
				<div class='table'>
					<?php
						for ($i = 0; $i < $y; $i++) {
							echo "<div class='row'>";
							for ($j = 0; $j < $x; $j++) {
								echo "<div class='cell'><img class='map' src='imgs/". $final[$i][$j]->code . "_" . $up[$i][$j] . ".png' alt='" . $final[$i][$j]->code . "_" . $up[$i][$j] . "'></div>";
							}
							echo "</div>";
						}
					?>
				</div>
			</div>
		</div>
	</main>	
</body>
</html>			
<?php

$str = ob_get_contents();
ob_end_clean();

require_once 'lib/dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($str);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();