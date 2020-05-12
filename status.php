<head>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon.png">

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<div align="center" class="logo-image" id="spacetaker">
<img src="venosa_logo.jpg" style="max-width:100%; height:auto !important;">
</div>
<title>Inventory Status</title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->

</head>

<body>
<div class="container">
  <h2>	<center>Venosa Inventory<center></h2>
		<div>
		<center><button type="button" class="btn btn-success btn-lg" onClick="window.location.href='inventoryadd.php'">Add</button>
		<button type="button" class="btn btn-danger btn-lg" onClick="window.location.href='inventorysubtract.php'">Remove</button></center>
		</div>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Location ID</th>
		<th>Material</th>
		<th>Quantity</th>
		<th>Adj.</th>
      </tr>
    </thead>
    <tbody>

<?php
	require('connect.php');

	$statusquery = mysqli_query($connection, "	SELECT b.MaterialID, a.LocationID, a.LocAbbrev, b.Description, SUM(b.Quantity) AS OnHandQty, b.Units
												FROM locations a
												LEFT JOIN materials b
												ON a.LocationID = b.LocationID
												WHERE 1
												GROUP BY a.LocationID, a.LocAbbrev, b.Description
												ORDER BY a.LocationID ASC");

	while ($result = mysqli_fetch_array($statusquery, MYSQLI_ASSOC)){
		
		$locationid = $result['LocationID'];
		$locabbrev = $result['LocAbbrev'];
		$description = $result['Description'];
		$quantity = $result['OnHandQty'];
		$units = $result['Units'];
		$materialid = $result['MaterialID'];
	
		echo '<tr>';
		echo '<td>'.$locabbrev.'</td><td>'.$description.'</td><td>'.$quantity . ' ' . $units . '</td>';
		echo '<td>';
		
		
		?> 
		
		<button type="button" id="addbtn" class="btn btn-success lg" onClick="window.location.href='<?php echo 'inventoryadd.php?materialid=' . $materialid ?> '"> + </button> 
		<button type="button" id="delbtn" class="btn btn-danger lg" onClick="window.location.href='<?php echo 'inventorysubtract.php?materialid=' . $materialid ?> '"> - </button> 
		
		<?php
		echo '</td>';
		echo '</tr>';
	}

?>
    </tbody>
  </table>
</div>
			
</body>