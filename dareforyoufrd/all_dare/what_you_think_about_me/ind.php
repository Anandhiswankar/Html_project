<?php
session_start();

include("config.php");

$con= new mysqli(server,username,password,database);

if($con->connect_error)
{
	echo("<script>alert('Error');</script>");
	
}


?>
<?php




if(isset($_POST["submit"]))


{
        $creater_name =$_SESSION["creater_name"];
        $q1 = $_POST["sl1"];
        $q2 = $_POST["sl2"];
        $q3 = $_POST["sl3"];
        $q4 = $_POST["sl4"];
        $q5 = $_POST["sl5"];
        $q6 = $_POST["sl6"];
        $q7 = $_POST["sl7"];
        $q8 = $_POST["sl8"];
        $q9 = $_POST["sl9"];
        $q10 = $_POST["sl10"];
   


     
       // $sql = "INSERT INTO chlone (sl1,sl2,sl3,sl4,sl5, sl6, sl7, sl8, sl9, sl10) VALUES ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10)";
       
       $sql = "INSERT INTO chlone (code,sl1,sl2,sl3,sl4,sl5, sl6, sl7, sl8, sl9, sl10) VALUES ('$creater_name','$q1', '$q2', '$q3', '$q4', '$q5','$q6', '$q7', '$q8', '$q9', '$q10')";
       
       if($con->query($sql)==true)   
        { 
              

?>
                <script>
                         window.location.href="thanks.html";
                </script>
        <?php
                
        }
        else
        {
                echo("Error description: " . $con -> error);
                
        }
        
 }


?>