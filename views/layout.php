<?php
include_once 'helpers/functions.php';
include_once 'models/model.php';

// Header
include 'views/partials/_header.php';
?>
<main class="px-20 py-20">
    <?php 
// Titre
titleH1($title);
// Contenu
echo($content);
?>
</main>
<?php
// footer
include 'views/partials/_footer.php';
?>