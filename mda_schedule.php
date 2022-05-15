<?php
include("head.php");

?>
<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>

<?php
if(isset($_POST['enter'])){
				$date=getdate();
	$currentmonth=strtoupper($date['month']);
	$currentyear=$date['year'];
	$key="$currentmonth $currentyear";
	$debitvoucher=mysql_escape_string($_POST['debitvoucher']);
	$beneficiaryname=mysql_escape_string($_POST['bank']);
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

	$day=$_POST['day'];
$year=$_POST['year'];
$month=$_POST['month'];
		
		$date="$day-$month-$year";

	
	
	$query=mysql_query("INSERT INTO `mda_cr` (`date`, `debit_voucher`, `beneficiary_name`, `treasury_receipt_no`, `tpv_no`, `revenue_debit`, `head`, `sub_head`, `amount`, `recipient_bank`, `recipient_account_number`, `senders_bank`, `senders_account_number`, `narration`, `entry_date`,`status`,`status2`,`status3`,`key`,`closed`) VALUES ('$date', '$debitvoucher', '$beneficiaryname', '$trerec', '$tpv', '$revenue', '$head', '$subhead', '$amount', '$recipient', '$recipientacctno', '{$_GET['bank']}', '$senderacctno', '$narration', NOW(),'1','0','0','$key','')");
	
	header("location:success.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");
	}



?>


<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <table width="100%" border="1" id="box-table-a">
<tr>
<td colspan="2">Date: </td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
<tr>
<td>Debit Voucher:
</td>
<td><input type="text" id="textfield6" class="smallInput" name="debitvoucher" value="<?php if(isset($_POST['debitvoucher'])){ echo $_POST['debitvoucher'];} ?>" />

</td>


<td>Beneficiary Name:</td>
<td><select name="bank" id="bank" class="input-text">
        <option value="">select</option>
        <option value="">---------</option>
        <?php
		
	  $ask="SELECT * FROM `mda` ORDER BY `name_mda` ASC";
	  if(!$ask=mysql_query($ask)){
		  echo "<option value=''>No Class available".mysql_error()."</option>";
		  }
		
		  while($row=mysql_fetch_array($ask)){
			  $a=$row['id'];
			   $head1=$row['head'];
			    $subhead1=$row['sub_head'];
				
			  
			  echo "<option value='{$row['name_mda']}'>{$row['name_mda']}</option>";
			  }
	  
	  ?>
        <?php if($_POST['name_mda']){echo "<option  value='{$_POST['name_mda']}' selected='selected'>{$_POST['name_mda']}</option>"; }?>
      </select>
</td>
</tr>

<tr>
<td>Treasury Receipt No.</td>
<td><input name="trerec" type="text" id="textfield6" class="smallInput" value="<?php if(isset($_POST['trerec'])){ echo $_POST['trerec'];} ?>" />

<input name="head" type="hidden" id="textfield6" class="smallInput" value="<?php echo $head1; ?>" />
<input name="subhead" type="hidden" id="textfield6" class="smallInput" value="<?php echo $subhead1; ?>" />
</td>
<td>TPV no.:</td>
<td><input  name="tpv" type="text" id="textfield6" class="smallInput" value="<?php if(isset($_POST['tpv'])){ echo $_POST['tpv'];} ?>" />
</td>
</tr>

<tr>
<td>Revenue Debit:</td>
<td><input name="revenue" type="text" id="textfield6" class="smallInput" value="<?php if(isset($_POST['revenue'])){ echo $_POST['revenue'];} ?>" />
</td>
<td>Amount:</td>
<td><input name="amount" type="text" id="textfield6" class="smallInput" value="<?php if(isset($_POST['amount'])){ echo $_POST['amount'];} ?>" />
</td>
</tr>
<tr>
<td>Recipient Bank.</td>
<td><input name="recipient" type="text" id="textfield6" class="smallInput" value="<?php if(isset($_POST['recipient'])){ echo $_POST['recipient'];} ?>" />
</td>

<td>Recipient Account no:</td>
<td><input name="recipientacctno" type="text" id="textfield6" class="smallInput" value="<?php if(isset($_POST['recipientacctno'])){ echo $_POST['recipientacctno'];} ?>" />
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
      <textarea name="narration"  id="textfield6" class="smallInput"></textarea>
      </td>
      </tr>

<tr>
<td>&nbsp;</td>
<td>
<input type="submit" name="enter" value="Enter" class="submit" style="float:right;" />
</td>
<td>&nbsp;</td>
</tr>

</form>
