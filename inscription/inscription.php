<?php
// Check for empty fields
if(empty($_POST['nom'])  		            ||
   empty($_POST['prenom']) 		         ||
   empty($_POST['dateLieux']) 		      ||
   empty($_POST['perePrenom'])	         ||
   empty($_POST['pereProfession'])        ||
   empty($_POST['mereNom'])               ||
   empty($_POST['merePrenom'])            ||
   empty($_POST['mereProfession'])        ||
   empty($_POST['parentsAddress'])        ||
   empty($_POST['parentEmail'])           ||
   empty($_POST['phoneHome'])             ||
   empty($_POST['phoneWork'])             ||
   empty($_POST['personnes'])             ||
   !filter_var($_POST['parentEmail'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$nom = strip_tags(htmlspecialchars($_POST['nom']));
$prenom = strip_tags(htmlspecialchars($_POST['prenom']));
$dateLieux = strip_tags(htmlspecialchars($_POST['dateLieux']));
$perePrenom = strip_tags(htmlspecialchars($_POST['perePrenom']));
$pereProfession = strip_tags(htmlspecialchars($_POST['pereProfession']));
$mereNom = strip_tags(htmlspecialchars($_POST['mereNom']));
$merePrenom = strip_tags(htmlspecialchars($_POST['merePrenom']));
$mereProfession = strip_tags(htmlspecialchars($_POST['mereProfession']));
$parentsAddress = strip_tags(htmlspecialchars($_POST['parentsAddress']));
$parentEmail = strip_tags(htmlspecialchars($_POST['parentEmail']));
$phoneHome = strip_tags(htmlspecialchars($_POST['phoneHome']));
$phoneWork = strip_tags(htmlspecialchars($_POST['phoneWork']));
$phoneOther = strip_tags(htmlspecialchars($_POST['phoneOther']));
$personnes = strip_tags(htmlspecialchars($_POST['personnes']));
$otherInformations = strip_tags(htmlspecialchars($_POST['otherInformations']));
	
// Create the email and send the message
$to = 'creche.messara@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Demmande de Pré-inscription pour : $nom  $prenom";
$email_body = "
<p class=\"p1\">&nbsp;</p>
<p class=\"p2\">&nbsp;</p>
<p class=\"p2\">&nbsp;</p>
<h2 class=\"p3\" style=\"text-align: center;\"><span class=\"s2\"><strong><em>Fiche de renseignements.</em></strong></span></h2>
<p>&nbsp;</p>
<p class=\"p4\"><span style=\"text-decoration: underline;\"><span class=\"s2\"><strong><em>L&rsquo;enfant&nbsp;</em></strong></span><span class=\"s1\"><strong><em>:</em></strong></span></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>Nom&nbsp;: &nbsp; ".$nom." </em></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>Pr&eacute;nom&nbsp;: &nbsp; ".$prenom." </em></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>Date et lieu de naissance&nbsp;: &nbsp; ".$dateLieux." </em></span></p>
<p class=\"p4\"><span style=\"text-decoration: underline;\"><span class=\"s2\"><strong><em>Les parents</em></strong></span><span class=\"s1\"><em>&nbsp;: </em></span></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></em></span><span class=\"s2\"><strong><em>Le p&egrave;re&nbsp;:</em></strong></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>Pr&eacute;nom&nbsp;: &nbsp; ".$perePrenom." </em></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>Profession&nbsp;: &nbsp; ".$pereProfession." </em></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></em></span><span class=\"s2\"><strong><em>La m&egrave;re</em></strong></span><span class=\"s1\"><strong><em>&nbsp;:</em></strong></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>Nom&nbsp;: &nbsp; ".$mereNom." </em></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>Pr&eacute;nom&nbsp;: &nbsp; ".$merePrenom." </em></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>Profession&nbsp;: &nbsp; ".$mereProfession." </em></span></p>
<p class=\"p4\"><span style=\"text-decoration: underline;\"><span class=\"s2\"><strong><em>Adresse des parents</em></strong></span><span class=\"s1\"><em>&nbsp;:&nbsp;</em></span></span></p>
<p class=\"p4\">&nbsp; &nbsp; &nbsp; ".$parentsAddress." </p>
<p class=\"p4\"><span style=\"text-decoration: underline;\"><span class=\"s2\"><strong><em>T&eacute;l&eacute;phone (obligatoire)</em></strong></span></span><span class=\"s1\"><em><span style=\"text-decoration: underline;\">&nbsp;:</span> <span class=\"Apple-converted-space\">&nbsp; &nbsp;</span></em></span></p>
<ul>
<li class=\"li4\"><span class=\"s1\"><em>domicile&nbsp;: &nbsp; ".$phoneHome." </em></span></li>
<li class=\"li4\"><span class=\"s1\"><em> bureau&nbsp;: &nbsp; ".$phoneWork." &nbsp;</em></span></li>
<li class=\"li4\"><span class=\"s1\"><em>Autres&nbsp;: &nbsp; ".$phoneOther." </em></span></li>
</ul>
<p class=\"p4\"><span style=\"text-decoration: underline;\"><span class=\"s2\"><strong><em>Personnes autoris&eacute;es &agrave; r&eacute;cup&eacute;rer l&rsquo;enfant</em></strong><em>&nbsp;:</em></span></span></p>
<p class=\"p4\"><span class=\"s2\"><em>&nbsp; &nbsp; &nbsp;&nbsp; ".$personnes." </em></span></p>
<p class=\"p5\">&nbsp;</p>
<p class=\"p4\"><span style=\"text-decoration: underline;\"><span class=\"s2\"><strong><em>Autres renseignements&nbsp;:</em></strong></span></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp;&nbsp; &nbsp; &nbsp; </span>Tous renseignements pouvant aider &agrave; mieux conna&icirc;tre l&rsquo;enfant pour une meilleure prise en charge de sa personne: fragilit&eacute;, maladie, allergie&hellip;</em></span></p>
<p class=\"p4\"><span class=\"s1\"><em>&nbsp; &nbsp; &nbsp; ".$otherInformations." </em></span></p>
<p class=\"p4\"><span class=\"s1\"><em><span class=\"Apple-converted-space\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></em></span><span class=\"s2\"><strong><em>Signature du parent&nbsp;</em></strong></span></p>
<p class=\"p4\">&nbsp;</p>
<p class=\"p4\">&nbsp;</p>
<p class=\"p4\">&nbsp;</p>
<p class=\"p4\">&nbsp;</p>";
$headers = "From: $parentEmail\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
$headers .= "Reply-To: $parentEmail";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
