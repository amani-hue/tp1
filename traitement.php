<h1>Affichage des Clubs</h1>
<?php  
$Id=$_GET['id'];
$Nom=$_GET['nom'];
$Description=$_GET['description'];
$Adresse=$_GET['adresse'];
$Domaine=$_GET['domaine'];

if(isset($Nom)&& isset($Id)&&isset($Description)&&isset($Domaine)&&isset($Adresse)){
if(!empty($Nom) && !empty($Id)&& !empty($Description) && !empty($Domaine)&& !empty($Adresse)){
	?>
	<table border="2">
		<tr>
			<th>Id</th><th>Nom</th><th>Description</th><th>Adresse</th><th>Domaine</th></tr>
<td>
		<?php
echo $Id= $_GET['id'] ;?>
</td>


<td><?php
echo $Nom=$_GET['nom'];?></td>
	<td><?php
echo $Description=$_GET['description'];?></td>
<td><?php
echo $Adresse= $_GET['adresse'];?></td>

	<td><?php
echo $Domaine= $_GET['domaine'];?></td>


</table>
<?php
	}else{
echo "Champ vide";
}
}





?>