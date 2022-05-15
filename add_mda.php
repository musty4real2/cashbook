<?php
include("head.php");
?>

<?php
if(isset($_POST['enter'])){

	$beneficiary_name=addslashes($_POST['beneficiary_name']);
	$head=addslashes($_POST['head']);
	
		$subhead=addslashes($_POST['subhead']);
		
	$query="INSERT INTO `mda` (`name_mda`,`head`, `sub_head`) VALUES ('$beneficiary_name','$head', '$subhead')";
	 $sql=mysql_query($query);
	 
	 	header("location:success2.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing");
	}
 ?>
 
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" class="login">
  <table width="100%" border="1" id="box-table-a">

<tr>
<td>&nbsp;</td>

<td>Name of MDA:</td>
<td><input type="text"  class="smallInput" name="beneficiary_name" value="<?php if(isset($_POST['beneficiary_name'])){ echo $_POST['beneficiary_name']; }?>"/></td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Head</td>
<td><input type="text"  class="smallInput" name="head" value="<?php if(isset($_POST['head'])){ echo $_POST['head']; }?>" /></td>
</tr>


<tr>
<td>&nbsp;</td>

<td>sub Head</td>
<td><input type="text" name="subhead" value="<?php if(isset($_GET['subhead'])){ echo $_GET['subhead'];} ?>"  class="smallInput"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>

<td><input type="submit" name="enter"   value="Enter"  class="submit"/></td>
</tr>
</table>



<?php
include("footer.php");
?>