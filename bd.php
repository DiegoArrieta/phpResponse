
<?php
function OpenCon()
{
    $servername = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "uqiu9aj1u97yhlc2";
    $password = "pieho2sbx0bmh0rv";

    // Create connection
    $conn = new mysqli($servername, $username, $password)or die("Connect failed: %s\n". $conn -> error);
 
    return $conn;
    }
    
   function CloseCon($conn)
    {
    $conn -> close();
    }
   
?>