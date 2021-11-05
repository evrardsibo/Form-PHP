<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,100;1,300&display=swap" rel="stylesheet">
    <title>Formulaire</title>
</head>
<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h3>Contactez-moi</h3> 
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form action="" method="post" id="contact-form" role="form">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Evr">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Sibo">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="exemple@example.com">
                    <label for="tel">Tel</label>
                    <input type="tel" class="form-control" name="tel" id="" placeholder="+32..">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                    <p class="p">* Ces informations sont requises</p>
                    <input type="button" class="btn btn-warning btn-block" name="submit" value="Envoyer">
                    

                </form>
            </div>
        </div>

    </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>