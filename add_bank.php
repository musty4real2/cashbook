<?php include("head.php"); ?>

<form method="post" action="<?php $_SERVER['PHP_SELF'];?>"><table><tr><td width="180">

Enter Bank Name:</td><td><input type="text" class="smallInput" name="bank_name" value="" /></td>
</tr><tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Add New Bank" class="submit" /></td></tr>

</table>
</form>

<?php
if(isset($_POST['submit'])){
$bname=mysql_real_escape_string($_POST['bank_name']);

$query="INSERT INTO `bank` (`name`) VALUES ('$bname')";

$sql=mysql_query($query);

header("location:add_bank.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");

}



?>
            <?php

if(isset($_GET['deleteid'])){
echo 'Do you really want to delete  '.$_GET['deleteid'].'? <a href="add_bank.php?yesdelete='.$_GET['deleteid'].'&bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].'">Yes </a>| <a href="add_bank.php?bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].'">No</a>';
exit();

}

if(isset($_GET['yesdelete'])){
	$id_to_delete=$_GET['yesdelete'];
	$sql=mysql_query("DELETE FROM `bank` WHERE `bank_id`='$id_to_delete' limit 1") or die(mysql_error());
	
header("location:add_bank.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");
	exit();
}
	

?>
<?php

$select=mysql_query("SELECT * FROM `bank` ");

if(mysql_num_rows($select)==0){ echo "<p class='msg warning'>Sorry, No Job found for Graduates!</p>";}

elseif(mysql_num_rows($select)>0){?>


<p>&nbsp;</p>


<?php echo mysql_num_rows($select);?> Result(s) found for Banks.


<center>
<table border="1" width="80%" style="color:#646262; border-collapse:collapse; font-size:14px;">
          <tr style="color:#FFF; background-color:#09F;">
<td width="21%">S/N</td>
<td width="59%" >Bank Name</td>
<td width="20%"></td>
</tr>

  <?php
	$serial=1;
  	while($row=mysql_fetch_array($select)){
		$id=$row['bank_id']; 
		?>
     <tr class="treven">
<td class="legnd"><?php echo $serial++; ?></td>
<td class="legnd"><?php echo $row['name'] ;?></td>
<td><?php echo "<a href='add_bank.php?deleteid=$id'>Delete</a>" ?></td>



</tr>

<?php  } }?>
</table>
</center>
          
          <?php include("footer.php"); ?>