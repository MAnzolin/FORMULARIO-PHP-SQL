<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen and (min-width: 961px)" href="estilo.css"/>
    <link rel='stylesheet' type="text/css" media="screen and (max-width: 960px)" href="estilop.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/favi.ico" type="image/x-icon"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TESTE</title>
    <script src="script.js"></script>
</head>
<body onload="slide4()">
   <?php
        include_once 'db_connect.php';
    ?>
    <header>
        <div id="secao">
            <a href="" >SEÇÃO UM</a>
            <a href="">SEÇÃO DOIS</a>
            <a href="">SEÇÃO TRÊS</a>
        </div>
        <img src="imagens/logo.png" id="logo">
        <h1 id="titu">LOREN IPSUM</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</br> 
            accusantium doloremque laudantium.</p>
        <div id="btn" align="center">   
            <a href="" id="branc">LOREN IPSUM</a>
            <a href="" id="trans">LOREN IPSUM</a>
        </div>
    </header>
    <section class="carrossel">
        <img src="imagens/slide1.png" id="slide">
    </section>
    <section class="contato">
            <img src="imagens/music.png" class="contato">
            <form method="post" action="action.php" name="formulario">
                <p>CONTATO</p>
                <input type="text" name="nome" placeholder="Nome" pattern="[^0-9]+">
                <input type="tel" name="tel"  placeholder="Telefone" maxlength="9" minlength="8" pattern="[^A-Za-z]+" >
                <input type="email" name="email" placeholder="E-mail">
                <input type="search" name="assunto" list="sql" placeholder="Assunto">
                <textarea id="msg" placeholder="Mensagem" name="msg"></textarea>
                <button type="submit" onclick="return validar()">ENVIAR</button>
                <?php
                        $sql = "SELECT * FROM Assunto";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):
                ?>
                <datalist id="sql">
                    <option><?php echo $dados['assunto']; ?></option>
                        <?php endwhile;?>
			    </datalist>	  
            </form>
        </div>
    </section>
    <footer>
        <a href=""><img src="imagens/you.png" id="you"></a>
        <a href=""><img src="imagens/insta.png" id="insta"></a>
        <a href=""><img src="imagens/face.png" id="face"></a>       
    </footer>
</body>
</html>