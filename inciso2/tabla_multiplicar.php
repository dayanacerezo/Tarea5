<?php
$nfilas=$_POST["txtnfilas"];
$altura=$_POST["txtaltura"];
$ncolumnas=$_POST["txtncolumnas"];
$anchura=$_POST["txtanchura"];
?>
<table  border="10" width="<?php echo $anchura; ?>" height="<?php echo $altura;?>">
<?php	
for ($i=0;$i<=$nfilas;$i++)
{ 
	?>
	<tr>
	<?php

	for ($j=0;$j<=$ncolumnas;$j++)
	{ 
		if ($i==0)
		{
			if ($j==0)
			{
				?>
				<th>X</th>
			<?php 
			}
			else
			{
			?>
			<th><?php echo $j; ?></th>	
			<?php 
			}
		 }	
		else
		{	
		  if ($j==0)
		   {?>
		   	<th><?php echo $i; ?></th>
		   <?php }
		   else {
		   	?>
			<td><?php echo $i*$j; ?></td>
		   	<?php }	
		?>
		<?php
		}
		?>
	<?php	
	}
	?>
	</tr>
<?php	
}
?>
</table>