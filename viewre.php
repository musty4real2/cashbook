<?php 
ob_start();
include("connect.php");
include("class.php");
$object=new cash();
			$date=getdate();
	$currentmonth=strtoupper($date['month']);
	$currentyear=$date['year'];
	$key="$currentmonth $currentyear";
$msg="Schedule has been added successfully please check today's schedule to see details";
$msg2="Schedule has not been added successfully please check and try again";

if(isset($_GET['deleteid'])){
echo '<center><h1>Do You Really Want To Add this Re-occurring Schedule to the current Schedule that is been prepared ?<br/> <a href="viewreoccuring.php?yesdelete='.$_GET['deleteid'].'&bank='.$_GET['bank'].'&mda='.$_GET['mda'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].'&msg='.$msg.'">Yes </a>| <a href="mda_list.php?bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].'&msg='.$msg.'">No</a></h1></center>';
exit();

}

if(isset($_GET['yesdelete'])){
	$id_to_delete=$_GET['yesdelete'];
	$getcredit1=mysql_query("SELECT * FROM `mda_cr` WHERE `id`='$id_to_delete'");
while($st=mysql_fetch_array($getcredit1)){
	$id=$st['id'];

	$debitvoucher=$st['debit_voucher'];
	$beneficiaryname=$st['beneficiary_name'];
	$trerec=$st['treasury_receipt_no'];
	$tpv=$st['tpv_no'];
	$revenue=$st['revenue_debit'];
	$head=$st['head'];
	$subhead=$st['sub_head'];
	$amount=$st['amount'];
	$recipient=$st['recipient_bank'];
	$recipientacctno=$st['recipient_account_number'];
	$sendersbank=$st['senders_bank'];
	$senderacctno=$st['senders_account_number'];
		$narration=$st['narration'];
		$date=$st['date'];	
}
$sql1="INSERT INTO `cr` (`date`, `debit_voucher`, `beneficiary_name`, `treasury_receipt_no`, `tpv_no`, `revenue_debit`, `head`, `sub_head`, `amount`, `recipient_bank`, `recipient_account_number`, `senders_bank`, `senders_account_number`, `narration`, `entry_date`,`status`,`status2`,`status3`,`key`,`closed`) VALUES ('$date', '$debitvoucher', '$beneficiaryname', '$trerec', '$tpv', '$revenue', '$head', '$subhead', '$amount', '$recipient', '$recipientacctno', '$sendersbank', '$senderacctno', '$narration', NOW(),'1','0','0','$key','')";
	$query12=mysql_query($sql1);

	header("location:success.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");

	exit();
}
?>
<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>
<?php
$getcredit="SELECT * FROM `mda_cr` WHERE `id`='{$_GET['deleteid']}'";
$query=mysql_query($getcredit);

?>
  <table width='100%' border='0' style='margin:auto;' class="table">

<tr style="background-color:#09F; color:#FFF;">
<th>Date.</th>
<th>Dept V.No</th>
<th>Whom Paid</th>
<th>Treasury Receipt</th>
<th>TPV No</th>
<th>Revenue Debit</th>
<th>Head</th>
<th>Sub-Head</th>
<th>Amount</th>
<th></th>
<th></th>
<th></th>
<th></th>
  </tr>
  

<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->
<?php 
while($row=mysql_fetch_array($query)){
	$id=$row['id'];
 $bg = ($bg=='#FF9' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><?php echo $row['date'];?></td>
 <td><?php echo $row['debit_voucher'];?></td>
  <td><?php echo $row['beneficiary_name'];?></td> 
  <td><?php echo $row['treasury_receipt_no'];?></td>
  
  <td><?php echo $row['tpv_no'];?></td>
  <td><?php echo $row['revenue_debit'];?></td>
  <td><?php echo $row['head'];?></td>
  <td><?php echo $row['sub_head'];?></td>
   <td><?php echo $row['amount'];?></td>
   <?php echo "<td><a href='viewre.php?deleteid=$id&bank={$_GET['bank']}&account={$_GET['account']}&msg=Schedule has been added successfully please check today's schedule to see details&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Add to Today's Schedule </a></td>"; ?> 

  </tr>
  
  <?php }
  ?>

 </table>

<br/><br/>
<?php include("footer.php"); ?>