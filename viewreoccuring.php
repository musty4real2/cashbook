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
</b></header>
<?php
if(isset($_GET['msg'])){
	$mss=$_GET['msg'];
	echo "<h3>$mss</h3>";
}
$getcredit="SELECT * FROM `mda_cr` WHERE `beneficiary_name`='{$_GET['mda']}'";
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
   <?php echo "<td><a href='viewre.php?deleteid=$id&mda={$_GET['mda']}&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Add to Today's Schedule </a></td>"; ?> 

  </tr>
  
  <?php }
  ?>

 </table>

<br/><br/>
<?php include("footer.php"); ?>