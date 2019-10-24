  <script type="text/javascript">
      function natrag() {

        location.href="kontakt.html";
      }
    </script>


<?php

$name = $_POST['ime'];
$lastname = $_POST['prezime'];
$email = $_POST['email'];
$message = $_POST['poruka'];


$email_from = "Email od: $name";
$email_subject = "Kontakt poruka.";
$email_body = "Ime i prezime: $name $lastname \n E-mail adresa: $email\n\n Poruka: $message";
                           

$to = "martinlacko66@hotmail.com";
$header = "Od: $email_from \r\n";

mail($to, $email_subject, $email_body, $header);

?>

Hvala što ste nas kontaktirali.

<input type="button" value="Natrag" onclick="natrag()" />