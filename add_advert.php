<?php 
include_once "includes/add_advert_include.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic Immo - Ajouter une annonce</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Header -->
<?php include_once "includes/header.php"; ?>    

    <main>
        <section>
            <form action="#" method="POST">
                <p>
                    <div>
                        <p class="label"><label class="title" for="title">Titre de l'annonce</label></p>
                        <input type="text" name="title" id="title" placeholder="Titre de l'annonce">
                    </div>
                    <div>
                        <p class="label"><label class="description" for="description">Description</label></p>
                        <textarea type="text" class="description" name="description" id="description" cols="30" rows="3" placeholder="Description"></textarea>
                    </div>
                    <div>
                        <p class="label"><label class="zipcode" for="zipcode">Code postal</label></p>
                        <input type="number" name="zipcode" id="zipcode">
                    </div>
                    <div>
                        <p class="label"><label class="city" for="city">Ville</label></p>
                        <input type="text" class="city" name="city" id="city"></input>
                    </div>
                    <div>
                        <p class="label"><label>Type d'annonce : </label></p>
                    
                        <p class="label"><label class="sale" for="sale">Vente</label>
                        <input type="radio" id="sale" name="type" value="A vendre" checked>
                   
                        <p class="label"><label class="rent" for="rent">Location</label>
                        <input type="radio" id="rent" name="type" value="A louer">
                    </div>
                    <div>
                        <p class="label"><label class="price" for="price">Prix</label></p>
                        <input type="number" name="price" id="price">
                    </div>
                    <div>
                        <p class="label"><label class="message" for="description">Message de réservation</label></p>
                        <textarea type="text" class="message" name="message" id="message" cols="30" rows="3" placeholder="Message de réservation"></textarea>
                    </div>
                </p>
                <p class="btn-submit">
                    <input type="submit" value="Ajouter">
                </p>
            </form>
        </section>     
    </main>

    <!-- Footer -->
<?php include_once "includes/footer.php"; ?>

</body>

</html>