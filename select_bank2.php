<?php
include("head.php");
?>


<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>	<?php
    //this should run if you click on continue
    if(isset($_POST['enter'])){
    $bank=mysql_real_escape_string($_POST['bank']);
    $bank=strtolower($bank);
    $deleteid2=mysql_real_escape_string($_POST['deleteid2']);
    $senderbank=mysql_real_escape_string($_POST['senderbank']);
    $senderaccount=mysql_real_escape_string($_POST['senderaccount']);
    $senderaccountn=mysql_real_escape_string($_POST['senderaccountn']);
        header("location:account_number_menu2.php?a=nonsense thing&deleteid2=$deleteid2&senderaccount=$senderaccount&senderaccountn=$senderaccountn&senderbank=$senderbank&bank=$bank&a=who want to buy goat&c=programers fuunyy ooh&F=jossy jcon my bad ass nigga");
        }
    
    ?>
<table  style="background-color:#E2E2E2;  border-radius:10px; border:2px solid #fff; color:#F63; text-decoration:none;" width="100%"><tr><td width="200px" height="170">&nbsp;</td>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"/>
<input type="hidden" name="deleteid2" value="<?php echo $_GET['deleteid2']; ?>"/>
<input type="hidden" name="senderbank" value="<?php echo $_GET['bank']; ?>"/>
<input type="hidden" name="senderaccount" value="<?php echo $_GET['account']; ?>"/>
<input type="hidden" name="senderaccountn" value="<?php echo $_GET['accountn']; ?>"/>


<td>
        <label>Select A Bank:</label>
        <select name="bank" id="bank" class="input-text">
        <option value="">select</option>
        <option value="">---------</option>
        <?php
			include("connect.php");
	  $ask="SELECT * FROM `bank` ORDER BY `name` ASC";
	  if(!$ask=mysql_query($ask)){
		  echo "<option value=''>No Banks available".mysql_error()."</option>";
		  }
		
		  while($row=mysql_fetch_array($ask)){
			  echo "<option value='{$row['bank_id']}'>{$row['name']}</option>";
			  }
	  
	  ?>
        <?php if($_POST['name']){echo "<option  value='{$_POST['name']}' selected='selected'>{$_POST['name']}</option>"; }?>
      </select></td>

<td width="200px" height="170">
<input type="submit" class="submit" name="enter" value="CONTINUE"  /></td></form>

</tr>
</table>


<?php
include("footer.php");
?>