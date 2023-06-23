<!--Formulaire-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Se connecter</h1>
    <form method="get" action="Projet_Demande_Pseudo.php">
        <table>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="pseudo" id="pseudo"></td>
            </tr>
        </table>
        <button type="submit">Me connecter</button>
    </form>
</body>

</html>
<?php

// VERIFIER LE PSEUDO

if (isset($_GET['pseudo'])) {

    $pseudo = $_GET['pseudo'];

    // SI PSEUDO DIRE 'BONJOUR PSEUDO' SINON 'HELLO UNKNOW USER'

    echo ($_GET['pseudo']) ? 'Hello ' . $pseudo : 'HELLO UNKNOW USER';
}

?>