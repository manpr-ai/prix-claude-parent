<?php
require_once "../inc/head.php";
?>
<body>
<?php
require_once "../inc/header.php";
?>
<main>
    <div class="container-fluid py-4" >
        <div class="container container-form py-3">
        <form class="row g-3 formulaire p-3" name="inscription" id="inscription" method="POST" action="/prix-claude-parent/php/validation-inscr.php">
                <div class="col-12">
                    <h2 class="text-center">Formulaire d'inscription</h2>
                </div>
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <div class="input-container">
                        <input type="text" id="nom" name="nom" class="form-control"
                        pattern="^[a-zA-Z]+$"
                        required
                        maxlength="20">
                        <small class="text-danger" id="nom-validation"></small>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prenom</label>
                    <div class="input-container">
                        <input type="text" id="prenom" name="prenom" class="form-control"
                        pattern="^[a-zA-Z]+$"
                        required
                        maxlength="20">
                        <small class="text-danger" id="prenom-validation"></small>

                    </div>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-container">
                        <input type="email" id="email" name="email" class="form-control"
                        required
                        maxlength="30">
                        <small class="text-danger" id="email-validation"></small>

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="motdepasse" class="form-label">Mot de passe</label>
                    <div class="input-container">
                        <input type="password" id="motdepasse" name="motdepasse" class="form-control"
                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                        required
                        maxlength="20">
                        <small class="text-danger" id="motdepasse-validation"></small>
                        <p>
                            Minuscule, majuscule, chiffre et caractères spéciaux : @, $, !, %, *, ?, ou &.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 input-container">
                    <label for="confpasse" class="form-label">Confirmation mot de passe</label>
                    <div class="">
                        <input type="password" id="confpasse" name="confpasse" class="form-control error"
                        required
                        maxlength="20">
                        <div class="text-danger" id="confpasse-validation"></div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="adresse" class="form-label">Adresse</label>
                    <div class="input-container">
                        <input type="text" id="adresse" name="adresse" class="form-control"
                        required
                        maxlength="40">
                        <small class="text-danger" id="adresse-validation"></small>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ville" class="form-label">Ville</label>
                    <div class="input-container">
                        <input type="text" id="ville" name="ville" class="form-control"
                        pattern="^[a-zA-Z]+$"
                        required
                        maxlength="20">
                        <small class="text-danger" id="ville-validation"></small>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="pays" class="form-label">Pays</label>
                    <div class="input-container">
                        <input type="text" id="pays" name="pays"class="form-control"
                        pattern="^[a-zA-Z]+$"
                        required
                        maxlength="10">
                        <small class="text-danger" id="pays-validation"></small>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="codepostal" class="form-label">Code postal</label>
                    <div class="input-container error pmd-textfield">
                        <input type="text" id="codepostal" name="codepostal" class="form-control "
                        pattern="^\d{5}$"
                        required
                        maxlength="5">
                        <small class="text-danger error is-valid" id="codepostal-validation">
                        </small>
                    </div>
                </div>
                <div class="col-3 mx-auto">
                    <input class="btn-custom btn-bleu-fonce" type="submit" value="Envoyer" name="envoyer">
                </div>
                <div class="col-md-12 mb-2">
                    <a href="/prix-claude-parent/index.php">Déjà inscrit ? <em>Connexion</em></a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
require_once "../inc/footer.php";
?>
<!-- ANCHOR script pour traitement ASYNC -->
<!-- <script src="/prix-claude-parent/js/script-formulaire-inscription.js"></script>-->




</body>
</html>
