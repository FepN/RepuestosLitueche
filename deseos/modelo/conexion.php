<?php
require("validador.php");
class conexion{

	private $conexion; 
	private $server = "localhost"; 
	private $usuario = "root"; 
	private $pass = "";
	private $db = "repuestosbd"; 
	private $user ; 
	private $password;
	
	


	public function __construct(){

		$this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);

		if($this->conexion->connect_errno){

			die("Fallo al tratar de conectar con MySQL: (". $this->conexion->connect_errno.")");


		}
	}

	public function cerrar(){

		$this->conexion->close();

	}
	

	public function login($usuario, $pass){
	 

		$this->user = $usuario;
		$this->password = $pass;

		$query = "select rut, nombres, apellidos, correo, pass,nivel from clientes where correo = '".$this->user."' and pass = '".$this->password."'";

		$consulta = $this->conexion->query($query);


	$row = mysqli_fetch_array($consulta);


		if($row['nivel'] == 'A' ){ //Administrador

			session_start(); 
            $_SESSION['nombres'] = $row['nombres'];
			$_SESSION['validacion'] = 1 ; 

			echo "/gestion/vistas/starter.php"; //Respuesta Mensaje donde redireccionara
			}else if($row['nivel'] == 'U' ){ //Usuario

			session_start(); 
			$_SESSION['validacion'] = 2 ;
			$_SESSION['email'] = $row['correo'];
			$_SESSION['nombres'] = $row['nombres'];

			echo "/gestion/Eshopper/home.php"; //Respuesta Mensaje donde redireccionara
			}else{
				session_start(); 
             $_SESSION['validacion'] = 0 ;
			echo "1"; 
		}

		









	}


    function registrar_usuario($cedula, $nombre, $apellido, $usuario, $pass1, $pass2,$telef){
      $rutv= new Rut(); 
	   $vl = 0;
	    if (!(Rut::parse($cedula)->validate())){
		    $vl=1;
			}
		
        
        if($pass1 == $pass2){
            $validacion_pass = true;
        }else{
            $validacion_pass= false;
        }
    
        
        if($validacion_pass){
            
            $consult = $this->conexion->query("select correo,rut from clientes where correo = '".$usuario."' or rut = '".$cedula."'" );
            
            if(mysqli_num_rows($consult)> 0 || $vl ==1){
                echo '2';
            }else{
				$format = Rut::parse($cedula)->format(Rut::FORMAT_WITH_DASH);
                $this->conexion->query("insert into clientes values('".$format."',MD5('".$pass1."'),'".$nombre."','".$apellido."','".$usuario."',".$telef.",'U')");  
                session_start();
                $_SESSION['validacion'] = 2 ; 
				$_SESSION['nombres'] = $nombre ; 
				$_SESSION['email'] = $usuario ; 
                echo "/gestion/Eshopper/home.php";
			}
          
        }else{
            echo '2';
        }
        
    }














}









?>