<?php 
$path  = 'image';
$files = array_diff(scandir($path), array('..', '.'));
$no=0;
foreach($files as $value){
	$no++;
	?>
	<tr>
		<td><?php echo $no;?></td>
		<td><img src="image/<?php echo $value;?>" width="100px" height="50px"></img></td>
		<td><img src="grayscale/<?php echo $value;?>" width="100px" height="50px"></img></td>
		<td><img src="citra/<?php echo $value;?>" width="100px" height="50px"></img></td>
		<td><a href="detail.php?name=<?php echo $value;?>" target="blank">Detail</a></td>
	</tr>
	<?php 
}
?>