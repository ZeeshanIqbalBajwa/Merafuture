<?php
/*For My LocalPC*/
$con = mysqli_connect ("localhost", "root", "") or die ('Unable to connect');
mysqli_select_db ($con,'quizdbase');




	if (isset($_POST['submit'])){
		if(!empty($_POST['quizcheck'])){
			$count=count($_POST['quizcheck']);
			echo "out of 5 you have selected " . $count ."   options";


			$result=0;
			$i=1;
			$selected=$_POST['quizcheck'];
			$q= "select * from questions";
			$query= mysqli_query($con, $q);
			while($rows= mysqli_fetch_array($query)){
				$checked=$rows['ans_id']==$selected[$i];
				if($checked){

					$result++;
				}

				$i++;
			}
	
				echo "<br>
				<br>Your total score is " . $result . " out of 5";
		}






	}
?>






<div class="m-auto d-block">
<a href="../index.php" class="btn btn-primary m-auto d-block">Back to Portal</a>

</div>


