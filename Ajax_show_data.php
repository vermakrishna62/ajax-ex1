<!DOCTYPE html>
<html>
<head>
	<title>AJAX Show Record</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery_cdn.js"></script>
</head>
<body>
<div class="container">

	<div class="row">
		<div class="col bg-dark text-light">
			<h2 class="text-center m-2">ALL RECORDS</h2>
		</div>
	</div>

	<div class="row">
		<div class="col bg-primary">
			<center>
				<input style="font-size: 20px; letter-spacing: 2px;" type="button" class="btn btn-success m-2 " value="Load data" id="load_data">
			</center>
		</div>
	</div>

	<div class="row" >
		<div class="col bg-secondary">
			<table id="table_data" class="table table-bordered table-hover mt-3 table-sm">
			</table>
		</div>
	</div>

</div>

	
<script type="text/javascript">
	$(document).ready(function (){

		$('#load_data').on("click",function (e)
		{
			$.ajax
			({

				url : 'ajax_load_table.php',
				type : "POST",
				success : function(data)
				{
					$("#table_data").html(data);
				}

			});
		});
	});
</script>

</body>
</html>