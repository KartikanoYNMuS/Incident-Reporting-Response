
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000">
 
  </Table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['uname']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	 <?php
	if(isset($_SESSION['uname']))
	{
	 echo "<div align=\"right\"><strong>Hello ".$_SESSION['uname']."!<a href=\"signout.php\" >Signout</a></strong></div>";
	}
	 else
		{
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
