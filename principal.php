<!DOCTYPE html>
<html>
    <head>
        <title>Vestibulando</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./principal.css" rel="stylesheet">
        <?php session_start()?>
    </head>

    <body>
        <menu id="main-nav">    
        <div id="nav">
            <a href="index.html"><img src="imagens/logo.png" id="logo"/></a>
            <a href="perfil.php" class="perfil"><?php echo $_SESSION['email']?></a>
        </div>
    </menu>
  
        
        
        
<ul id="vertical"> 
    <li><a href="#">CONTEÚDOS</a>
        <ul> 
                <li><a href="cont_bio.html">BIOLOGIA</a></li> 
                <li><a href="cont_.html">QUÍMICA</a></li> 
                <li><a href="cont_fis.html">FÍSICA</a></li> 
                <li><a href="cont_mat.html">MATEMÁTICA</a></li> 
                <li><a href="cont_geo.html">GEOGRAFIA</a></li>
                <li><a href="cont_his.html">HISTÓRIA</a></li> 
                <li><a href="cont_por.html">PORTUGUÊS</a></li> 
                <li><a href="cont_ing.html">INGLÊS</a></li> 
                <li><a href="cont_esp.html">ESPANHOL</a></li> 
                <li><a href="cont_fs.html">FILOSOFIA e SOCIOLOGIA</a></li> 
        </ul>
    </li> 
    <li><a href="#">EXERCÍCIOS</a>
        <ul> 
                <li><a href="exerc_bio.html">BIOLOGIA</a></li> 
                <li><a href="#">QUÍMICA</a></li> 
                <li><a href="#">FÍSICA</a></li> 
                <li><a href="#">MATEMÁTICA</a></li> 
                <li><a href="#">GEOGRAFIA</a></li>
                <li><a href="#">HISTÓRIA</a></li> 
                <li><a href="#">PORTUGUÊS</a></li> 
                <li><a href="#">INGLÊS</a></li> 
                <li><a href="#">ESPANHOL</a></li> 
                <li><a href="#">FILOSOFIA e SOCIOLOGIA</a></li> 
        </ul>
    </li> 
    <li><a href="#">REDAÇÃO</a> 
      <ul> 
        <li><a href="dica_red.html">DICAS</a></li> 
        <li><a href="temas_red.html">TEMAS</a></li>
      </ul> 
    </li>
    <li><a href="check_list.php">CHECK LIST</a></li> 
    <li><a href="dicas_estudo.html">DICAS DE ESTUDO</a></li> 
    
</ul>
      <div class="tres"></div>
      <h3> BEM-VINDO AO MUNDO DO VESTIBULAR</h3>
      
        
    </body>    
</html>