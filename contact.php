<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Contact</title>
    <link href="css\style.css" rel="stylesheet" type="text/css" />
    <!--Popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--CSS & JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--icon font stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>
  
  <body>
    <!-- navbar creation / use on all pages-->
    <section>
    <?php include('menu.php'); ?>
        </section>
  
    <!-- Main Content -->
    <main>
        <div class="content">
        <div class="container">
            <p>Vous pourrez retrouver ici toutes les informations nécessaires liées au club. Pour toutes questions ou demandes particulières, n’hésitez pas à nous contacter par mail à archersdumontblanc@gmail.com ou encore via notre page facebook. </p>
</p>
    <h1>Formulaire de contact</h1>
    <form method="post">
      <label for="name">Nom & prénom</label>
      <input type="text"  name="name" placeholder="Votre nom et prénom" required>
  
      <label for="sujet">Sujet</label>
      <input type="text"  name="sujet" placeholder="L'objet de votre message" required>
  
      <label for="emailAddress">Email</label>
      <input  type="email" name="email" placeholder="Votre email" required>
  
      <label for="message">Message</label>
      <textarea  name="message" placeholder="Votre message" style="height:200px" required></textarea>
      <input type="submit" value="Envoyer">
    </form>
    <?php
    // si le formulaire a été soumis
    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via la page contact du site 
        lesarchersdumontblanc.ovh
        Nom : " .  $_POST["name"] . "
        Email : " . $_POST["email"] . "
        Message : " . $_POST["message"];

        $retour = mail("archersdumontblanc@gmail.com", $_POST["sujet"], $message, "From:contact@siteacher.fr" . "\r\n" . "Reply-to :" .  $_POST["email"]);
        if ($retour)
            echo "<p>Votre message a bien été envoyé.</p>";
    }
    ?>
  </div>
        </div>
      </main>
   
  <!-- footer use on all pages -->
  <?php include('footer.php'); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>