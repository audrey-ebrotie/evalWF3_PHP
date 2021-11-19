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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header -->
    <?php include_once "includes/header.php"; ?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption d-none d-md-block">
        <h1>Le Bon Appart</h1>
        <p>Les meilleurs offres immobilières à Lille.</p>
      </div>
    </div>
            <div class="carousel-item">
                <img src="images/image2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
   

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>