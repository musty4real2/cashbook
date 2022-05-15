<?php 
ob_start();
include("connect.php");
include("head.php"); 

			$date=getdate();
	$currentmonth=strtoupper($date['month']);
	$currentyear=$date['year'];
	$key="$currentmonth $currentyear";
?>

<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header></b></header>
<?php

$fetch="SELECT * FROM `cashbook_summary` WHERE `key`='$key' AND `accno`='{$_GET['account']}' ORDER BY `closed_on` DESC LIMIT 1 ";
$fetch=@mysql_query($fetch) or die(mysql_error());

while($row=mysql_fetch_array($fetch)){
 $ab=$row['balance_carried_fwd'];
 
 }
 if($ab==""){
	 echo "Balance Carried Foward from last month =  0.00";
 }
 if($ab!=""){
	 echo "<b style='float:right; font-size:12px; color:#F00;'>Balance Carried Foward from last month = ".$ab.'</b>';
 }
?>




<!---BIG TABLE------------------------------------------------------------***************************************************-->

<table width="100%" border="1" >
<tr>
<td valign="top" colspan="2"><center><h1>JOURNAL</h1></center></td>

</tr>
<tr>
<!---BIG TABLE------------------------------------------------------------***************************************************-->

<!---DIVIDE big table into two columns-----------------***************************************************-->

<td align="right" valign="top"><!---FIRST column***************************************-----------------***************************************************-->


<!---FETCH FROM DATABASE***************************************-----------------***************************************************-->
<?php
include("connect.php");
$getcredit="SELECT * FROM `dr` WHERE `senders_account_number`='{$_GET['account']}'  AND `key`='$key' ";
$query=mysql_query($getcredit);

?>


  <table width='100%' border='1' style='margin:auto;' class="table">
<tr style="background-color:#09F; color:#FFF;">
<th>DATE (DR)</th>
<th>RECIEVED FROM</th>
<th>AMOUNT(DR)</th>

  </tr>
  
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->
<?php 
while($row=mysql_fetch_array($query)){
 $bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><center><?php echo $row['date'];?></center></td>
  <td><center><?php echo $row['recieved_from'];?></center></td>
  <td><center><?php $dramount=$row['amount']; echo $row['amount'];?></center></td>


</tr>

<?php }?>

<!--- END OF  RESULT SET FROM DATABASE***************************************-************************************-->

 </table>


 </td> <!---END FIRST column********************************************************************************************-->
  
  
<!---OPEN SECOND column***************************************************************************-->
 <td align="left" valign="top">
  <table width='100%' border='1' style='margin:auto;' class="table">
  <!---FETCH FROM DATABASE***************************************-----------------***************************************************-->

<?php
include("connect.php");
$getcredit="SELECT * FROM `cr`  WHERE `senders_account_number`='{$_GET['account']}' AND `status`='1'  AND `key`='$key' ";
$query=mysql_query($getcredit);

?>
<tr style="background-color:#09F; color:#FFF;">
<th>DATE (CR)</th>
<th>PAYEE</th>
<th>AMOUNT(CR)</th>
<th>BALANCE FORMULA</th>
<th>BALANCE</th>
  </tr>
  

<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->
<?php 
while($row1=mysql_fetch_array($query)){
	$id=$row['id'];
	$sender=$row['senders_bank'];
 $bg = ($bg=='#FF9' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><?php echo $row1['date'];?></td>
 <td><?php echo $row1['beneficiary_name'];?></td>
  <td><?php $cramount=$row1['amount']; echo $row1['amount'];?></td> 
  <td></td>
  <td></td>
  </tr>
  
  <?php }?>


</table><!---CLOSE TABLE IN SECOND column****************************************************************************************-->
 
 
 
 
 </td>
 <!---END SECOND column***************************************-----------------***************************************************-->



</tr><!---CLOSE ROW IN BIIG TABLE****************************************************************************************-->
</table>

<?php 

 include("footer.php"); ?>