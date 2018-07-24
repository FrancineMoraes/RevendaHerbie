<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <h1>Consulta web service xml</h1>
    
    <h2>Veiculos da Herbie - Até R$ <?= $_POST["maximo"] ?> </h2>
    <?php 
        $maximo = htmlspecialchars($_POST["maximo"]);

        //carrega o arquivo xml e retorna um obj
        $xml = simplexml_load_file($url);

        //percorre o obj
        foreach($xml->carro as $carro){
            echo "<h3> $carro->modelo </h3>";
            echo "<h3> $carro->ano </h3>";
            echo "<h3> $carro->preco </h3>";
        }
    ?>

    <form action="consulta.php" method="post">
        <p>
            Preço Maximo:
            <input type="text" name="maximo">
        </p>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>