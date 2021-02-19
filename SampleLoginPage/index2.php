<?php
$db=mysqli_connect("localhost","root","","samplelogindb");
$query=mysqli_query($db, "SELECT * FROM employee");


?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<link rel="stylesheet"  href="css/bootstrap.min.css">
<link rel="stylesheet"  href="css/datatable.bootstrap.min.css">



</head>

<body>
<div class="container" style="margin-top: 40px">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>

            
                <th>photo</th>
                <th>name</th>
                <th>email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>photo</th>
                <th>name</th>
                <th>email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Country</th>
            </tr>
        </tfoot>
        <tbody>
            <?php while ($r = mysqli_fetch_object($query)): ?>

                <tr>
                    <td><?php echo $r->photo?></td>
                     <td><?php echo $r->name?></td>
                      <td><?php echo $r->email?></td>
                       <td><?php echo $r->phone?></td> 
                       <td><?php echo $r->city?></td> 
                       <td><?php echo $r->country?></td>


                </tr>
            <?php  endwhile;?>
            
        </tbody>

       </table>
        <div align="center">
    <a href="insert.php"></a> <button type="button" name="add" id="add" class="btn btn-info">Add</button></a>
    </div>
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped">
            <tr>
   </div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="datatable.jquery.min.js"></script>
<script type="text/javascript" src="datatable.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>





<script type="text/javascript" language="javascript" >
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
    html += '<td contenteditable id="data2"></td>';
     html += '<td contenteditable id="data2"></td>';
      html += '<td contenteditable id="data2"></td>';
       html += '<td contenteditable id="data2"></td>';
        html += '<td contenteditable id="data2"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var photo = $('#data1').text();
   var name = $('#data2').text();
    var email = $('#data3').text();
   var phone = $('#data4').text();
    var city = $('#data5').text();
   var country = $('#data6').text();
   if(photo != '' && name != '' && email != '' && phone != '' && city != '' && country != '' )
   {
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{photo:photo, name:name, email:email, phone:phone, city:city,country:country},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });
  
  
</script>

</body>
</html>