


<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>
<?php
include("connect.php");
$getcredit="SELECT * FROM `transfer_history` WHERE `senders_account_number`='{$_GET['account']}'";
$query=mysql_query($getcredit);

?>


  <table width='100%' border='0' style='margin:auto;' class="table">
<tr style="background-color:#09F; color:#FFF;" height="45px">
<th>Sender Bank.</th>
<th>Sender Account Number</th>
<th>Amount Deducted</th>
<th>Recipient Bank </th>
<th>Recipient Account Number </th>
<th>Transaction Id </th>
<th>Opening Balance</th>
  </tr>
  
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->
<?php 
while($row=mysql_fetch_array($query)){
	$id=$row['id'];
 $bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><?php echo $row['sender_bank'];?></td>
  <td><?php echo $row['senders_account_number'];?></td>
  <td><?php echo $row['amount_deducted'];?></td>
  <td><?php echo $row['recipient_bank'];?></td>
  <td><?php echo $row['recipient_account_number'];?></td>
  <td><?php echo $row['transactionid'];?></td>
  <td><?php echo $row['entry_date'];?></td>
</tr>

<?php }?>

<!--- END OF  RESULT SET FROM DATABASE***************************************-************************************-->

 </table>


<?php include("footer.php"); ?>