<?php

$personne=array(

'nom'=>'Sow',

'prenom'=>'Arfang',

'email'=>'sowarfang98@gmail.com',

'adresse'=>'guediawaye',

'telephone'=>'777034186',

'Date de naissance'=>'01/01/1999',
'Profession'=>'Informaticien',

'identifiant slack'=>'Arfangxy'

);

?>

<!DDOCTYPE HTML>

    <HTML lang='fr'>

	  <head>

	     <title>Mon formulaire </title>

		  <style>

		  table,tr,td,th{

			  border:3px solid black ;

			  border-radius:10px  20px 10px ;

			  font-size:20px ;

			  

			  

		  }

		 body{ background:blue;;

		 }

		 </style>

		 </head>

		 

		 <body><center style=" padding-top:2%;">

<table>

<th colspan="2"><a href="arfang.jpg"><img src="arfang.jpeg" width="200px" heigth="200px">


</a></th>

		
		<?php foreach ($personne as $key => $value): ?>

<tr>

<td><?php echo $key;?></td>

<td><?php echo $value;?></td>

</tr>

<?php endforeach ?>

</table>

</center>

</body>

</html>

	

		 </body>

		 </HTML>