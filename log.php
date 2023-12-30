<html>
    <body>

<?php
include "conne.php";

$Username = $_POST['username'];
$Password = $_POST['password'];





$query="SELECT username,password from signform;";
$check = mysqli_query($connection, $query);
if (mysqli_num_rows($check)) 
{
    while ($row = mysqli_fetch_assoc($check))
    {
        
        if($row['username']==$Username)
        {
        	if($row["password"]==$Password)
            {
                echo "<script> alert('successfully login');
               window.location.href='home.html';
               </script>";
               return false;
        	}
        }
    }
}
?>


<script>
    alert("go to signin form");
    window.location.href="start.html";

    </script>

</body>
</html>

