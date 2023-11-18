<?php 
include("config.php");

if(isset($_POST['save_myForm']))
{
	$id = mysqli_real_escape_string($db, $_POST['id']);
    if ($id>0){
        $query2 = "SELECT * FROM approval WHERE id=$id;";
         $query_run2 = mysqli_query($db, $query2);
         if (mysqli_num_rows($query_run2) > 0) {
            foreach ($query_run2 as $student2) {
                
                $name = $student2['name'];
                $staffName = $student2['staffName'];
                $headcount = $student2['headcount'];
                $inTime = date("h:i A", strtotime($student2['inTime']));
    }
}
    }
}