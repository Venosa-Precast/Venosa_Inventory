<head>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon.png">

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script type="text/javascript">

$(document).ready(function () {
    $("#newsampleform").submit(function () {
        $("#submitbtn").attr("disabled", true);
        return true;
    });
});

</script>

<div align="center" class="logo-image" id="spacetaker">
<img src="venosa_logo.jpg" style="max-width:100%; height:auto !important;">
</div>
<title>Inventory Adjust</title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->

</head>
<body>

<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-black">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-1">
                    <div class="px-1">
					<h3>Inventory Adjust</h3>
                        <form id="newinventory" action="inventorysubmit.php" method="post" class="justify-content-center">
								<div class="form-group">
									<label class="sr-only">Material Name</label>
									<input type="text" class="form-control" placeholder="Material Name" name="materialname" id="materialname">
								</div>	
								<div class="form-group">
									<label class="sr-only">Quantity</label>
									<input type="text" class="form-control" placeholder="Quantity (bags)" name="quantity" id="quantity">
								</div>
								<div class="form-group">
									<label class="sr-only">Location</label>
									<input type="text" class="form-control" placeholder="B1R1S1" name="location" id="location">
								</div>

                            <button type="submit" id="submitbtn" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>