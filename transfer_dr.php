<?php
include("head.php");

?>


<?php
if(isset($_POST['enter'])){
					$date=getdate();
	$currentmonth=strtoupper($date['month']);
	$currentyear=$date['year'];
	$key="$currentmonth $currentyear";
	$treasuryrecno=mysql_escape_string($_POST['treasuryrecno']);
	$receivedfrom=mysql_escape_string($_POST['receivedfrom']);
	$bankcreditno=mysql_escape_string($_POST['bankcreditno']);
	$revenue=mysql_escape_string($_POST['revenue']);
	$head=mysql_escape_string($_POST['head']);
	$subhead=mysql_escape_string($_POST['subhead']);
	$sendersacctno=mysql_escape_string($_POST['sendersacctno']);
	$senderbank=mysql_escape_string($_POST['sendersbank']);

	$recieverbank=mysql_escape_string($_POST['recieverbank']);
	$recieveracctnumber=mysql_escape_string($_POST['recieveracctnumber']);


	$amount=mysql_escape_string($_POST['amount']);
		$day=$_POST['day'];
$year=$_POST['year'];
$month=$_POST['month'];

		
		$date="$day-$month-$year";
$deleteid2=mysql_escape_string($_POST['deleteid2']);

$set=$object->fetchRecord($deleteid2, "dr");
while($st=mysql_fetch_array($set)){

echo $c=$st['amount'];

}
$a=$c-$amount;

				function createPassword($length) {
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$i = 0;
	$Password= "";
	while ($i <= $length) {
		$Password.= $chars{mt_rand(0,strlen($chars))};
		$i++;
	}
	return $Password;
		}
	
	
	$trans=createPassword(8);

		$update="UPDATE `dr` SET `amount`='$a' WHERE `id`='{$_GET['deleteid2']}'";
	$query=mysql_query($update) or die("UPDATE ERROR:".mysql_error());

$q=mysql_query("INSERT INTO `transfer_history` (`sender_bank`, `senders_account_number`, `amount_deducted`, `recipient_bank`, `recipient_account_number`, `entry_date`, `transactionid`, `opening_balance`) VALUES ('$senderbank', '$sendersacctno', '$amount', '$recieverbank', '$recieveracctnumber', NOW(), '$trans', '$c')");
	
$query=mysql_query("INSERT INTO `dr` (`date`, `treasury_reciept_no`, `recieved_from`, `bank_credit_slip`, `revenue_debit`, `head`, `sub_head`, `senders_account_number`, `senders_bank`, `amount`,`entry_date`,`key`,`closed`) VALUES ('$date', '$treasuryrecno', '$receivedfrom', '$bankcreditno', '$revenue', '$head', '$subhead', '$recieveracctnumber', '$recieverbank', '$amount',NOW(),'$key','')");

	header("location:success.php?a=nonsense thing&bank=$senderbank&account=$sendersacctno&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");
}
?>





<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
 <center> <table width="100%" border="1" id="box-table-a">
<tr>
<td>Date:</td>
      <td>
        <select name="day" id="select" class="smallInput">
          <option value="" selected="selected">Day</option>
          <option  value="">-------</option>
          
          <?php
	  $days=range(1, 31);
	  foreach($days as $d){
		  echo "<option value='$d'>$d</option>";
		  
		  }
	  ?>
          <?php if($_POST['day']){echo "<option value='{$_POST['day']}' selected='selected'>{$_POST['day']}</option>";}
	  ?>
          </select>
        DD 
        <select name="month" id="select2" class="smallInput">
          <option value="" selected="selected">Month</option>
          <option  value="">-------</option>
          <?php
	  $mon=array("1"=>"January", "2"=>"Febraury", "3"=>"March", "4"=>"April", "5"=>"May", "6"=>"June", "7"=>"July", "8"=>"August", "9"=>"September", "10"=>"October", "11"=>"November", "12"=>"December");
	  foreach($mon as $key=>$value){
		  echo "<option value='$key'>$value</option>";
		  
		  }
	  ?>     
          <?php if($_POST['month']){echo "<option value='{$_POST['month']}' selected='selected'>{$_POST['month']}</option>";}
	  ?>
          
          </select>
        MM 
        <select name="year" id="select3" class="smallInput">
          <option value="" selected="selected">Year</option>
          <option  value="">-------</option>
          <?php
	  $days=range(1970, 2014);
	  foreach($days as $d){
		  echo "<option value='$d'>$d</option>";
		  
		  }
	  ?>
          <?php if($_POST['year']){echo "<option value='{$_POST['year']}' selected='selected'>{$_POST['year']}</option>";}
	  ?>
          
          </select>
        YYY</td>

