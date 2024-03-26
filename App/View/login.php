<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINFO LOGIN - CONSULTA PATRIMONIO</title>
    <link rel="stylesheet" href="../../Assets/css/paginaInicial.css">
    <link rel="stylesheet" href="../../Assets/css/paginaInicialMQ.css">
</head>
<body>
    <section class="login" id="login">
        <h1><span class="amarelo">D</span><span class="vermelho">I</span><span class="verde">N</span><span class="amarelo">F</span><span class="vermelho">O</span></h1>
        <div class="barra"></div>
        <form action="../Controller/usuario/logar.php">
            <input type="password" name="senha" id="senha" placeholder="Informe a senha">
            <div class="button">
                <button type="submit" class="logar" id="logar">Entrar</button>
                <button type="submit" class="visitante" id="visitante">Entrar como visitante</button>
            </div>
        </form>
    </section>

</body>
</html>