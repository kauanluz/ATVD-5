<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATVD-5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="fundo_php">
        <form method="POST" action="">
            <label for="base_triangulo">Digite a base do triangulo:</label>
            <input type="number" id="base_triangulo" name="base_triangulo" required>
            <br>
            <label for="altura_triangulo">Digite a altura do triangulo:</label>
            <input type="number" id="altura_triangulo" name="altura_triangulo" required>
            <br>
            <br>
            <button id="corBotao" type="submit" name="calcular">Calcular</button>
            <br>
            <br>
        </form>
        
        
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset($_POST['calcular'])){
                    $base = $_POST['base_triangulo'];
                    $altura = $_POST['altura_triangulo'];

                    $areaTriangulo = ($base * $altura) / 2;
                    echo "A área do triângulo é igual a: ", $areaTriangulo, "<br>";

                    if($areaTriangulo > 100){
                        echo "A área do triângulo ultrapassa o limite de 100.";
                    }else{
                        echo "A área do triângulo está dentro do limite de 100.";
                    }
                }
            }
        ?>
    </div>

</body>
</html>