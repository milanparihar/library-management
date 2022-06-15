<?php 
$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
$mysql_select_db(db);
if(isset($_post['username'])){
    $user=$_POST['username'];
    $password=$_POST['password'];

    $sql="select + from loginform where user= '".$user."'AND password='".$password."'limit 1";
    $result=mysql_querry($sql);

    if(mysql_num_row($result)==1){
        echo "you have successfull logged in";
        exit();
    }
    else{
        echo "you have entered incorrect password";
        exit();
    }
}
 

?>