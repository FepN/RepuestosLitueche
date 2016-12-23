<?php

 require_once 'Dbconfig.Php';

 if($_POST)
 {
  $rut = $_POST['rut'];
  $user_name = $_POST['user_name'];
  $apellidos = $_POST['ape'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['password'];
  $joining_date =date('Y-m-d H:i:s');
  
  try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM clientes WHERE correo=:email");
   $stmt->execute(array(":email"=>$user_email));
   $count = $stmt->rowCount();
   
   if($count==0){
    
   $stmt = $db_con->prepare("INSERT INTO clientes(rut,pass,nombres,apellidos,correo) VALUES(:rut, :pass,:uname,:apellidos, :email)");
   $stmt->bindParam(":rut",$rut);
   $stmt->bindParam(":pass",$user_password);
   $stmt->bindParam(":uname",$user_name);
   $stmt->bindParam(":apellidos",$apellidos);
   $stmt->bindParam(":email",$user_email);
   
  // $stmt->bindParam(":jdate",$joining_date);
     
    if($stmt->execute())
    {
     echo "registered";
    }
    else
    {
     echo "Query could not execute !";
    }
   
   }
   else{
    
    echo "1"; //  not available
   }
    
  }
  catch(PDOException $e){
       echo $e->getMessage();
  }
 }

?>