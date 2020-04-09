<?php

$con= new mysqli("localhost","root","namrata","wtsapp");

if($con->connect_error)
{
	echo("<script>alert('Error');</script>");
	
}


?>
<?php




if(isset($_POST["submit"]))


{
    
        $sl1 = $_POST["sl1"];
        $sl2 = $_POST["sl2"];
        $sl3 = $_POST["sl3"];
        $sl4 = $_POST["sl4"];
        $sl5 = $_POST["sl5"];
        $sl6 = $_POST["sl6"];
        $sl7 = $_POST["sl7"];
        $sl8 = $_POST["sl8"];
        $sl9 = $_POST["sl9"];
        $sl0 = $_POST["sl10"];
        $sl1 = $_POST["sl11"];


     
        $sql = "INSERT INTO `wtsapp` (`sl1`, `sl2`, `sl3`, `sl4`, `sl5`, `sl6`, `sl7`, `sl8`, `sl9`, `sl10`, `sl11`) VALUES (`sl1`, `sl2`, `sl3`, `sl4`, `sl5`, `sl6`, `sl7`, `sl8`, `sl9`, `sl10`, `sl11`,'0')";
        if($con->query($sql)==true)   
        {
                echo"saved";
                
        }
        else
        {
                echo("Error description: " . $con -> error);
                
        }
        
 }


?>