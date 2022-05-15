<?php
include("head.php");
?>


<?php 
$display = 20;
 // Determine how many pages there are...
 if (isset($_GET['p']) && is_numeric($_GET
['p'])) { // Already been determined.

 $pages = $_GET['p'];
 } else { // Need to determine.

 // Count the number of records:
 $q = "SELECT * FROM `bank_account` WHERE `bank`='{$_GET['bank']}'";
 $r = mysql_query ($q);
$records=mysql_num_rows($r);
if(!$r){echo " could not select for pagination problem";}
if(empty($r)){echo "the database queryis empty";}


 // Calculate the number of pages...
 if ($records > $display) { // More than
 $pages = ceil ($records/$display);
 } else {
$pages = 1;
 }
 }
if (isset($_GET['s']) && is_numeric
($_GET['s'])) {
 $start = $_GET['s'];
 } else {
 $start = 0;
 }

?>	
    
<center><table border="0" bordercolor="#09F" style="text-align:center;" width="100%">
<tr style="background-color:#09F; color:#FFF;">
<th width="135">ACCOUNT NAME</th>
<th width="99">ACCOUNT NUMBER</th>
<th width="105">#</th>

</tr>

<?php 
	  
	  $s="SELECT * FROM `bank_account` WHERE `bank`='{$_GET['bank']}' LIMIT $start, $display";
	  $q=mysql_query($s);
		while($you=mysql_fetch_array($q)){
			$accountn=$you['account_name'];
			$account=$you['account_number'];
$bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background

 echo "<tr bgcolor='$bg' class='row'>";  ?>
	<td><?php echo"<a href='transfer_dr.php?hmmmmmmmmmmmmmm=hmmmmmmmmmm&bank={$_GET['bank']}&account=$account&accountn=$accountn&fowl eating = making sense '>". $you['account_name']."</a>"; ?></td>
	<td><?php echo $you['account_number']; ?></td>
	<td><?php echo "<a href='transfer_dr.php?hmmmmmmmmmmmmmm=hmmmmmmmmmm&bank={$_GET['bank']}&account=$account&accountn=$accountn&fowl eating = making sense&deleteid2={$_GET['deleteid2']}&senderbank={$_GET['senderbank']}&senderaccount={$_GET['senderaccount']}&senderaccountn={$_GET['senderaccountn']} '>Fill transfer form</a>";?></td>        
    <?php }?>
	</tr>

</table></center>



    <br/><br/>
<?php


//paginate the result set
if ($pages > 1) {
echo '<br /><p>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="account_number_menu.php?s=' .
($start - $display) . '&p=' . $pages . '&bank='.$_GET['bank']. 
'">Previous</a></center> ';
 }


for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="account_number_menu.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '&bank='.$_GET['bank']. '">' . $i .'</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="account_number_menu.php?s=' .
($start + $display) . '&p=' . $pages . '&bank='.$_GET['bank']. 
'">Next</a></center>';
 }

 echo '</p>';// Close the paragraph.
 
 }
 
 ?>


<?php
include("footer.php");
?>