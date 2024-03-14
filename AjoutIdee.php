<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Formulaire d'ajout de manifestation</title>
</head>
<body>

    <section class="contact-form">
        <h2>Formulaire d'ajout de manifestation</h2>
        <form action="AjoutIdee.php" method="POST">
            <div>
                <label for="mail_i">Mail :</label>
                <input type="text" id="mail_i" name="mail_i" required>
            </div>
            <div>
                <label for="nom_i">Nom :</label>
                <input type="text" id="nom_i" name="nom_i" required>
            </div>
           
            <div>
                <label for="description_i">Description :</label>
                <input type="text" id="description_i" name="description_i" required>
            </div>

            <div>
                <label for="image_i">URL de l'image :</label>
                <input type="text" id="image_i" name="image_i" required>
           </div>
           
            <button type="submit" name="action" value="recupere">Envoyer</button>
        </form>
    </section>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        
        $nom_i = $_POST['nom_i'];
        $description_i = $_POST['description_i'];
        $image_i = $_POST['image_i'];    
        $mail_i = $_POST['mail_i'];

        
        $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'triplek', 'K3m@j0uK3rry');

       
        $sauvegarde = $bdd->prepare("CALL AjouterIdee(:nom_i, :description_i, :image_i, :mail_i)");
        $sauvegarde->bindParam(':nom_i', $nom_i);
        $sauvegarde->bindParam(':description_i', $description_i);
        $sauvegarde->bindParam(':image_i', $image_i);
        $sauvegarde->bindParam(':mail_i', $mail_i);
        $sauvegarde->execute();
        echo "La manifestation a été ajoutée avec succès.";
        
    }
    ?>
   
</body>
</html>