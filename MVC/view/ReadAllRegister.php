<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tous les user</title>
</head>
<body>
    <?php foreach($register as $registers): ?>
        <ul>
            <li><?= $registers["lastname"]?></li>
            <li><?= $registers["firstname"]?></li>
            <li><?= $registers["mail"]?></li>
            <li><?= $registers["birthday"]?></li>
            <li><?= $registers["password"]?></li>
        </ul>
        <a href="../controller/router.php?route=read&id_register=<?=$registers["id_register"]?>">Voir details</a>
        <a href="../controller/router.php?route=delete&id_register=<?=$registers["id_register"]?>">supprimer</a>
        <a href="../controller/router.php?route=formUpdate&id_register=<?=$registers["id_register"]?>">modifier</a>
    <?php endforeach;?>
</body>
</html>