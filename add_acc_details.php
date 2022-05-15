<?php include("head.php"); ?>

<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <table width="100%" border="1" id="box-table-a">

<tr><td>

        <label>Select A Bank:</label></td><td>
        <select name="bank" id="bank" class="input-text">
        <option value="">select</option>
        <option value="">---------</option>
        <?php
	  $ask="SELECT * FROM `bank` ORDER BY `name` ASC";
	  if(!$ask=mysql_query($ask)){
		  echo "<option value=''>No Banks available".mysql_error()."</option>";
		  }
		
		  while($row=mysql_fetch_array($ask)){
			  echo "<option value='{$row['bank_id']}'>{$row['name']}</option>";
			  }
	  
	  ?>
        <?php if($_POST['name']){echo "<option  value='{$_POST['name']}' selected='selected'>{$_POST['name']}</option>"; }?>
      </select></td>
      </tr>
      <tr><td >

Enter Account Name:</td><td><input type="text" class="smallInput" name="acc_name" value="" /></td>
</tr>
<tr><td>

Enter Account Number:</td><td><input type="text" class="smallInput" name="acc_number" value="" /></td>
</tr>
      <tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Add New Account Details" /></td></tr>

</table>
</form>

<?php
if(isset($_POST['submit'])){
$bank=mysql_real_escape_string($_POST['bank']);
$acc_name=mysql_real_escape_string($_POST['acc_name']);
$acc_number=mysql_real_escape_string($_POST['acc_number']);

$query="INSERT INTO `bank_account` (`bank`,`account_name`,`account_number`) VALUES ('$bank','$acc_name','$acc_number')";

$sql=mysql_query($query);

header("location:add_acc_details.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");

}



?>
            <?php

if(isset($_GET['deleteid'])){
echo 'Do you really want to delete  '.$_GET['deleteid'].'? <a href="add_acc_details.php?yesdelete='.$_GET['deleteid'].'&bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].'">Yes </a>| <a href="add_acc_details.php?bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].'">No</a>';
exit();

}

if(isset($_GET['yesdelete'])){
	$id_to_delete=$_GET['yesdelete'];
	$sql=mysql_query("DELETE FROM `bank_account` WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
header("location:add_acc_details.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");
	exit();
}
	

?>
<?php

$select=mysql_query("SELECT * FROM `bank_account` ");

if(mysql_num_rows($select)==0){ echo "<p class='msg warning'>Sorry, No Job found for Graduates!</p>";}

elseif(mysql_num_rows($select)>0){?>


<p>&nbsp;</p>


<?php echo mysql_num_rows($select);?> Result(s) found for Banks.


<center>
<table border="1" width="80%" style="color:#646262; border-collapse:collapse; font-size:14px;">
          <tr style="color:#FFF; background-color:#09F;">
<td >S/N</td>
<td  >Bank Name</td>
<td >Account Name</td>
<td >Account Number</td>
<td ></td>
</tr>

  <?php
	$serial=1;
  	while($row=mysql_fetch_array($select)){
		$id=$row['id'];
		$bank= $row['bank'];
		?>
     <tr class="treven">
<td height="38" class="legnd"><?php echo $serial++; ?></td>
<td ><b style='color:#F00'><?php echo $object->getName( $bank); ?></b></td>
<td class="legnd"><?php echo $row['account_name'] ;?></td>
<td class="legnd"><?php echo $row['account_number'] ;?></td>
<td><?php echo "<a href='add_acc_details.php?deleteid=$id&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'>Delete</a>" ?></td>



</tr>

<?php  } }?>
</table>
</center>
          
          <?php include("footer.php"); ?>