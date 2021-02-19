<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>mera future</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets\OwlCarousel\dist\assets\owl.carousel.min.css">
  <link rel="stylesheet" href="assets\OwlCarousel\dist\assets\owl.theme.default.min.css">
  <link rel="stylesheet" href="bootstrap\font-awesome\css\font-awesome.min.css">
  <script src="alert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="alert/dist/sweetalert.css">
  <link rel="stylesheet" href="bootstrap\js\bootstrap.bundle.min.js">
  <link rel="stylesheet" href="bootstrap\js\bootstrap.bundle.js">
  

</head>


<body>



<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>









<!-- <script src="jquery.min.js"></script> -->
<script src="jquery.min.js"></script>
<script src="assets\OwlCarousel\dist\owl.carousel.min.js"></script>
<script src="assets\OwlCarousel\owl.js"></script>


<!--Script for Language-->
<script>

function set_language(){
  var language=jQuery('#language').val();
  window.location.href='http://localhost/merafuture/index.php/?language='+language;
}
</script>


<!--Script for popovers-->
<script type="text/javascript">
 $(document).ready(function(){
 $('#eventmodal').modal('show');
})
    </script>   
    
</body>
</html>


