
<?php
include("head.php");
$fetch="SELECT * FROM `dr` LEFT JOIN `cr` ON `dr`.`senders_account_number`=`cr`.`senders_account_number`";
$fetch=@mysql_query($fetch) or
die(mysql_error());



?>


  <table width='100%' border='1' style='margin:auto;' class="table">
<tr style="background-color:#09F; color:#FFF;" height="25px">
<th>DATE (DR)</th>
<th>DATE (CR)</th>
<th>RECIEVED FROM</th>
<th>PAYEE</th>
<th>AMOUNT(DR)</th>
<th>AMOUNT(CR)</th>
<th>BALANCE</th>
  </tr>
  
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->
<?php 
while($st=mysql_fetch_array($fetch)){
 $bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><center><?php echo $st['date']; ?></center></td>
  <td><center><?php echo $st['date']; ?></center></td>
  <td><center><?php echo $st['recieved_from'];?></center></td>
  <td></td>
  <td><center><?php echo $st['amount'];?></center></td>
  <td><center><?php echo $st['amount'];?></center></td>
  <td><?php echo $ab+$cramount-$dramount; ?></td>


</tr>
<?php }?>
