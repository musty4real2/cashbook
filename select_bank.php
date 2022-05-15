<?php
include("head.php");
?>



<?php
//this should run if you click on continue
if(isset($_POST['enter'])){
$bank=mysql_real_escape_string($_POST['bank']);
$bank=strtolower($bank);

	header("location:account_number_menu.php?a=nonsense thing&bank=$bank&a=who want to buy goat&c=programers fuunyy ooh&F=jossy jcon my bad ass nigga");
	}

?>
<table  style="background-color:#E2E2E2;  border-radius:10px; border:2px solid #fff; color:#F63; text-decoration:none;" width="100%"><tr><td width="200px" height="170">&nbsp;</td>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"/>
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