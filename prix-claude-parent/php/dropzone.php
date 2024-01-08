<?php
require_once "../inc/head.php";
?>
<body>
<?php
require_once "../inc/header-dash.php";
?>

<main>
    <div class="container-fluid py-4">
        <div class="container">
            <div id="dropzone" class="m-auto ">
                <input type="file" multiple>
                <p>Déposez vos document(s) ici ou cliquez sur télécharger</p>
            </div>
        </div>
    </div>
</main>
<?php
require_once "../inc/footer.php";
?>
<script src="/prix-claude-parent/js/script-dropzone.js"></script>
</body>
</html>