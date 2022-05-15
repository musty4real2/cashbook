

<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>

<?php
include("connect.php");
$getcredit="SELECT * FROM `dr` WHERE `senders_account_number`='{$_GET['account']}'";
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
<th>Recieved From</th>
<th>Bank C. Slip</th>
<th>Revenue Debit </th>
<th></th>
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
  <td><?php echo $row['date'];?></td>
  <td><?php echo $row['treasury_reciept_no'];?></td>
  <td><?php echo $row['recieved_from'];?></td>
  <td><?php echo $row['head'];?></td>
  <td><?php echo $row['sub_head'];?></td>
  <td><?php echo $row['senders_account_number'];?></td>
  <td><?php echo $row['senders_bank'];?></td>
  <td><?php echo $row['amount'];?></td>
    <td><?php echo $row['recieved_from'];?></td>
     <td><?php echo $row['bank_credit_slip'];?></td>
     <td><?php echo $row['revenue_debit']; ?></td>
      <?php echo "<td><a href='select_bank2.php?deleteid2=$id&&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Transfer Funds</a></td>"; ?> 
</tr>

<?php }?>

<!--- END OF  RESULT SET FROM DATABASE***************************************-************************************-->

 </table>


<?php include("footer.php"); ?>