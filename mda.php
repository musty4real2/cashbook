<?php
include("head.php");
?>

<table width="100%" height="400">
<tr>
<td>&nbsp;</td>

<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>

<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr><tr>
<td>&nbsp;</td>

<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td><center><?php echo " <a href='add_mda.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon2.png\" /><br/>Add MDA</a>"; ?></center></td>
<td><center><?php echo " <a href='mda_schedule.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/ocon4.png\" /><br/>Prepare MDA schedule</a>"; ?></center></td>
<td><center><?php echo " <a href='mda_list.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon1.png\" /><br/>View List of MDA'S</a>"; ?></center></td>
</tr>
</table>


<?php
include("footer.php");
?>