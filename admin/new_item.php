<?php require_once("../includes/connections.php");?>
<?php require_once("../includes/functions.php");?>
<?php require_once("../includes/admin_header.php");?>
<div class="navigation">

	<a href="index.php">...back to index</a>
</div>

<div class="content">
	<h2>Add new item</h2>

	<?php 
		if (isset($_GET['c_s_sel'])){ 
		echo "<!--"	;	
		}
	?>
	<form method="get" action="new_item.php" name="sel_form">
		<fieldset>
			<legend>
				<label for="cat">Categories:</label>
				<select name="cat" >
					<?php
						//listing all the categories on the first menu.
						$category= get_all_category_by_parent(0);
						while ($cat = mysql_fetch_array($category)){
							echo "<option value=\"" . $cat['cat_id'] . "\">" . $cat['table_name'] . "</option>";		
						}
					?>
				</select>

				<!--taking the job atribute with itself. -->
				<input id="c_sel" name="c_sel" type="submit" value="Browse">
			</legend>
			
			<div></div>
			<div>
				<select name="cat_list" size="10">
					<?php
						//if category is selected, list that category, else list the first category.
						if(isset($_GET['cat'])){
							$c_s=$_GET['cat'];
						}
						else { 
							$c_s=1;
						}

						$category= get_category_by_id($c_s);//taking the listing. 
						$cat = mysql_fetch_array($category);
						$category_sub= get_all_category_by_parent($cat['cat_id']);
						while($cat_sub=mysql_fetch_array($category_sub)){
							$curr_name= $cat['table_name']. "-" . $cat_sub['table_name'];
							echo "<option value=\"" . $cat_sub['cat_id'] . "\">" . $curr_name . "</option>";	
						}	//and printing out all the category with sub category.... 
					?>
					<input id="c_s_sel" name="c_s_sel" type="submit" value="Browse">
				</select>
			</div>
		</fieldset>
	</form>
	
	<?php 
		if (isset($_GET['c_s_sel'])){ 
			echo "-->"		;
		}
		else{
			$t_name=$_GET['c_s_sel'];
			
			include("$t_name");
		}		
				
	?>
</div>

	
<?php require_once("../includes/admin_footer.php"); ?>

