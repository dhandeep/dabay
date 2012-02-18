<?php require_once("../includes/connections.php");?>
<?php require_once("../includes/functions.php");?>
<?php require_once("../includes/admin_header.php");?>
<table>
	<tr>
		<td id="navigation">
		<a href="index.php?job=1">insert new item</a><br/>		
		<a href="index.php?job=2">insert new category</a>	<br/>	
		<a href="index.php?job=3">modify an item</a>		<br/>
		</td>
		<td id="page">
		<?php 
		if (isset($_GET['job'])) {
		
	
			if($_GET['job'] == '1'){				
				include("new_item.php");
			}
			elseif($_GET['job'] == '2'){				
				include("new_category.php");
			}
		}		
		
		?>
		</td>	
	</tr>
</table>
<?php require_once("../includes/admin_footer.php"); ?>
