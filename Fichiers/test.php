<?php $title = 'Fichiers'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>
<?php
var_dump($_FILES);

// si on a cliquer sur le bouton envoyer (si on a la valeur du bouton envoyé en post)
if (isset($_POST['submit'])) {
// on définis les type de fichiers acceptés
$aMimeTypes = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/tiff');
/**
 *  On extrait le type du fichier via l'extension FILE_INFO
 */
// création d'une nouvelle ressource fileinfo dans laquelle nous indiquons l'info recherchée
$finfo = finfo_open(FILEINFO_MIME_TYPE);
// on récupère le type MIME du fichier et on le stock dans une variable
$mimetype = finfo_file($finfo, $_FILES['file']['tmp_name']);

finfo_close($finfo);
//si le type de fichier est correct
if (in_array($mimetype, $aMimeTypes)) {
// récupération de l'extension du fichier et stockage dans une variable
    $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
// stockage du chemin de destintaion dans une variable
    $upload_dir = '~/MAMP/htdocs/';
// renommage du fichier, facultatif, selon le besoin
    $_FILES['file']['name'] = 1;
// indication du chemin + nom de fichier pour le déplacement
    $upload_file = $upload_dir . $_FILES['file']['name'] . '.' . $extension;
// autaorisation pour l'écriture
    chmod($_FILES['file']['tmp_name'], 0750);
//déplacement du fichier
    move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);
// message de confirmation

}
?>
<p>Upload correct</p>



<?php Close(); ?>
