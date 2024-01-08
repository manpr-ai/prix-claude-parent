<?php
require_once "inc/head.php";
?>
<body>
<?php
require_once "inc/header.php";
?>

<main class="container-fluid py-5" >
    <div class="container container-form py-3">
        <form class="row g-3 formulaire px-2 pb-3 form-width" name="inscription" method="post" action=""
        onsubmit="validate(); return false">
            <div class="col-md-12">
                <h2 class="text-center">Se connecter</h2>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <div class="input-container">
                    <input type="email" id="email" name="email" class="form-control" required
                    onblur="validate('email_field')">
                    <small class="text-danger" id="email-validation"></small>
                </div>
            </div>
            <div class="col-md-12">
                <label for="motdepasse" class="form-label">Mot de passe</label>
                <div class="input-container">
                    <input type="password" id="motdepasse" name="motdepasse" class="form-control"
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                    required
                    maxlength="30"
                    onblur="validate('motdepasse_field')">
                    <small class="text-danger" id="motdepasse-validation"></small>
                    <p>
                        Minuscule, majuscule, chiffre et caractères spéciaux : @, $, !, %, *, ?, ou &
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                    <a href="/prix-claude-parent/php/form-mp.php">Mot de passe oublié?</a>
                </div>
            <div class="col-md-12">
                <input class="btn-custom btn-bleu-fonce w-100" type="submit" value="Envoyer">
            </div>
            <div class="">
                <a href="/prix-claude-parent/php/form-inscrip.php">Vous n'avez pas de compte? <em>Inscription</em></a>
            </div>
        </form>
    </div>
</main>
<?php
require_once "inc/footer.php";
?>
<script src="/prix-claude-parent/js/script-formulaire-inscription.js" async></script>
</body>
</html>


