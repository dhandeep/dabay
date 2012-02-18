<div>
<h2>add new item</h2>
<form>

<fieldset>
<legend>
<label for="cat">categories:</label>



</legend>
<select name="cat" size="10">
<?php
//listing all the categories on the first menu.
$category= get_all_category_by_parent(0);
while ($cat = mysql_fetch_array($category)){
	echo "<option value=\"" . $cat['cat_id'] . "\">" . $cat['table_name'] . "</option>";		
	}
?>
</select>
<div></div>
<!--taking the job atribute with itself. -->
<input type="hidden" name="job" value="2">
<input id="c_sel" name="c_sel" type="submit" value="Browse">
</form>
<form>
<?php
if(isset($_GET['cat'])){
	$c_s=$_GET['cat'];
	
}
?>
</form>
</div>