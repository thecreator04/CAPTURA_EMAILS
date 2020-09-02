
<?php
include 'componentes/head.php';
include 'componentes/header.php'
?>
<main id="main2">
    <br>
<div id="text_inputEmail"><h1>Insira seu melhor email para que podemos compartilhar o arquivo com você...</h1></div>

<form name ="formulario1"method = "post" action="email_info.php">
  <div class="form-group">
    
    <input type="email" placeholder="insira o seu email "class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp">
   
  </div>
 
    
  <button type="submit" id="buttonEmail"class="btn btn-warning" style="margin-right:auto">confirmar</button>

  <script type="text/javascript">
                    document.getElementById("buttonEmail").onclick = function () {
                        location.href = "https://thiago-caz03.000webhostapp.com/email_info.php";
                     
                    };
            </script>
</form>

</main>

<?php
include 'componentes/footer.php';

?>