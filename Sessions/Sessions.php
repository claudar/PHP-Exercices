<?php $title = 'Sessions'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>

<h3>Test Sessions</h3>
<p class="txt"> test sessions 1</p>

<p class="cod">



    <?php

    session_start(); //toujours marquer ceci au debut d'une session



    $_SESSION["login"] = "webmaster"; //defini le nom du login dans la session



    echo $_SESSION["login"]; // affiche le nom du login dans la session

    session_abort();  //toujours fermer une session de la sorte avant de passer a la uivante ou de quitter la session en cours
?>
</p>

<pre>
    <code>
&lt;?php

 session_start(); //toujours marquer ceci au debut d'une session



 $_SESSION["login"] = "webmaster"; //defini le nom du login dans la session



 echo $_SESSION["login"]; // affiche le nom du login dans la session

        session_abort(); //toujours fermer une session de la sorte avant de passer a la suivante ou de quitter la session en cours
?&gt;

    </code>
</pre>

<p class="txt"> test sessions 2</p>

<p class="cod">

    <?php

    session_start();

    if ($_SESSION["login"])

    {

        echo "Vous êtes autorisé à voir cette page.<br/>";

    }

    else

    {

        echo"Cette page nécessite une identification.<br/>";

    }


    $_SESSION["login"] = "webmaster"; //defini le nom du login de l'utilisateur dans la session

    $_SESSION["role"] = "admin"; //defini le role de l'utilisateur dans la session



    echo"- session ID : ".session_id(); //Affiche l'identifiant de l'utilisateur dans la session

    echo"<br/>- Nom de la session : ".session_name(); //Affiche le nom de la session en cours si on veut nommer une session on passe le nom voulu en argument c'est a dire entre parenthèses

    session_abort();
    ?>
</p>

<pre>
    <code>

&lt;?php

 session_start();

 if ($_SESSION["login"])

 {

 echo "Vous &ecirc;tes autoris&eacute; &agrave; voir cette page.&lt;br/&gt;";

 }

 else

 {

 echo"Cette page n&eacute;cessite une identification.&lt;br/&gt;";

 }


 $_SESSION["login"] = "webmaster"; //defini le nom du login de l'utilisateur dans la session

 $_SESSION["role"] = "admin"; //defini le role de l'utilisateur dans la session



 echo"- session ID : ".session_id(); //Affiche l'identifiant de l'utilisateur dans la session

 echo"&lt;br/&gt;- Nom de la session : ".session_name(); //Affiche le nom de la session en cours si on veut nommer une session on passe le nom voulu en argument c'est a dire entre parenth&egrave;ses

        session_abort(); //toujours fermer une session de la sorte avant de passer a la suivante ou de quitter la session en cours

 ?&gt;
    </code>
</pre>

<p class="txt"> Nommer une session 3</p>

<p class="cod">
    <?php

    session_name("Warrior D2");  //je met le nom souhaité avant le "session start" pour eviter tout conflit avec une précédente session

    session_start();


    echo"- Nom de la session : ".session_name(); // mon echo affichera le nom de session souhaité

    session_abort();
    ?>

</p>
<pre>
    <code>
&lt;?php

 session_name("Warrior D2"); //je met le nom souhait&eacute; avant le "session start" pour eviter tout conflit avec une pr&eacute;c&eacute;dente session

 session_start();


 echo"- Nom de la session : ".session_name(); // mon echo affichera le nom de session souhait&eacute;

 session_abort();
 ?&gt;

    </code>
</pre>

<p class="txt"> Detruire une session </p>

<pre>
    <code>
&lt;?php
//on &laquo; vide &raquo; les variables par l'affectation d'un tableau vide.
$_SESSION["login"] = array();

$_SESSION["role"] = array();

//destruction des variables de session.
unset($_SESSION["login"]);

unset($_SESSION["role"]);

//la fonction setcookie(), on fait expirer en termes de date le cookie qui concerne le nom de la session.
if (ini_get("session.use_cookies"))

{
 setcookie(session_name(), '', time()-42000);
}
//On d&eacute;truit le reste de la session, via la fonction session_destroy().
session_destroy();
?&gt;
    </code>
</pre>

<p class="txt"> test login</p>

<p class="cod">





</p>


<?php Close(); ?>
