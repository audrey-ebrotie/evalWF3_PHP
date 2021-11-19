<?php
include_once "includes/advert_include.php";
include_once "includes/add_message_include.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic Immo - Consulter une annonce</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Header -->
    <?php include_once "includes/header.php"; ?>
    <main>
        <section>
            <article>
                <h1><?php echo htmlspecialchars($advert['title']); ?></h1>
                <p><strong>Description : </strong><?php echo htmlspecialchars($advert['description']); ?></p>
                <p><strong>Lieu : </strong><?php echo htmlspecialchars($advert['zipcode']); ?>
                    <?php echo htmlspecialchars($advert['city']); ?></p>
                <p><strong>Type d'offre : </strong><?php echo htmlspecialchars($advert['type']); ?></p>
                <p><strong>Prix : </strong><?php echo htmlspecialchars($advert['price']) . "€"; ?></p> 

                <aside>
                <form action="#" method="POST">
                <p>
                    <div>
                        <textarea type="text" class="message" name="message" id="message" cols="30" rows="3" placeholder="Message de réservation"></textarea>
                    </div>
                </p>
                <p class="btn-submit">
                    <input type="submit" value="Je réserve">
                </p>
                </form>
            </aside>

            </article>
        </section>
    </main>
    

    <!-- Footer -->
    <?php include_once "includes/footer.php"; ?>


</body>

</html>