<?php
include("head.php");
?>
<header><b class="return"><?php echo "<center><a href='menu.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}&a=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thinga=nonsense thing'>Back to menu</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;<a href='logout.php'>logout</a>
</center>"; ?>
</b></header>
<table width="100%" height="400">
<tr>
<td>&nbsp;</td>

<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td><center><?php echo " <a href='add_bank.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"\" />Add Bank</a>"; ?></center></td>
<td><center><?php echo " <a href='add_acc_details.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"\" />Add Account Details</a>"; ?></center></td>
<td><center><?php echo " <a href='dr.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"\" />View Cash Book</a>"; ?></center></td>
</tr>
</table>


<?php
include("footer.php");
?>