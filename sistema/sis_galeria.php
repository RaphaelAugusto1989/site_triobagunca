<?php
session_start();
require "sessao_time.php"; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="../css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
//get the input and UL list
var input = document.getElementById('filesToUpload');
var list = document.getElementById('fileList');

//empty list for now...
while (list.hasChildNodes()) {
  list.removeChild(ul.firstChild);
}

//for every file...
for (var x = 0; x < input.files.length; x++) {
  //add to list
  var li = document.createElement('li');
  li.innerHTML = 'File ' + (x + 1) + ':  ' + input.files[x].name;
  list.append(li);
}
</script>
<style type="text/css">
body {
	background-color: transparent;
  font: 12px Arial,Tahoma,Helvetica,FreeSans,sans-serif;
  color: #333;
  width: 100%;
  line-height: 18px;
}
a{ text-decoration: none; color: #333}
h1{ font-size: 1.9em; margin: 10px 0}
p{ margin: 8px 0}
.wrap{
  width: 500px;
  margin: 15px auto;
  padding: 20px 25px;
  background: white;
  border: 2px solid #DBDBDB;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  overflow: hidden;
  text-align: center;
}
.status{
  /*display: none;*/
  padding: 8px 35px 8px 14px;
  margin: 20px 0;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  color: #468847;
  background-color: #dff0d8;
  border-color: #d6e9c6;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
input[type="submit"] {
  cursor:pointer;
  width:100%;
  border:none;
  background:#991D57;
  background-image:linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
  background-image:-moz-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
  background-image:-webkit-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
  color:#FFF;
  font-weight: bold;
  margin: 20px 0;
  padding: 10px;
  border-radius:5px;
}
input[type="submit"]:hover {
  background-image:linear-gradient(bottom, #9C215A 0%, #A82767 52%);
  background-image:-moz-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
  background-image:-webkit-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
  -webkit-transition:background 0.3s ease-in-out;
  -moz-transition:background 0.3s ease-in-out;
  transition:background-color 0.3s ease-in-out;
}
input[type="submit"]:active {
  box-shadow:inset 0 1px 3px rgba(0,0,0,0.5);
}
</style>

</head>

<body>
<center>
<div id="container">
<?php
  require '../processos/config.php';
  require '../processos/connection.php';
  require '../processos/database.php';


$valid_formats = array("jpg", "png", "gif", "JPG", "jpeg", "JPEG");
$max_file_size = 1920*500; //500 kb
$path = "../img/galeria/"; // Upload directory
$count = 0;


if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
  
  // Loop $_FILES to execute all files
  foreach ($_FILES['files']['name'] as $f => $name) { 
  $ext = explode(".", $name);
  $extensao = $ext[1];
  $imagem = time().uniqid(); 
  $img = "$imagem.$extensao";
  
      if ($_FILES['files']['error'][$f] == 4) {

          continue; // Skip file if any error found
      }        
      if ($_FILES['files']['error'][$f] == 0) {            
          if ($_FILES['files']['size'][$f] > $max_file_size) {
              $message[] = "O arquivo $name é muito grande!.";
              continue; // Skip large files
          }
      elseif( !in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
        $message[] = "Arquivo $name não é um formato válido";
        continue; // Skip invalid file formats
      }
          else { // No error found! Move uploaded files 
              if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$img)) {
                $count++; // Number of successfully uploaded files
              }
          }
      }
    $galeria = array ('imagem_galeria' => $img);
 
    $grava = DBCreate('galeria', $galeria);
 
    if ($grava) {
        echo "<script> alert('Cadastrado com sucesso!') </script>";
        echo "<script>location.href=('sis_galeria.php')</script>";
    }
      else {
        echo "Erro ao cadastrar, tente novamente mais tarde!";
        exit;
      }
  }
}
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
?>
<div class="wrap">
    <h1>Inserir fotos na Galeria</h1>
    
    <p>Formatos Validos (jpg, png, gif)</p>
    <br />
    <br />
    <!-- Multiple file upload html form-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
      <input type="file" name="files[]" multiple accept="image/*">
      <input type="submit" value="Upload">
    </form>
        <?php
    # error messages
    if (isset($message)) {
      foreach ($message as $msg) {
        printf("<p class='status'>%s</p></ br>\n", $msg);
      }
    }
    # success message
    if($count !=0){
      printf("<p class='status'>%d imagens enviado com sucesso!</p>\n", $count);
    }
    ?>
</div>
</center>
</div>
</body>
</html>
