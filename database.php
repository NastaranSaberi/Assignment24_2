<?php

$connection = mysqli_connect("localhost", "root", "root", "phonebook");
mysqli_query($connection, "SET CHARACTER SET utf8");


if(mysqli_connect_errno() == 0){
   // print("ok");
}
else{
    
    print("Error");
    print(mysqli_connect_error());
}

?>