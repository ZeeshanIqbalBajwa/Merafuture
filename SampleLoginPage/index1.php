<?php
	session_start();
	require_once('dbconfig/config.php');
	
?>




<htmL>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
<link rel="stylesheet" href="css/style.css">

</head>


<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
	<form id=frmemployee class="card" enctype="multipart/form-data">
			<div align="center">
			<h1 align="center" style="color: blue;"> <b>Profile Form<b></h1>


			</div><br>
			<div align="center">
			<label style="font-size: 20px">Drop Your Profile Image</label>
			<input type="file" name="logo" id="logo" class="dropify" data-default-file="" required="">
						
			</div><br>
			<div align="center">
			<label>Name:</label>
			<input type="text" class="form-control" name="ename" id="ename" placeholder="Name" size="30px" required>
						
			</div>
			<br>
			<div align="center">
			<label>Eamil:</label>
			<input type="text" class="form-control" name="email" id="email" placeholder="Email" size="30px" required>
						
			</div><br>
			<div align="center">
			<label>Phone: </label>
			<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" size="30px" required>
						
			</div><br>
			<div align="center">
			<label>City  :</label>&nbsp &nbsp
			<input type="text" class="form-control" name="city" id="city" placeholder="City" size="30px" required>
						
			</div><br>
			<div align="center">
			<label>Country:</label>
			<input type="text" class="form-control" name="country" id="country" placeholder="Country" size="30px" required>
						
			</div>
			<br>
			<div class="row">
				<div id="logo" class="col=md-3">
				</div></div>
	
				<div align="center">
			<button type="submit" id="save" class="btn btn-success submitbutton"  ><b>Submit</b></button>
			<br><br>
			<div  class="inner_container">
				<a href="index.php"><button type="button" class="btn btn-success"><b>Log Out</b></a></button>

			<br><br>
			<div  class="inner_container">
				<a href="index2.php"><button type="button" class="btn btn-success" style="background-color: green"><b>Check Data_Table</b></a></button>
					
					


			</div>
						
			</div>






	</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<script >
	var dvE= $('#logo').dropify({

	});
	dvE = dvE.data('dropify')

	$('#frmemployee').submit(function(e){
		
e.preventDefault()
		var form= $('#frmemployee')[0];
		var formdata= new FormData(this);

		$.ajax({
			type: 'POST',
			url: 'add_employee.php',
			data:formdata, // you used this one in quatation ok try now other things 
			dataType : 'JSON',
			contentType: false,
			processData:false,

			success:function(data)
			{
						if(data.success)
						{
							alert('success')
						}else
						{
							alert('not success')
						}
					

			}


		});
	});



</script>
</body>




</html>