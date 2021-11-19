<?php
include_once "includes/all_adverts_include.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Bon Appart - Consulter toutes les annnces</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header -->
    <?php include_once "includes/header.php"; ?>

    <section>
        <div class="row">
            <?php foreach($adverts as $advert) { ?>
                <article>
                        <p><strong>Titre de l'annonce : </strong><?php echo strtoupper($advert['title']) ?></p>
                        <p><strong>Lieu : </strong><?php echo $advert['zipcode'] . " " . $advert['city'] . " - "  ?> 
                            <strong>Type : </strong><?php echo $advert['type'] . " - "  ?>
                            <strong>Prix : </strong><?php echo $advert['price'] ?> €</p>  
                 <aside>  
                    <a href="advert.php?id=<?php echo $advert['id']; ?>" class="btn-submit">
                    <input type="submit" value="Consulter l'annonce"></a>
                </aside> 
                </article>
            <?php } ?>         
        </div>            
    </section>

    <!-- Footer -->
    <?php include_once "includes/footer.php"; ?>


</body>
<script src="js/index.js"></script>
</html>