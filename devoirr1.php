<?php
$personne=array(
'nom'=>'Gaye',
'prenom'=>'Ndeye',
'email'=>'gayeeendeyeee@gmail.com',
'adresse'=>'Grand-Dakar',
'telephone'=>'776355866',
'Date de naissance'=>'03/02/98',
'identifiant slaclk'=>'Ndeye gaye'
);
?>
<!DDOCTYPE HTML>
    <HTML lang='fr'>
	  <head>
	     <title>Mon formulaire </title>
		  <style>
		  table,tr,td,th{
			  border:3px solid black ;
			  border-radius:15px  15px 15px ;
			  font-size:35px ;
			  
			  
		  }
		 body{ background:#E9967A;;
		 }
		 </style>
		 </head>
		 
		 <body><center style=" padding-top:8%;">
<table>
<th colspan="4"><a href="ndeye.jpg"><img src="ndeye.jpg" 
heigh : 5px ;
width: 6px ;
"/></a></th>
		
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
