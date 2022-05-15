<?php 
ob_start();
include("connect.php");
include("class.php");
$object=new cash();
			$date=getdate();
	$currentmonth=strtoupper($date['month']);
	$currentyear=$date['year'];
	$key="$currentmonth $currentyear";
?>

<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header></b></header>
<!--aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->



    <?php

if(isset($_GET['deleteid'])){
echo 'Are you sure this record this a less uncredit record? <a href="reviewcashbook.php?yesdelete='.$_GET['deleteid'].'&bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].'&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'.'">Yes </a>| <a href="reviewcashbook.php?a=nonsense thing&bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].'&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing">No</a>';
exit();

}

if(isset($_GET['yesdelete'])){
	$id_to_delete=$_GET['yesdelete'];
	$sql=mysql_query("UPDATE `cr` SET `status2`='1' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:reviewcashbook.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");
	exit();
}
?>

<!---BIG TABLE------------------------------------------------------------***************************************************-->

<table width="100%" border="0" >
<tr>
<td width="50%" align="left" valign="top"><h1>Dr</h1></td>
<td width="50%" align="right" valign="top"><h1>Cr</h1></td>

</tr>
<tr>
<!---BIG TABLE------------------------------------------------------------***************************************************-->

<!---DIVIDE big table into two columns-----------------***************************************************-->

<td align="right" valign="top"><!---FIRST column***************************************-----------------***************************************************-->


<!---FETCH FROM DATABASE***************************************-----------------***************************************************-->
<?php
include("connect.php");
$getcredit="SELECT * FROM `dr` WHERE `senders_account_number`='{$_GET['account']}'  AND `key`='$key' AND `closed`='1'";
$query=mysql_query($getcredit);

?>


  <table width='100%' border='0' style='margin:auto;' class="table">
<tr style="background-color:#09F; color:#FFF;" height="45px">
<th>Date.</th>
<th>Tre. Rec</th>
<th>Recieved From</th>
<th>Head</th>
<th>Sub-Head</th>
<th>Sender's Acc No.</th>
<th>Sender Bank</th>
<th>Amount</th>

<th>Bank C. Slip</th>
<th>Revenue Debit </th>
  </tr>
  
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->
<?php 
while($row=mysql_fetch_array($query)){
 $bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><?php echo $row['date'];?></td>
  <td><?php echo $row['treasury_reciept_no'];?></td>
  <td><?php echo $row['recieved_from'];?></td>
  <td><?php echo $row['head'];?></td>
  <td><?php echo $row['sub_head'];?></td>
  <td><?php echo $row['senders_account_number'];?></td>
  <td><?php echo $row['senders_bank'];?></td>
  <td><?php echo $row['amount'];?></td>
 
     <td><?php echo $row['bank_credit_slip'];?></td>
     <td><?php echo $row['revenue_debit']; ?></td>

</tr>

<?php }?>

<!--- END OF  RESULT SET FROM DATABASE***************************************-************************************-->

 </table>


 </td> <!---END FIRST column********************************************************************************************-->
  
  
<!---OPEN SECOND column***************************************************************************-->
 <td align="left" valign="top">
  <table width='100%' border='0' style='margin:auto;' class="table">
  <!---FETCH FROM DATABASE***************************************-----------------***************************************************-->

<?php
include("connect.php");
$getcredit="SELECT * FROM `cr`  WHERE `senders_account_number`='{$_GET['account']}' AND `status`='1'  AND `key`='$key'  AND `closed`='1' ";
$query=mysql_query($getcredit);

?>
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

  </tr>
  

<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->
<?php 
while($row=mysql_fetch_array($query)){
	$id=$row['id'];
	$sender=$row['senders_bank'];
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

  </tr>
  
  <?php }?>


</table><!---CLOSE TABLE IN SECOND column****************************************************************************************-->
 
 
 
 
 </td>
 <!---END SECOND column***************************************-----------------***************************************************-->



