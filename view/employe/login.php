<?php include 'templates/header.php'; ?>
<body>
<article>
<a href="?ctrl=employe">Retour</a>
<form method="post" action="?ctrl=employe&mth=connection">
<div class="container" id="log">
    <div class="row">
        <div class="col-lg-4">
            <label for="mail">Adresse Mail</label>
            <input type="mail" name="mail" id="mail">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass" id="pass">
        </div>
    </div>
    <div class="row">
        <input type="submit" name="submit" value="Connexion">
    </div>
</div>
</form>

<? include 'templates/footer.php' ?>
</article>
</body>
</html>