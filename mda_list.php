


<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>
<?php
include("connect.php");
$getcredit="SELECT * FROM `mda`";
$query=mysql_query($getcredit);

?>


  <table width='100%' border='0' style='margin:auto;' class="table">
<tr style="background-color:#09F; color:#FFF;" height="45px">
<th>Name of MDA'S.</th>
<th>Head</th>
<th>Sub Head</th>
<th>&nbsp;</th>
  </tr>
  
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->
<?php 
while($row=mysql_fetch_array($query)){
	$idd=$row['id'];
	$mda=$row['name_mda'];
 $bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background 
?>
<!---FETCH RESULT SET FROM DATABASE***************************************-************************************-->

<tr bgcolor="<?php echo $bg;?>">
  <td><?php echo $row['name_mda'];?></td>
  <td><?php echo $row['head'];?></td>
  <td><?php echo $row['sub_head'];?></td>
   <?php echo "<td><a href='viewreoccuring.php?deleteid=$idd&&mda=$mda&account={$_GET['account']}&accountn={$_GET['accountn']}&bank={$_GET['bank']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>View All Re-occuring Schedule  </a></td>"; ?> 

</tr>

<?php }?>

<!--- END OF  RESULT SET FROM DATABASE***************************************-************************************-->

 </table>

<br/><br/>
<?php include("footer.php"); ?>