<html>
    <body>
<?php
include "conne.php";

$email = mysqli_real_escape_string($connection, $_POST['uname']);
$password = mysqli_real_escape_string($connection, $_POST['pass']);
echo $email;
echo $password;
//$query = "SELECT email, password FROM form WHERE email = '$email'";
//$result = mysqli_query($connection, $query);

//if ($result && mysqli_num_rows($result) > 0) {
   // $row = mysqli_fetch_assoc($result);
    //$storedPassword = $row['password'];

    //if (password_verify($password, $storedPassword)) {
      //  header("Location: card.html");
        //exit();
   // }
//}
?>
//<script>
  //  alert("go to signin form");
    //window.location.href="index.html";

    //</script>



</body>
</html>