<td>Treasury Receipt no:
</td>
<td>
<input type="text" id="textfield6" name="treasuryrecno" class="smallInput" value="<?php if(isset($_POST['treasuryrecno'])){ echo $_POST['treasuryrecno'];} ?>" />
</td>
</tr>

<tr>
<td>Received From:</td>
<td><input type="hidden" id="textfield6" name="receivedfrom" class="smallInput" value="<?php echo $object->getName($_GET['senderbank']); ?>" /><?php echo "<b style='color:#F00'>". $object->getName($_GET['senderbank'])."</b>"; ?>
</td>
<td>Bank Creditship no.</td>
<td><input type="text" id="textfield6" name="bankcreditno" class="smallInput" value="<?php if(isset($_POST['bankcreditno'])){ echo $_POST['bankcreditno'];} ?>" />
</td>
</tr>


<tr>
<td>Revenue Debits:</td>
<td><input type="text" id="textfield6" name="revenue" class="smallInput" value="<?php if(isset($_POST['revenue'])){ echo $_POST['revenue'];} ?>" />
</td>
<td>Head </td>
<td><input type="text" id="textfield6" name="head" class="smallInput" value="<?php if(isset($_POST['head'])){ echo $_POST['head'];} ?>" />
</td>
</tr>

<tr>
<td>Sub-head:</td>
<td><input type="text" id="textfield6"name="subhead" class="smallInput" value="<?php if(isset($_POST['subhead'])){ echo $_POST['subhead'];} ?>" />
</td>
<td>Amount</td>
<td><input type="text" id="textfield6" name="amount" class="smallInput" value="<?php if(isset($_POST['amount'])){ echo $_POST['amount'];} ?>" />
</td>
</tr>

<tr>
<td>Sender's Bank:</td>
<td><input type="hidden" name="sendersbank" id="textfield6" class="smallInput" value="<?php echo $object->getName($_GET['senderbank']); ?>" /><?php echo "<b style='color:#F00'>". $object->getName($_GET['senderbank'])."</b>"; ?>
</td>
<td>Sender's Account No.</td>
<td><input type="hidden" id="textfield6" name="sendersacctno" class="smallInput" value="<?php if(isset($_GET['account'])){ echo $_GET['account'];} ?>" /><?php echo "<b style='color:#F00'>".$_GET['senderaccount'].""; ?>
</td>
</tr>
<tr>
<td>Reciever's Bank:</td>
<td><input type="hidden" name="recieverbank" id="textfield6" class="smallInput" value="<?php echo $object->getName($_GET['bank']); ?>" /><?php echo "<b style='color:#F00'>". $object->getName($_GET['bank'])."</b>"; ?>
</td>
<td>Reciever's Account No.</td>
<td><input type="hidden" id="textfield6" name="recieveracctnumber" class="smallInput" value="<?php if(isset($_GET['account'])){ echo $_GET['account'];} ?>" /><?php echo "<b style='color:#F00'>".$_GET['account'].""; ?>



<td><input type="hidden" id="textfield6" name="deleteid2" class="smallInput" value="<?php if(isset($_GET['deleteid2'])){ echo $_GET['deleteid2'];} ?>" />
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="enter" value="Enter" class="submit" style="float:right;" />
</td>

</tr>
</table></center>
</form>
<?php  include("footer.php"); ?>