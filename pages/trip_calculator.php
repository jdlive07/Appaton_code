



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Road Trip Planner</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<?php

		DEFINE ('DB_USER', 'cs4477216');
		DEFINE ('DB_PASSWORD', 'malQuic7');
		DEFINE ('DB_HOST', 'localhost');
		DEFINE ('DB_NAME', 'cs4477216');
		$tableName = "FUELDATA";

		$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) 
		OR die ('Could not connect to MySQL: ' . mysql_connect_error());

		$db = @mysql_select_db(DB_NAME,$dbc);

		// $query = "SELECT YR FROM FUELDATA";

		// $result = @mysql_query($query, $dbc) or die("Couldn't execute query.");
		// $row = mysql_fetch_array($result);
		// echo $row[''];
		mysql_set_charset('utf8',$dbc);
		?>
	</head>
	<body style="background-image:url('../images/retro.jpg')">
		    
		  
		  <div class="container" style="background-color:white">
	         
	              <ul class="nav nav-pills nav-justified">
	                <li><a href="#">Home</a></li>
	                <li ><a href="#">Gas Prices</a></li>            
	                <li><a href="#">Trip Cost Calculator</a></li>
	                <li><a href="#">About</a></li>
	                <li><a href="#">Contact</a></li>
	              </ul>
	    
		</br>
		</br>
		
		<div class="row">
				<div class="col-md-2 text-center"> Left Arrow </div>

		<div class="col-md-8 text-center"> <img src="../images/truck.png" alt="..." class="img-rounded"> </div>
		<div class="col-md-2 text-center"> Right arrow </div>
		</div>
		
		</br>
		<div class="row">
		
	         <div class="col-md-5 text-right"> <p style="font-family:Comic Sans MS, cursive, sans-serif;"> Vehicle Class </p> </div>
		<div class="col-md-3">  <select name="Surf1" style="width: 200px">
            <option> </option>
			</select>
			</div>
		
		</div>
		
		
		</br>
		<div class="row">
         <div class="col-md-3"> <p style="font-family:Comic Sans MS, cursive, sans-serif;"> Vehicle CLASS </p> </div>
		<div class="col-md-3">  <?php
		$col = "CLASS";
		$q = "SELECT DISTINCT $col FROM $tableName";
		$r = mysql_query($q,$dbc);

		if($r)
		{
			echo "<select name=\"$tableName\">\n";
			while ($row = mysql_fetch_array($r))
			{
				echo "<option value=\"{$row[$col]}\">{$row[$col]}</option>\n";
			}
		} else
		echo "result is false";
		?>
			</div>
			
			 <div class="col-md-3"> <p style="font-family:Comic Sans MS, cursive, sans-serif;"> Engine Size </p> </div>
		<div class="col-md-3"> 		<?php
		$col = "ENG";
		$q = "SELECT DISTINCT $col FROM $tableName";
		$r = mysql_query($q,$dbc);

		if($r)
		{
			echo "<select name=\"$tableName\">\n";
			while ($row = mysql_fetch_array($r))
			{
				echo "<option value=\"{$row[$col]}\">{$row[$col]}</option>\n";
			}
		} else
		echo "result is false";
		?>
			
			</div>
     </div>
	 
	 
	 
	 		</br>
		
		<div class="row">
         <div class="col-md-3"> <p style="font-family:Comic Sans MS, cursive, sans-serif;"> BRAND </p> </div>
		<div class="col-md-3">  
		<?php
		$col = "BRAND";
		$q = "SELECT DISTINCT $col FROM $tableName";
		$r = mysql_query($q,$dbc);

		if($r)
		{
			echo "<select name=\"$tableName\">\n";
			while ($row = mysql_fetch_array($r))
			{
				echo "<option value=\"{$row[$col]}\">{$row[$col]}</option>\n";
			}
		} else
		echo "result is false";
		?>
			</div>
			
			 <div class="col-md-3"> <p style="font-family:Comic Sans MS, cursive, sans-serif;"> MODEL </p> </div>
		<div class="col-md-3">
				<?php
		$col = "MODEL";
		$q = "SELECT DISTINCT $col FROM $tableName";
		$r = mysql_query($q,$dbc);

		if($r)
		{
			echo "<select name=\"$tableName\">\n";
			while ($row = mysql_fetch_array($r))
			{
				echo "<option value=\"{$row[$col]}\">{$row[$col]}</option>\n";
			}
		} else
		echo "result is false";
		?>
			</div>
     </div>

		<div class="row">
         <div class="col-md-3"> <p style="font-family:Comic Sans MS, cursive, sans-serif;"> TRANSMISSION </p> </div>
		<div class="col-md-3">  
		<?php
		$col = "TRANS";
		$q = "SELECT DISTINCT $col FROM $tableName";
		$r = mysql_query($q,$dbc);

		if($r)
		{
			echo "<select name=\"$tableName\">\n";
			while ($row = mysql_fetch_array($r))
			{
				echo "<option value=\"{$row[$col]}\">{$row[$col]}</option>\n";
			}
		} else
		echo "result is false";
		?>
			</div>
			
			 <div class="col-md-3"> <p style="font-family:Comic Sans MS, cursive, sans-serif;"> FUEL TYPE </p> </div>
		<div class="col-md-3">
				<?php
		$col = "FUEL";
		$q = "SELECT DISTINCT $col FROM $tableName";
		$r = mysql_query($q,$dbc);

		if($r)
		{
			echo "<select name=\"$tableName\">\n";
			while ($row = mysql_fetch_array($r))
			{
				echo "<option value=\"{$row[$col]}\">{$row[$col]}</option>\n";
			}
		} else
		echo "result is false";
		?>
			</div>
     </div>
	 		<div class="row">
         <div class="col-md-3"> <p style="font-family:Comic Sans MS, cursive, sans-serif;"> CYLINDERS </p> </div>
		<div class="col-md-3">  
		<?php
		$col = "CYLINDERS";
		$q = "SELECT DISTINCT $col FROM $tableName";
		$r = mysql_query($q,$dbc);

		if($r)
		{
			echo "<select name=\"$tableName\">\n";
			while ($row = mysql_fetch_array($r))
			{
				echo "<option value=\"{$row[$col]}\">{$row[$col]}</option>\n";
			}
		} else
		echo "result is false";
		?>
			</div>
			</div>
</br>
</br>
	 <button type="button" class="btn btn-primary col-md-12 text-center">Search</button>
</br>
</br>
</br>
</br>

		
	<footer>
        <p>&copy; carribeanada 2014</p>
      </footer>
</div>