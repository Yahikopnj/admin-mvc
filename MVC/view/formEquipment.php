<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="../controller/router.php?route=create" method="post">


        <div class="divForm">
            <label for="name_equipment">Nom de l'équipement</label>
            <input type="text" name="name_equipment" id="name_equipment">
        </div>

        <div class="divForm">
            <label for="type_equipment">type de l'équipement</label>
            <input type="text" name="type_equipment" id="type_equipment">
        </div>

        <div class="divForm">
            <label for="quantity">quantité</label>
            <input type="number" name="quantity" id="quantity" required>
        </div>

        <div class="divForm">
<select name="status_equipment" id="status_equipment">
    <option value="etat" disabled>Etat</option>
    <option value="neuf">Etat neuf</option>
    <option value="moyen">moyen</option>
    <option value="user">usée</option>
</select>
        </div>

        <label for="rgpd"> Je suis d'accord avec les CGV</label>
        <input type="checkbox" name="rgpd" id="rgpd" required>

        <div class="divForm">
            <input type="submit" name="submit" value="Envoyer">
        </div>



    </form>

</body>
</html>