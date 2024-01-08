<?php
require_once "../inc/head.php";
?>
<body>
<?php
require_once "../inc/header.php";
?>
<main class="container-fluid py-5" >
    <div class="container container-form py-3">
        <form class="row g-3 formulaire px-2 pb-3 form-width" name="inscription" method="post" action=""
        onsubmit="validate(); return false">
            <div class="col-12">
                <h2 class="text-center">Mot de passe oublié ?</h2>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <div class="input-container">
                    <input type="email" id="email" name="email" class="form-control" required
                    maxlength="30"
                    onblur="validate('email_field')">
                    <small class="text-danger" id="email-validation"></small>
                </div>
            </div>
            <div class="col-md-12">
                <input class="btn-custom btn-bleu-fonce w-100" type="submit" value="Réinitialiser le mot de passe">
            </div>
            <div class="col-md-12" >
                <a href="/prix-claude-parent/index.php" class="btn-custom btn-bleu-fonce w-100">Retour</a>
                
            </div>
        </form>
    </div>
</main>
<?php
require_once "../inc/footer.php";
?>
<script src="/prix-claude-parent/js/script-formulaire-inscription.js" async></script>
</body>
</html>