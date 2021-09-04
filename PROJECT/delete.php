<?php
$bdd = new PDO('mysql:host=localhost;dbname=web_site;charset=utf8', 'root', '');
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $suppr_id = htmlspecialchars($_GET['id']);
   $suppr = $bdd->prepare('DELETE FROM news WHERE id_nws = ?');
   $suppr->execute(array($suppr_id));
   header('Location: http://localhost/web_project/sup_article.php');
}
?>