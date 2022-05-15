<?php include("head.php"); ?>



<?php
if(isset($_POST['enter'])){
		$date=getdate();
	$currentmonth=strtoupper($date['month']);
	$currentyear=$date['year'];
	$key="$currentmonth $currentyear";
	$day=addslashes($_POST['day']);
	$month=addslashes($_POST['month']);
	$year=addslashes($_POST['year']);
	
	$date=$day."/".$month."/".$year;
	$beneficiary_name=addslashes($_POST['beneficiary_name']);
	$amount=addslashes($_POST['amount']);
	
		$acctno=addslashes($_POST['acctno']);
			$acctname=addslashes($_POST['acctname']);
				$amount=addslashes($_POST['amount']);
				$bank=addslashes($_POST['bank']);
	$query="INSERT INTO `bank_interest` (`bank`,`date`,`amount`,`accout_number_to_add`,`account_name`,`entry_date`,`key`) VALUES ('$bank','$date','$amount','$acctno','$acctname',NOW(),'$key')";
	 $sql=mysql_query($query);
	 	header("location:success2.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");
	}

 ?>
 
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" class="login">
  <table width="100%" border="1" id="box-table-a">

<tr>
<td>&nbsp;</td>
<td>
Date:</td><td>
<select name="day"  class="smallInput">
<option value="">...................</option>
<?php 
$range=range(1,31);
foreach($range as $ran){
 echo "<option value='$ran'>$ran</option>";
 }
?>
<?php if(isset($_POST['day'])){
	  echo "<option  value='{$_POST['day']}' selected='selected'>{$_POST['day']}</option>"; }?>
</select>

<select name="month" class="smallInput">
<option value="">...................</option>

<?php 
$range=range(1,12);
foreach($range as $ran){
 echo "<option value='$ran'>$ran</option>";
}
?>
<?php if(isset($_POST['month'])){
	  echo "<option  value='{$_POST['month']}' selected='selected'>{$_POST['month']}</option>"; }?>
</select>

<select name="year" class="smallInput">
<option value="">...................</option>
<?php 
$range=range(2014,2018);
foreach($range as $ran){
 echo "<option value='$ran'>$ran</option>";
}
 ?>
  <?php if(isset($_POST['year'])){
	  echo "<option  value='{$_POST['year']}' selected='selected'>{$_POST['year']}</option>"; }?>

</select>
</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Amount</td>
<td><input type="text"  class="smallInput" name="amount" value="<?php if(isset($_POST['amount'])){ echo $_POST['amount']; }?>" /></td>
</tr>
<tr>
<td>&nbsp;</td>

<td>Bank</td>
<td><input type="hidden" name="bank" id="textfield6" class="smallInput" value="<?php echo $_GET['bank']; ?>" /><?php echo "<b style='color:#F00'>". $object->getName($_GET['bank'])."</b>"; ?></td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Account Name</td>
<td><input type="hidden" name="acctname" value="<?php if(isset($_GET['accountn'])){ echo $_GET['accountn'];} ?>"  class="smallInput"/><?php echo "<b style='color:#F00'>".$_GET['accountn'].""; ?></td>
</tr>
<tr>
<td>&nbsp;</td>

<td>Account No</td>
<td><input type="hidden" name="acctno" value="<?php if(isset($_GET['account'])){ echo $_GET['account'];} ?>"  class="smallInput"/><?php echo "<b style='color:#F00'>".$_GET['account'].""; ?></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>

<td><input type="submit" name="enter"   value="Enter"  class="submit"/></td>
</tr>
</table>






<?php include("footer.php"); ?>