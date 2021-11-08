<?php require('php/function.php');?>
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
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="contact-form" role="form">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="prenom">Prenom<span class="p">*</span></label>
                            <input type="text" id="prenom" class="form-control" name="prenom" placeholder="Evr" value="<?= $prenom ;?>" >
                            <p class="comments"><?php echo $prenomError ; ?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="nom">Nom<span class="p">*</span></label>
                            <input type="text" id="nom" class="form-control" name="nom" placeholder="Sibo" value="<?= $nom ;?>" >
                            <p class="comments"><?php echo $nomError ; ?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email<span class="p">*</span></label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="exemple@example.com" value="<?= $email ;?>" > 
                            <p class="comments"><?php echo $emailError ; ?></p>                        
                        </div>

                        <div class="col-md-6">
                            <label for="tel">Tel<span class="p">*</span></label>
                            <input type="tel" id="tel" class="form-control" name="tel" id="" placeholder="+32.." value="<?= $tel ;?>" >
                            <p class="comments"><?php echo $telError ; ?></p>
                        </div>

                        <div class="col-md-12">

                            <label for="message">Message<span class="p">*</span></label>
                            <textarea name="message" id="message" class="form-control" style="height: 150px"><?= $message ;?></textarea>
                            <p class="comments"><?php echo $messageError ; ?></p>
                            <p class="p">* Ces informations sont requises</p>
                        </div>

                        <div class="col-md-12">
                        <input type="submit" class="button1" name="submit" value="Envoyer">
                        </div>

                    </div>

                    <p class="merci" style="display:<?php if($isSucces) echo 'block'; else echo'none';?>">Votre Message a été bien envoyé. Merci</p>
                    

                </form>
            </div>
        </div>

    </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>