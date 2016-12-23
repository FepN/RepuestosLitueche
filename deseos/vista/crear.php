<html>
    <head>
        <title>Crear cuenta</title>
        <meta charset= "UTF-8">
        <link href ="../vista/css/login.css" rel ="stylesheet" type ="text/css">
        
 		
    </head>
    <body>       
    <center><h1>Registrarte Gratis</h1>
        <div class ="login">
            <form data-parsley-validate id="regform" method ="POST">
            <fieldset>
                <legend>Crear cuenta</legend> 
            <table>
                <tr>
                    <td><input title="Es necesario un rut" type="text" class ="pass" id ="cedula" placeholder="Rut" required></td>
                </tr>
                <tr>
                    <td><input title="Es necesario un nombre " required data-parsley-pattern="^[a-zA-ZñÑ\s\W]+$" type="text" class="form-control" id ="nombre" placeholder="Nombres" data-parsley-trigger="keyup"> 
                    <input title="Campo obligatorio" class="form-control" type="text" required data-parsley-pattern="^[a-zA-ZñÑ\s\W]+$" id ="apellido" placeholder="Apellidos" data-parsley-trigger="keyup"></td>
                </tr>
                <tr> 
                    <td><input id = "usuario" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Ingrese un correo valido" data-parsley-required /></td>
                </tr>
               <!-- <input title="Campo obligatorio" type ="email" id = "usuario" class ="pass" placeholder ="Correo" required>-->
                <tr>
                    <td><input title="Campo obligatorio" type ="number" id = "telef" class ="telef" placeholder ="Telefono" required max="99999999999"/></td>
                </tr>
                <tr>
                    <td><input title ="Campo obligatorio" class="pass" type ="password" id ="pass1" placeholder="Contraseña" required></td>
                </tr>
                <tr>
                    <td><input title ="Campo obligatorio" class="pass" type ="password" id ="pass2" placeholder="Verificar Contraseña" required></td>
                </tr>
              <tr>
                    <td><p id="mensaje"></p></td>
                </tr>
            </table>   
                <button type="button" id="registrar">Registrar</button>
              </fieldset>
            </form>
        </div>
        </center>
    </body>
    <script src="/gestion/js/jquery.js"></script>
<script src="/gestion/js/operaciones.js"></script>
<script src="/gestion/js/parsley.min.js"></script>
<script type="text/javascript">
  $('#regform').parsley();
</script>

</html>
