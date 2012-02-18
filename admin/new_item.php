<div>
<h2>add new item</h2>


<form method="get" action="index.php?job=1" name="sel_form">
<fieldset>
<legend>
<label for="cat">categories:</label>
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
<input type="hidden" name="job" value="1">
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
</div>
