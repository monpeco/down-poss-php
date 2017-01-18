<?
if(isset($_FILES)) {    print_r($_FILES);}

$nombre_fichero = "/home/amontilla/Descargas/ENERO.txt";
$fichero = fopen($nombre_fichero,"rb");
while ( ($linea = fgets($fichero)) !== false) 
    {
        echo $linea;
        echo "<p>";
        // separamos cada dato nombre, apellido, anio o los que tengas
        $datos = explode(",", $linea);

        for ($i = 0; $i < count($datos); $i++)
        {
        echo $datos[$i]."<br/>"; // mostramos cada datos por línea
        }
        echo "<p>";
    }
fclose($fichero);


?>
<html>
    <header>
        <title>POSS</title>
        <h1>POSS</h1>
    </header>
    <body>
        <h2> Conciliacion depositos bancarios </h2>
        <?php //echo '<script>alert("enviado")</script>'; ?>
        <form method="post" action="" enctype="multipart/form-data"> 
            <input type="hidden" id="MAX_FILE_SIZE" name="nombre" value="1000000"> Cargar archivo txt bancario:
            <em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em><br /> 
            <input type="file" name="form_data"  size="40">    
            <p><input name="" type="submit" id="" value="Enviar"> </p>
            
  
        </form>  
    </body>
</html>