</tr><!---CLOSE ROW IN BIIG TABLE****************************************************************************************-->

<tr>

<td align="center">
<?php
$query2="SELECT SUM(amount) FROM `dr`  WHERE `senders_account_number`='{$_GET['account']}'  AND `key`='$key' AND `closed`='1'";
$result1=mysql_query($query2) or die(mysql_error());

while($row=mysql_fetch_array($result1)){
echo "Total = ".number_format($row['SUM(amount)'],2);
$balance1=$row['SUM(amount)'];
}
?>
</td>
<td align="center">
<?php
$query3="SELECT SUM(amount) FROM `cr`  WHERE `senders_account_number`='{$_GET['account']}' AND `status`='1'  AND `key`='$key' AND `closed`='1'";
$result3=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result3)){

echo "Total =".number_format($row['SUM(amount)'],2). "<br/>";
$balance2=$row['SUM(amount)'];
}

?>
</td></tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<tr>
<td><?php 
	$date=getdate();
	$currentmonth=strtoupper($date['month']);
	$currentyear=$date['year'];
	$querya="SELECT SUM(amount) FROM `bank_interest` WHERE `accout_number_to_add`='{$_GET['account']}' AND `key`='$currentmonth $currentyear'";
$resulta=mysql_query($querya) or die(mysql_error());

while($row=mysql_fetch_array($resulta)){

$balanceaccrud=$row['SUM(amount)'];
}

	$queryc="SELECT SUM(amount) FROM `bank_charges` WHERE `accout_number_to_add`='{$_GET['account']}' AND `key`='$currentmonth $currentyear'";
$resultc=mysql_query($queryc) or die(mysql_error());

while($row=mysql_fetch_array($resultc)){

$balancecharge=$row['SUM(amount)'];
}

	
echo "The sum of Availabe Dr  ".number_format($balance1,2);
echo "  - ";
echo "The sum of Availabe Cr  ".number_format($balance2,2)."<br/>";

$balance=$balance1-$balance2+$balanceaccrud-$balancecharge;
	$balance=number_format($balance,2);
	echo "The balance to be carried forward is ".$balance;


?></td>

<td align="center">&nbsp;


</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><center><?php echo date("M").' ';?><?php echo date("Y");?> UNCREDITED.</center></td>
<td><p align="center"><?php echo date("M").' ';?><?php echo date("Y");?> UNCLEARED EFFECT.</p></td>
</tr>
<tr>
<td>
<table width='100%' border='0' style='margin:auto;' class="table">
<?php
include("connect.php");
$getcredi="SELECT * FROM `cr`  WHERE `senders_account_number`='{$_GET['account']}' AND `status2`='1' AND `key`='$key'  AND `closed`='1' ";
$query4=mysql_query($getcredi);

?>
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
  </tr>

<?php 
while($row4=mysql_fetch_array($query4)){
 $bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><?php echo $row4['date'];?></td>
 <td><?php echo $row4['debit_voucher'];?></td>
  <td><?php echo $row4['beneficiary_name'];?></td> 
  <td><?php echo $row4['treasury_receipt_no'];?></td>
  
  <td><?php echo $row4['tpv_no'];?></td>
  <td><?php echo $row4['revenue_debit'];?></td>
  <td><?php echo $row4['head'];?></td>
  <td><?php echo $row4['sub_head'];?></td>
   <td><?php echo $row4['amount'];?></td>
</tr>

<?php }?>
</table>

</td>
<td><table width='100%' border='0' style='margin:auto;' class="table">
<?php
include("connect.php");
$getcredi="SELECT * FROM `cr`  WHERE `senders_account_number`='{$_GET['account']}' AND `status3`='1'  AND `key`='$key'  AND `closed`='1' ";
$query4=mysql_query($getcredi);

?>
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
  </tr>

