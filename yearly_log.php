<?php 
include("connect.php");
include("class.php");
$object=new cash();
?>


<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>
<center><div id="content">
 <?php
  $bank=$_GET['bank'];
  
  $display = 20;
  // Determine how many pages there are...
  if (isset($_GET['p']) && is_numeric($_GET
  ['p'])) { // Already been determined.
  
  $pages = $_GET['p'];
  } else { // Need to determine.
  
  // Count the number of records:
  $q = "SELECT * FROM `cr` WHERE `senders_bank`='{$_GET['bank']}' AND `senders_account_number`='{$_GET['account']}'";
  $r = mysql_query ($q);
  $records=mysql_num_rows($r);
  if(!$r){echo " could not select for pagination problem";}
  if(empty($r)){echo "the database query is empty";}
  
  
  // Calculate the number of pages...
  if ($records > $display) { // More than
  $pages = ceil ($records/$display);
  } else {
  $pages = 1;
  }
  }
  if (isset($_GET['s']) && is_numeric
  ($_GET['s'])) {
  $start = $_GET['s'];
  } else {
  $start = 0;
  }
  
  ?>
<?php

//SQL query to pull out all registered students
$fetch="SELECT * FROM `cr` WHERE YEAR(`entry_date`)=YEAR(NOW()) AND `senders_bank`='{$_GET['bank']}'  AND `senders_account_number`='{$_GET['account']}'  ORDER BY `entry_date` ASC LIMIT $start, $display ";
$fetch=@mysql_query($fetch) or die(mysql_error());
if(mysql_num_rows($fetch)=='0'){echo "<p class='empty'>Sorry, no Schedules found for this year!</p>";}
elseif(mysql_num_rows($fetch)>'0'){


?>

<p class="empty">Below are Yearly Record Schedule </p>

  <table width='90%' border='0'style='margin:auto;' class="table">


<tr style="background-color:#09F; color:#FFF;">

<th>Transaction Refrence</th>
<th>Beneficiary Name</th>
<th>Amount</th>
<th height="41">Date</th>
<th>Beneficiary Account</th>

<th>Customer Debit account number</th>
<th>Bank Name</th>
</tr><?php

//FETCH AND SPIT IT OUT
while($row=mysql_fetch_array($fetch)){
$bg=($bg=='#cfebf2' ? '#f6f6f6' :
'#cfebf2');// Switch the background
 echo "<tr bgcolor='$bg' class='trs'>";  ?>

<td><?php echo $row['narration'];?></td>
 <td><?php echo $row['beneficiary_name'];?></td>
<td><?php echo $row['amount'];?></td>
 <td><?php echo $row['date'];?></td>
 <td><?php echo $row['recipient_account_number'];?></td>
 <td><?php echo $row['senders_account_number']; ?></td>
 <td><?php echo $object->getName($row['senders_bank']); ?></td>

</tr>

<?php
}  }
?>

<tr><td colspan="8">&nbsp;</td></tr>
<tr>
<td colspan="5">Authourised Signatory...................................</td>
<td>Authourised Signatory...............................................</td>
</tr>

<tr>
<td colspan="5">Name.............................................................</td>
<td>Name.........................................................................</td>
</tr>
<tr>
<td colspan="5">Date...............................................................</td>
<td>Date...........................................................................</td>
</tr>
</table>
<!-----------------------------------------signature---------------------------------->




    <?php
 
  //paginate result set
if ($pages > 1) {
echo '<center>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="yearly_log.php?s=' .
($start - $display) . '&p=' . $pages .'&bank='.$bank.'&bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].
'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="dailys_log.php?s=' .
(($display * ($i - 1))) . '&p=' . $pages .'&bank='.$bank.'&bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="yearly_log.php?s=' .
($start + $display) . '&p=' . $pages .'&bank='.$bank.'&bank='.$_GET['bank'].'&account='.$_GET['account'].'&accountn='.$_GET['accountn'].
'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
 }
 ?>
  
  
  <p>&nbsp;</p>
<center>   <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="  Print  " '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT>
<?php 
include ("footer.php");
?>