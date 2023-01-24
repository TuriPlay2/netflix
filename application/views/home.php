<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <ul>
    <?php foreach($produtos as $key => $value){ 
        
    ?>
        
        <li><?= $value["nome"] ?> <a href="index.php/home/update?id=<?= $value["id"] ?>">Editar</a> <a href="index.php/home/delete?id=<?= $value["id"] ?>">Deletar</a></li>

        
        <?php 
            } 
        ?>
        <br>
    <a href="index.php/home/insert" class="button">Criar produto</a>
   </ul>
</body>
</html>