
<!-- $title correspond au titre de ta page dans le <head> et en titre de page (balise h1) -->
<?php $title = 'DATES'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>

<!--
    Tu n'as pas besoins de créer un document html, je le génére déjà.
    En chargeant les liens, tu as déja <html>, <head>, <header>, <body> et <footer>

-->


<!--
    Pour respecter les régles d'accessibilité et de référencement,
    je te déclare déjà des balises h1 et h2 dans les liens.
    Il faut placer tes titres entre balises h3 (Ca générera un menu dynamique).
-->
<h3>Excercice 1</h3>

<!--
    Toujours pour le référencement, tu mettras tes éléments dans des balises <p> avec des classes.
    Tu as <p class="txt"> et <p class="cod">
-->

<p class="txt">Affichez la date du jour au format mardi 2 juillet 2019.</p>

<p class="cod">

<?php

$date = new DateTime();

// récupératin des valeurs de la date courante
$dayName = $date->format('j'); //=> récupération du numéro du jour de la semaine (1 => lundi, ...., 7 => dimanche)
$dayNumber = $date->format('N'); // => récupération du numéro du jour dans le mois
$year = $date->format('Y'); // récupération de l'année
$monthName = $date->format('n'); // => // Numéro du mois, sans 0 initial
// tableau des jours, première valeur vide
$dayList = ['', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
// Attention, 1 à 12, donc un vide au début pour la position 0
$monthList = ['', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
?>

 <!-- affichage du résultat en HTML -->
Aujourd'hui nous sommes le <?= $dayList[$dayNumber] . " " . $dayName . " " . $monthList[$monthName] . " " . $year ?>

</p>
<p class="txt"> deuxieme methode </p>

        <p class="cod">
             <?php

 //permet d'afficher la date sous le format que l'on choisit : ici France si il y a un souci de changement de langue sous windows bien vouloir utiliser (LC_TIME,'fra.UTF-8', "fr_FR") cela devrait regler le probleme
 setlocale(LC_TIME, "fr_FR");
    echo strftime('%A %e %B %Y');
    ?>
    </p>

<pre>
    <code>
        &lt;?php

$date = new DateTime();

// r&eacute;cup&eacute;ratin des valeurs de la date courante
$dayName = $date-&gt;format('j'); //=&gt; r&eacute;cup&eacute;ration du num&eacute;ro du jour de la semaine (1 =&gt; lundi, ...., 7 =&gt; dimanche)
$dayNumber = $date-&gt;format('N'); // =&gt; r&eacute;cup&eacute;ration du num&eacute;ro du jour dans le mois
$year = $date-&gt;format('Y'); // r&eacute;cup&eacute;ration de l'ann&eacute;e
$monthName = $date-&gt;format('n'); // =&gt; // Num&eacute;ro du mois, sans 0 initial
// tableau des jours, premi&egrave;re valeur vide
$dayList = ['', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
// Attention, 1 &agrave; 12, donc un vide au d&eacute;but pour la position 0
$monthList = ['', 'janvier', 'f&eacute;vrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'ao&ucirc;t', 'septembre', 'octobre', 'novembre', 'd&eacute;cembre'];
?&gt;

 &lt;!-- affichage du r&eacute;sultat en HTML --&gt;
Aujourd'hui nous sommes le &lt;?= $dayList[$dayNumber] . " " . $dayName . " " . $monthList[$monthName] . " " . $year ?&gt;

&lt;/p&gt;

<!-------------------------------------------------------------------------------------------------------->
&lt;p&gt; deuxieme methode &lt;/p&gt;

 &lt;?php

 //permet d'afficher la date sous le format que l'on choisit : ici France si il y a un souci de changement de langue sous windows bien vouloir utiliser (LC_TIME,'fra.UTF-8', "fr_FR") cela devrait regler le probleme
 setlocale(LC_TIME, "fr_FR");
 echo strftime('%A %e %B %Y');
 ?&gt;
    </code>
</pre>
<!------------------------------------------------------------------------------->

<h3>Excercice 2</h3>

<p class="txt">Trouvez le numéro de semaine de la date suivante : 14/07/2019.</p>

<p class="cod">
<?php


$date = new DateTime('2019-07-14'); // je passe la date voulue en parametre
$weekNumber = $date->format('W'); // récupération du numéro de semaine selon la date passée en paramêtre de la classe DateTime
?>

La date 14/07/2019 se situe dans la semaine n°: <?= $weekNumber ?>

</p>

<!--
    Pour afficher du code j'utilise highlight.js
    (tu pourras donner la ref à ceux que ça interrèsse)
    Il te suffit de mettr une balise <pre><code>(Ton code indenté)</code></pre>
    Bientot je ferais en sorte que le code ne s'execute pas mais pour le moment
    il faut que tu convertisses les caracteres '<' et  '>'.(Je te l'ai fait en dessous)
    Tu as le site : https://www.textfixerfr.com/html/encodeur-de-caracteres-html.php
    qui le fait pour toi, tu as juste à cocher 'Encoder les signes plus grand que et moins grand que'.
    Le code gardera son indentation.
-->

<pre>
    <code>
    &lt;?php

        $date = new DateTime('2019-07-14'); // je passe la date voulue en parametre
        $weekNumber = $date-&gt;format('W'); // r&eacute;cup&eacute;ration du num&eacute;ro de semaine selon la date pass&eacute;e en param&ecirc;tre de la classe DateTime

    ?&gt;

    La date 14/07/2019 se situe dans la semaine n&deg;: &lt;?= $weekNumber ?&gt;
    </code>
</pre>


<!------------------------------------------------------------------------------->

<h3>Excercice 3</h3>

<p class="txt">Combien reste-t-il de jours avant la fin de votre formation.</p>

<p class="cod">
    <?php
    // j'initie un premier objet DateTime pour récupérer la date actuelle
    $debutDate = new DateTime();
    // j'initie un second objet DateTime pour récupérer la date de fin (passer en paramètre la date limite avec laquelle on veut comparer la date d'aujourd'hui
    $finDate= new DateTime('2020-08-01');
    // calcul de la différence entre les 2 dates
    $numberOfDays = $debutDate->diff($finDate);
    ?>
    Il reste <?= $numberOfDays->days ?> jours avant votre fin de formation le 01/08/2020.
</p>

<pre>
    <code>
        &lt;?php
         // j'initie un premier objet DateTime pour r&eacute;cup&eacute;rer la date actuelle
         $debutDate = new DateTime();
         // j'initie un second objet DateTime pour r&eacute;cup&eacute;rer la date de fin (passer en param&egrave;tre la date limite avec laquelle on veut comparer la date d'aujourd'hui

         $finDate= new DateTime('2020-08-01');
         // calcul de la diff&eacute;rence entre les 2 dates
         $numberOfDays = $debutDate-&gt;diff($finDate);
         ?&gt;
         Il reste &lt;?= $numberOfDays-&gt;days ?&gt; jours avant votre fin de formation le 01/08/2020.
    </code>
</pre>

<!------------------------------------------------------------------------------------>


<h3>Excercice 4</h3>

<p class="txt">Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime().</p>

<p class="cod">
    <?php
    $endDate = "2020-08-01";

    // La fonction time() retourne le timestamp de l'instant
    $currentTimestamp = time();
    // la fonction list() - rien à voir les dates - permet d'assigner directement des valeurs à des variables inexistantes
    list($y, $m, $d) = explode("-", $endDate);

    // $mk_timestamp = mktime(heure, minutes, secondes, mois, jour, annee);
    $dateDiff = mktime(0, 0, 0, $m, $d, $y) - $currentTimestamp;
    $days = round($dateDiff / (3600 * 24));
    ?>
            Le timestamp pour la date actuelle est : <?= $currentTimestamp ?><br>

            Il reste <?= $dateDiff ?> secondes jusqu'à la fin de la formation (le 01/08/2020)<br>

            Il reste <?= $days ?> jours !
</p>
<pre>
    <code>
    &lt;?php
 $endDate = "2020-08-01";

 // La fonction time() retourne le timestamp de l'instant
 $currentTimestamp = time();
 // la fonction list() - rien &agrave; voir les dates - permet d'assigner directement des valeurs &agrave; des variables inexistantes
 list($y, $m, $d) = explode("-", $endDate);

 // $mk_timestamp = mktime(heure, minutes, secondes, mois, jour, annee);
 $dateDiff = mktime(0, 0, 0, $m, $d, $y) - $currentTimestamp;
 $days = round($dateDiff / (3600 * 24));
 ?&gt;
 Le timestamp pour la date actuelle est : &lt;?= $currentTimestamp ?&gt;&lt;br&gt;

 Il reste &lt;?= $dateDiff ?&gt; secondes jusqu'&agrave; la fin de la formation (le 01/08/2020)&lt;br&gt;

 Il reste &lt;?= $days ?&gt; jours !
&lt;/p&gt;
    </code>
</pre>

<!----------------------------------------------------------------------------------->


<h3> Excercice 5 </h3>

<p class="txt">Quelle sera la prochaine année bissextile ?</p>

<p class="cod">
<?php
    $date = new DateTime();

    // début de la boucle parcourant les 4 prochaines années
    for ($i = 0; $i < 4; $i++)
    {
        // on ajout un an à chaque tour
        $date->modify('+1 years');

        if ($date->format('L') == 1) // si la fonction retourne 1
        {
            ?>
               L'année <?= $date->format('Y') ?> sera la prochaine année bissextile.
            <?php
        }
    }
?>
</p>

<pre>
    <code>
    &lt;?php
        $date = new DateTime();

        // d&eacute;but de la boucle parcourant les 4 prochaines ann&eacute;es
        for ($i = 0; $i &lt; 4; $i++)
        {
            // on ajout un an &agrave; chaque tour
            $date-&gt;modify('+1 years');

            if ($date-&gt;format('L') == 1) // si la fonction retourne 1
            {
                ?&gt;
                L'ann&eacute;e &lt;?= $date-&gt;format('Y') ?&gt; sera la prochaine ann&eacute;e bissextile.
                &lt;?php
            }
        }
    ?&gt;
    </code>
</pre>

<!--
    Pas besoin de fermeture de html, de body et autres
    Tu as même une balise <main> qui s'ouvre et se ferme si tu fais f12,
    ton référencement est presque parfait.
-->

<!------------------------------------------------------------------------------------>

<h3>Exercice 6</h3>


<p class="txt"> Montrez que la date du 17/17/2019 est erronée. </p>
<pre>
    <code>
        &lt;?php

         $date = "17/17/2019";
        $testDate = DateTime::createFromFormat('d/m/Y', $date); // =&gt; analyse une date au format texte selon le format sp&eacute;cifi&eacute;
        // getLastErrors retourne les erreurs de l'objet DateTime dans un tableau
        $errors = $testDate-&gt;getLastErrors();

        var_dump($errors);
        ?&gt;

         &lt;?php
         if ($errors['warning_count'] &gt;= 1)
         {
         ?&gt;
         &lt;p&gt;
         La date &lt;?= $date ?&gt; est non valide !!
         &lt;/p&gt;
         &lt;/div&gt;
         &lt;?php
        }
        else
        {
         ?&gt;
         &lt;p&gt;
         La date &lt;?= $date ?&gt; est valide !!
         &lt;/p&gt;
        </code>
    </pre>

<!------------------------------------------------------------------------------------>

    <h3>Exercice 7</h3>

<p class="txt">Affichez l'heure courante sous cette forme : 11h25.</p>

<p class="cod">
    <?php
    date_default_timezone_set('Europe/Paris'); // => il faut definir la localoisation de la zone pour viter d'avoir l'heure en temps universel(-1h comparé a Paris)
    echo " Il est " . date('H\hi ') ; // Affiche l'heure il faut bien mettre un antislah avant le h sinon il ne sera pas bien interprété par le php

    ?>
</p>

<pre>
    <code>
        &lt;?php
         date_default_timezone_set('Europe/Paris'); // =&gt; il faut definir la localoisation de la zone pour viter d'avoir l'heure en temps universel(-1h compar&eacute; a Paris)
         echo " Il est " . date('H\hi ') ; // Affiche l'heure il faut bien mettre un antislah avant le h sinon il ne sera pas bien interpr&eacute;t&eacute; par le php
         ?&gt;

    </code>
</pre>

<!------------------------------------------------------------------------------------>

    <h3>Exercice 8</h3>

<p class="txt">Ajoutez 1 mois à la date courante. </p>

<p class="cod">

<?php
$date = new DateTime();  //j'initie la date d'aujourd'hui
$interval = new DateInterval('P1M'); // je declare un intervalle d'un mois que je vais utiliser pour l'ecart

$date->add($interval);   //j'ajoute l'intervalle que j'ai initié a ma

echo "dans un mois nous serons le " .$date->format('Y-m-d') . "\n";

?>
</p>


<pre>
    <code>
        &lt;?php
        $date = new DateTime(); //j'initie la date d'aujourd'hui
        $interval = new DateInterval('P1M'); // je declare un intervalle d'un mois que je vais utiliser pour l'ecart

        $date-&gt;add($interval); //j'ajoute l'intervalle que j'ai initi&eacute; a ma date
        echo "dans un mois nous serons le " .$date-&gt;format('Y-m-d') . "\n";

        ?&gt;
    </code>
</pre>



<?php Close(); ?>
