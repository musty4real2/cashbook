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
<td><center><?php echo " <a href='schedule.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon2.png\" /><br/>Prepare Schedule</a>"; ?></center></td>
<td><center><?php echo " <a href='dr.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/ocon4.png\" /><br/>Enter Debit Record </a>"; ?></center></td>
<td><center><?php echo " <a href='reviewcashbook.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon1.png\" /><br/>Review Cash Book</a>"; ?></center></td>
</tr>

<tr>
<td><center><?php echo " <a href='daily_log.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon6.png\" /><br/>Daily Log</a>"; ?></center></td>
<td><center><?php echo " <a href='reconcillation.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src='images/iicon5.png' width='71' height='71'/><br/>Reconcillation</a>"; ?></center></td>

<td><center><?php echo " <a href='monthly_log.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src='images/enter.jpg' width='71' height='71'/><br/>Monthly Log</a>"; ?></center></td>
</tr>

<tr>
<td><center><?php echo " <a href='yearly_log.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon8.png\" /><br/>Yearly Log</a>"; ?></center></td>
<td><center><?php echo " <a href='setup.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/tool.jpg\" /><br/>Set Up</a>"; ?></center></td>
<td><center><?php echo " <a href='transfer.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/addfoto.JPG\" /><br/>Transfer</a>"; ?></center></td>
</tr>
<tr>
<td><center><?php echo " <a href='cashbook.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon1.png\" /><br/>View Cash Book</a>"; ?></center></td>
<td><center><?php echo " <a href='transferhistory.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon8.png\" /><br/>view Transfer history</a>"; ?></center></td>
<td><center><?php echo " <a href='mda.php?a=nonsense thing&bank={$_GET['bank']}&account={$_GET['account']}&accountn={$_GET['accountn']}'><img src=\"images/icon8.png\" /><br/>Manage MDA'S</a>"; ?></center></td>
</tr>
</table>


<?php
include("footer.php");
?>