<?php
include("head.php");

$set=$object->fetchRecord($_GET['editid'], "cr");
while($st=mysql_fetch_array($set)){

?>

<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>

<?php
if(isset($_POST['enter'])){
	$debitvoucher=mysql_escape_string($_POST['debitvoucher']);
	$beneficiaryname=mysql_escape_string($_POST['beneficiaryname']);
	$trerec=mysql_escape_string($_POST['trerec']);
	$tpv=mysql_escape_string($_POST['tpv']);
	$revenue=mysql_escape_string($_POST['revenue']);
	$head=mysql_escape_string($_POST['head']);
	$subhead=mysql_escape_string($_POST['subhead']);
	$amount=mysql_escape_string($_POST['amount']);
	$recipient=mysql_escape_string($_POST['recipient']);
	$recipientacctno=mysql_escape_string($_POST['recipientacctno']);
	$sendersbank=mysql_escape_string($_POST['sendersbank']);
	$senderacctno=mysql_escape_string($_POST['senderacctno']);
		$narration=mysql_escape_string($_POST['narration']);

		$date=mysql_escape_string($_POST['date']);

	
	
	$query=mysql_query("UPDATE `cr` SET `date`='$date',`debit_voucher`='$debitvoucher',`beneficiary_name`='$beneficiaryname',`treasury_receipt_no`='$trerec',`tpv_no`='$tpv',`revenue_debit`='$revenue',`head`='$head',`sub_head`='$subhead',`amount`='$amount',`recipient_bank`='$recipient',`recipient_account_number`='$recipientacctno',`narration`='$narration'");
	
	header("location:success.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");
	}



?>


<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <table width="100%" border="1" id="box-table-a">
<tr>
<td colspan="2">Date: </td>
      <td>
<input type="text" name="date" value="<?php echo $st['date']; ?>"</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
<tr>
<td>Debit Voucher:
</td>
<td><input type="text" id="textfield6" class="smallInput" name="debitvoucher" value="<?php if(isset($st['debit_voucher'])){ echo $st['debit_voucher'];} ?>" />

</td>


<td>Beneficiary Name:</td>
<td><input name="beneficiaryname" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['beneficiary_name'])){ echo $st['beneficiary_name'];} ?>" />
</td>
</tr>

<tr>
<td>Treasury Receipt No.</td>
<td><input name="trerec" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['treasury_receipt_no'])){ echo $st['treasury_receipt_no'];} ?>" />
</td>
<td>TPV no.:</td>
<td><input  name="tpv" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['tpv_no'])){ echo $st['tpv_no'];} ?>" />
</td>
</tr>

<tr>
<td>Revenue Debit:</td>
<td><input name="revenue" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['revenue_debit'])){ echo $st['revenue_debit'];} ?>" />
</td>

<td>Head:</td>
<td><input name="head" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['head'])){ echo $st['head'];} ?>" />
</td></tr>

<tr>
<td>Sub-head</td>
<td><input name="subhead" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['sub_head'])){ echo $st['sub_head'];} ?>" />
</td>

<td>Amount:</td>
<td><input name="amount" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['amount'])){ echo $st['amount'];} ?>" />
</td></tr>

<tr>
<td>Recipient Bank.</td>
<td><input name="recipient" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['recipient_bank'])){ echo $st['recipient_bank'];} ?>" />
</td>

<td>Recipient Account no:</td>
<td><input name="recipientacctno" type="text" id="textfield6" class="smallInput" value="<?php if(isset($st['recipient_account_number'])){ echo $st['recipient_account_number'];} ?>" />
</td></tr>

<tr>
<td>Sender's Bank</td>
<td><input type="hidden" name="sendersbank" id="textfield6" class="smallInput" value="<?php echo $object->getName($_GET['bank']); ?>" /><?php echo "<b style='color:#F00'>". $object->getName($_GET['bank'])."</b>"; ?></td>
<td>Sender's Account no:</td>
<td><input type="hidden" name="senderacctno"  id="textfield6" class="smallInput" value="<?php if(isset($_GET['account'])){ echo $_GET['account'];} ?>" /><?php echo "<b style='color:#F00'>".$_GET['account'].""; ?>
</td>
</tr>

</td>
</tr>
<tr>
<td colspan="2">Narration: </td>
      <td>
      <textarea name="narration"  id="textfield6" class="smallInput" ><?php echo $st['narration']; ?></textarea>
      </td>
      </tr>

<tr>
<td>&nbsp;</td>
<td>
<input type="submit" name="enter" value="Update" class="submit" style="float:right;" />
</td>
<td>&nbsp;</td>
</tr>

</form>
<?php 

}
ob_flush();

?>