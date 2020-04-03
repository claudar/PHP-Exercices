<?php $title = 'Fichiers'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>

<p class="txt"> Exemple 1</p>

<p class="cod">
<?php

// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier

$myVar = "Bonjour le monde";



// Ouverture en écriture seule

$fp = fopen("essai.txt", "a");



// Ecriture du contenu ($myVar)

fputs($fp, $myVar);



// Fermeture du fichier

fclose($fp);
 ?>
</p>

<pre>
    <code>
        &lt;?php

        // On d&amp;eacute;clare une variable dont la valeur (contenu) sera &amp;eacute;crite dans le fichier

        $myVar = "Bonjour le monde";



        // Ouverture en &amp;eacute;criture seule

        $fp = fopen("essai.txt", "a");



        // Ecriture du contenu ($myVar)

        fputs($fp, $myVar);



        // Fermeture du fichier

        fclose($fp);
         ?&gt;
    </code>
</pre>

<p class= "txt"> Exemple 2</p>
<p class="cod">

<?php

// Ouverture en lecture seule

$fp = fopen("essai.txt", "r");



// Boucle jusqu'à la fin du fichier

while (!feof($fp))

{

// Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne

$ligne = fgets($fp, 17); // le nombre 17 represente le nombre de caractere avant d'aller a la ligne

echo $ligne."<br>";

}
?>
</p>

<h3>Excercice Exemple</h3>

<p class = "txt"> Compteur de texte en php</p>
<p class= "cod">
    <?php
// On ouvre le fichier moncompteur.txt
$fichier = fopen("moncompteur.txt","r+");
// on lit le nombre indiqué dans ce fichier dans la variable

$visiteurs = fgets($fichier,255);
// on ajoute 1 au nombre de visiteurs

$visiteurs++;
// on se positionne au début du fichier

fseek($fichier,0);
// on écrit le nouveau nombre dans le fichier

fputs($fichier,$visiteurs);
// on referme le fichier moncompteur.txt

fclose($fichier);
// on indique sur la page le nombre de visiteurs

print("$visiteurs personnes sont passées par ici");
?>

</p>

<pre>
    <code>
        &lt;?php
         // On ouvre le fichier moncompteur.txt
         $fichier = fopen("moncompteur.txt","r+");
         // on lit le nombre indiqu&eacute; dans ce fichier dans la variable

         $visiteurs = fgets($fichier,255);
         // on ajoute 1 au nombre de visiteurs

         $visiteurs++;
         // on se positionne au d&eacute;but du fichier

         fseek($fichier,0);
         // on &eacute;crit le nouveau nombre dans le fichier

         fputs($fichier,$visiteurs);
         // on referme le fichier moncompteur.txt

         fclose($fichier);
         // on indique sur la page le nombre de visiteurs

         print("$visiteurs personnes sont pass&eacute;es par ici");
         ?&gt;

         &lt;/p&gt;

    </code>
</pre>


<p class="cod">


<?php
$dir    = '~/MAMP/htdocs/';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>

</p>

<h3> Excercice 1 </h3>

<p class="txt">écrire un programme qui lit ce fichier pour construire une page web contenant une liste de liens hypertextes.</p>

<p class="cod">
    <?php
// je declare la variable openfile pour ouvrir le fichier avec fopen
    $openFile = fopen('ListeLiens.txt', 'r');

    //Boucle qui permet la lecture du fichier tant qu'on est pas à la fin du fichier ( feof test la fin du fichier )
    while (!feof($openFile)) {
        // pour lire les lignes j'utilise fgets qui va récupérer la ligne courante sur laquelle se trouve le pointeur du fichier)
        $line = fgets($openFile, 4096);
        // formatage de l'affichage en h
        ?>
       <a href="<?= $line ?>"><?= $line ?><br><br>
    <?php

    }
    ?>

</p>
<pre>
    <code>
&lt;?php
// je declare la variable openfile pour ouvrir le fichier avec fopen
 $openFile = fopen('ListeLiens.txt', 'r');

 //Boucle qui permet la lecture du fichier tant qu'on est pas &agrave; la fin du fichier ( feof test la fin du fichier )
 while (!feof($openFile)) {
 // pour lire les lignes j'utilise fgets qui va r&eacute;cup&eacute;rer la ligne courante sur laquelle se trouve le pointeur du fichier)
 $line = fgets($openFile, 4096);
 // formatage de l'affichage en h
 ?&gt;
 &lt;a href="&lt;?= $line ?&gt;"&gt;&lt;?= $line ?&gt;&lt;br&gt;&lt;br&gt;
 &lt;?php

 }
 ?&gt;
    </code>
</pre>
<!------------------------------------------------------------->
<h3> upload </h3>

<P class="txt"> test upload </p>

<form action="test.php" enctype="multipart/form-data" method="post">
        <label for="file">Sélectionnez un ficher</label>
        <input type="file" class="uk-input" name="file" id="file" placeholder="Sélectionnez ...">
        <input type="submit" class="waves-effect waves-light btn" name="submit" id="submit" value="Envoyer">
</form>


<?php Close(); ?>
