<?php
include("head.php");

?>
<?php 

if($_GET['access']=='denied'){ echo "<h3 style='color:#F00;'>ACCESS DENIED!! LOGIN </h3>";
}
if($_GET['logout']==1){ echo "<h3 style='color:#F00;'>You have been loged out</h3>";
}


if(isset($_POST['login'])){
	$uname=addslashes($_POST['uname']);
	$pword=addslashes($_POST['pword']);
	
	$select="SELECT * FROM `user` WHERE `username`='$uname' AND `password`='$pword'";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
	
	if(mysql_num_rows($query)>0){
		
					$_SESSION['auth']=1;
					$_SESSION['applyersid']=$id;
				
header("location:select_bank.php");
}

		
	if(mysql_num_rows($query)==0){
echo "<p style='color:#F00;'>Invalid Username or Password</p>";
}
$choose=mysql_query("Select `id` FROM `user` WHERE `username`='$uname' AND `password`='$pword'");
		while($row=mysql_fetch_array($choose)){
		$id=$row['id'];
							$_SESSION['applyersid']=$id;

		}
}
?>

   <form  id="search" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<center><table width="90%" border="0" height="200">
  <tr>
    <td height="65"><b><h3>Username:</h3></b></td>
    <td><label>
      <input type="text" name="uname" id="uname" size="60"  autocomplete="off" autosuggest="off"/>
    </label></td>
    
  </tr>
  <tr>
    <td height="45"><b><h3>Passoword:</h3></b></td>
    <td><input type="password" name="pword" id="pword"  size="60" autocomplete="off"/></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td><label>
      <input type="submit" name="login" id="login" value="LOGIN" class="submit"/>
    </label></td>    <td>&nbsp;</td>

  </tr>
</table></center>
</form> 

<br/><br/><br/>
<?php
include("footer.php");

?>