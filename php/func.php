<?php 
 function load_marca()  
 {  
      $connect = mysqli_connect("localhost", "root", "", "repuestosbd");  
      $output = '';  
      $sql = "SELECT * FROM marca ORDER BY nom_marca";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option class="caret"value="'.$row["id_marca"].'">'.$row["nom_marca"].'</option>';  
		 
      } 
	  
	  return $output;  
 } 
 
 function esRut($r){
    if((!$r) or (is_array($r)))
        return false; /* Hace falta el rut */
 
    if(!$r = preg_replace('|[^0-9kK]|i', '', $r))
        return false; /* Era código basura */
 
    if(!((strlen($r) == 8) or (strlen($r) == 9)))
        return false; /* La cantidad de carácteres no es válida. */
 
    $v = strtoupper(substr($r, -1));
    if(!$r = substr($r, 0, -1))
        return false;
 
    if(!((int)$r > 0))
        return false; /* No es un valor numérico */
 
    $x = 2; $s = 0;
    for($i = (strlen($r) - 1); $i >= 0; $i--){
        if($x > 7)
            $x = 2;
        $s += ($r[$i] * $x);
        $x++;
    }
    $dv=11-($s % 11);
    if($dv == 10)
        $dv = 'K';
    if($dv == 11)
        $dv = '0';
    if($dv == $v)
        return number_format($r, 0, '', '.').'-'.$v; /* Formatea el RUT */
    return false;
}
  
  function arra($s,$id_rep){
	 if (isset($s)) { 
	  if ($s == "agregar"){	  
	  $_SESSION['ids'][]=$registro2['id_rep'];
	  }}else if ($s == "eliminar"){
		$_SESSION['ids'][]=$registro2['id_rep'];
	  }
	  return false;
	  
  }
  
  
 ?> 