<?php 
while($row4=mysql_fetch_array($query4)){
 $bg = ($bg=='#FF9' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><?php echo $row4['date'];?></td>
 <td><?php echo $row4['debit_voucher'];?></td>
  <td><?php echo $row4['beneficiary_name'];?></td> 
  <td><?php echo $row4['treasury_receipt_no'];?></td>
  
  <td><?php echo $row4['tpv_no'];?></td>
  <td><?php echo $row4['revenue_debit'];?></td>
  <td><?php echo $row4['head'];?></td>
  <td><?php echo $row4['sub_head'];?></td>
   <td><?php echo $row4['amount'];?></td>


</tr>

<?php }?>
</table>

</td>
</tr>
<tr>
<td align="right"><?php
$query3="SELECT SUM(amount) FROM `cr`  WHERE `senders_account_number`='{$_GET['account']}' AND `status2`='1'  AND `key`='$key'  AND `closed`='1' ";
$result3=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result3)){

echo "Total =".number_format($row['SUM(amount)'],2). "<br/>";
$balance3=$row['SUM(amount)'];
}

?></td>
<td align="right"><?php
$query3="SELECT SUM(amount) FROM `cr`  WHERE `senders_account_number`='{$_GET['account']}' AND `status3`='1'  AND `key`='$key'  AND `closed`='1' ";
$result3=mysql_query($query3) or die(mysql_error());

while($row=mysql_fetch_array($result3)){

echo "Total =".number_format($row['SUM(amount)'],2). "<br/>";
$balance4=$row['SUM(amount)'];
}

?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><p align="center">Bank Reconcilation Statement as at <?php echo date("d").' ';?><?php echo date("M").' ';?><?php echo date("Y");?></p>
</td>
</tr>

<tr>
<td><?php

$fetch="SELECT * FROM `cashbook_summary` WHERE `key`='$key' AND `accno`='{$_GET['account']}' ORDER BY `closed_on` DESC LIMIT 1 ";
$fetch=@mysql_query($fetch) or die(mysql_error());

while($row=mysql_fetch_array($fetch)){
 $ab=$row['balance_carried_fwd'];
 
 }
 if($ab==""){
	 echo "Balance Carried Foward from last month =  0.00";
 }
 if($ab!=""){
	 echo "Balance Carried Foward from last month = ".$ab;
 }
?>

</td>
<td><table width='40%' border='0' style='margin:auto;' class="table">
<tr>
<td>Balance as per cashbook</td>
<td><?php echo $balance; ?></td>
</tr>
<tr>

<td>Add Uncleareffect</td>
<td ><?php echo number_format($balance3); ?></td>
</tr>
<tr>
<td >Less Uncleareffect</td>

<td ><?php echo number_format($balance4); ?></td>
</tr>
<tr>
<td >Balance as Bank Statement</td>

<td>&nbsp;</td>
</tr>
<tr>
<td>
Bank Interest Accrude</td>
<td><?php echo number_format($balanceaccrud,2); ?></td>
</tr>
<tr>
<td>
Bank Cahrges</td>
<td><?php echo number_format($balancecharge,2); ?></td>
</tr>

</table>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<table width="100%">
<tr>
<td>Prepared By............................................................</td>
<td>Checked By............................................................ </td>
<td>Certified By............................................................</td>
</tr>

<tr>
<td>Name............................................................</td>
<td>Name............................................................</td>
<td>Name............................................................</td>
</tr>
<tr>
<td>Sign............................................................</td>
<td>Sign............................................................</td>
<td>Sign............................................................</td>
</tr>
<tr>
<td>Date............................................................</td>
<td>Date............................................................</td>
<td>Date............................................................</td>
</tr>

</table>



</tr>
<tr>
     <td colspan="2"><center><SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="Print This Page" '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT>

</center>

</td>
</tr>




<!---END BIG TABLE***************************************-----------------***************************************************-->
</table>

<!--eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->











<?php 
ob_flush();
include ("footer.php");
?>