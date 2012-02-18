<?php

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
	
	function get_all_category() {

		global $connection;
		$query = "SELECT * 
				FROM category ";
		$category = mysql_query($query, $connection);
		
		confirm_query($category);
		return $category;
	}
	
	function get_all_category_by_parent($par) {

		global $connection;
		$query = "SELECT * 
				FROM category WHERE par_cat_id={$par}";
				
		$category = mysql_query($query, $connection);
		
		confirm_query($category);
		return $category;
	}

	function get_category_by_id($id) {

		global $connection;
		$query = "SELECT * 
				FROM category WHERE cat_id={$id}";
				
		$category = mysql_query($query, $connection);
		
		confirm_query($category);
		return $category;
	}
	
?>