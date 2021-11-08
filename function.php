<?php
        $prenom = $nom = $email = $tel = $message = "";
        $prenomError = $nomError = $emailError = $telError = $messageError = "";
        $isSucces = false;
        $emailto = 'sibo82@gmail.com';

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $prenom = vaidate($_POST['prenom']);
            $nom = vaidate($_POST['nom']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $email = vaidate($_POST['email']);
            $tel = vaidate($_POST['tel']);
            $message = vaidate($_POST['message']);
            $isSucces = true;
            $emailtext='';

            if(empty($prenom))
            {
                $prenomError = 'Votre prenom svp'; 
                $isSucces = false;
            }else
            {
                $emailtext.="Your firstname is : $prenom \n";
            }
            if(empty($nom))
            {
                $nomError = 'Votre nom svp'; 
                $isSucces = false;
            }else
            {
                $emailtext.="Your name is : $nom \n";
            }
            if(!isValid($email))
            {
                $emailError = 'Votre email n\'est pas validé'; 
                $isSucces = false;
            }else
            {
                $emailtext.="Your email is : $email \n";
            }
            if(!isPhone($tel))
            {
                $telError = 'Votre tel svp';
                $isSucces = false; 
            }else
            {
                $emailtext.="Your tel is : $tel \n";
            }

            if(empty($message))
            {
                $messageError = 'Votre message svp'; 
                $isSucces = false;
            }else
            {
                $emailtext.="Your message is : $message \n";
            }

            if($isSucces)
            {
                $headers = "From: $prenom $nom <$email>\r\nRepley-To:$email";
                mail($emailto, 'Merci pour votre message', $emailtext, $headers);
                $prenom = $nom = $email = $tel = $message = "";
            }

        }
        function isPhone($data)
        {
            return preg_match("/^[0-9 ]+$/", $data);
        }

        function isValid($data)
        {
            return filter_var($data, FILTER_VALIDATE_EMAIL);
        }

        function vaidate($data){

            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);

            return $data;
        }
?>