<?php
include 'componentes/head.php';
include 'componentes/header.php'

?>

<?php
 $var_email = isset($_POST["email"])?$_POST["email"]:"[O email não foi informado]";
 $var_assunto = "material auxiliar";
 $var_texto = "Abaixo, segue o Link para download da Apostila do Adobe Illustrator"."\r\n"."\r\n"."\r\n"."https://drive.google.com/file/d/1KE5IbD6DfNxouBRE6cov8WpvzPhhZiF6/view?usp=sharing";
 
 // O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: thiago-caz03.000webhostapp.com\r\n"; // remetente
$headers .= "Return-Path: thiago-caz03.000webhostapp.com\r\n"; // return-path
$envio = mail("$var_email", "$var_assunto", "$var_texto", $headers);



$dados = $var_email."\r\n";
$registrados = "arquivoUsers.txt";
                    
//variável que simboliza que o arquivo esta aberto
$open_file = fopen($registrados,'a');
//função para escrever o resultado da variavel dados no documento dos registrados.
fwrite($open_file,$dados);
//função para fechar o documento aberto.
fclose($open_file);

    // variável que importa os dados do arquivo .txt
 $importando = file('./arquivoUsers.txt');



?>
<main id="main2">
    <br>
     <br>
        <h1> E-mail direcionado</h1>

       
        
<?php
if($envio)
 echo "<div class='texto_email'> $var_email,verifique sua caixa de entrada</div>";
else
 echo "falha no envio do email, recarregue a página e tente inserir seu email novamente";

?>

<div id="gif"><img src="img/gif2.gif"  style="width:40%"/></div>

</main>

<?php
include 'componentes/footer.php';

?>