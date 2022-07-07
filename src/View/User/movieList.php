<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="result" style="height: 500px; overflow: scroll;">
        <h2>Derniers ajouts</h2>
        <?= $result ?>
    </div>
    <form method="POST">
        <h2>Ajoutez vous même un film</h2>
        <p>Le nom de votre film</p>
        <input type="text" id="title" placeholder="Nom">
        <p>L'année de sortie</p>
        <input type="date" id="date" placeholder="date de sortie">
        <p>Le réalisateur</p>
        <input type="text" id="realisateur" placeholder="réalisateur">
        <p>Et une rapide déscription</p>
        <textarea style="width: 350px; height: 150px;" id="description"></textarea>
        <br />
        <button type="submit" style="margin-top: 3%;">Ajouter</button>
    </form>
</body>

</html>