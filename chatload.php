<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "cinephilesdb";
$con = new mysqli($host, $user, $pass, $db_name);

$query = "SELECT * FROM chats";
$run = $con->query($query);
$i=0;

while($row = $run->fetch_array()) :
if($i==0){
$i=5;
$first=$row;
?>
<div id="triangle1" class="triangle1"></div>
<div id="message1" class="message1">
<span style="color:white;float:right;">
<?php echo $row['msg']; ?></span> <br/>
<div>
<span style="color:black;float:left;
font-size:10px;clear:both;">
	<?php echo $row['uname']; ?>,
		<?php echo $row['dt']; ?>
</span>
</div>
</div>
<br/><br/>
<?php
}
else
{
if($row['uname']!=$first['uname'])
{
?>
<div id="triangle" class="triangle"></div>
<div id="message" class="message">
<span style="color:white;float:left;">
<?php echo $row['msg']; ?>
</span> <br/>
<div>
<span style="color:black;float:right;
		font-size:10px;clear:both;">
<?php echo $row['uname']; ?>,
		<?php echo $row['dt']; ?>
</span>
</div>
</div>
<br/><br/>
<?php
}
else
{
?>
<div id="triangle1" class="triangle1"></div>
<div id="message1" class="message1">
<span style="color:white;float:right;">
<?php echo $row['msg']; ?>
</span> <br/>
<div>
<span style="color:black;float:left;
		font-size:10px;clear:both;">
<?php echo $row['uname']; ?>,
	<?php echo $row['dt']; ?>
</span>
</div>
</div>
<br/><br/>
<?php
}
}
endwhile;
?>