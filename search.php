

<?php
error_reporting (0);



$search_keyword = 'code';			// search Keyword

$table_ass_array = array( 
			'posts' => array( 			// TABLENAME 1 to search in
							 'post_id', 
				 			 'post_content'
							 		// Column Name A to search in
							//'COLUMNNAME_B'	  Column Name B to search in
						),
			'topics' => array(			// TABLENAME 2 to search in
							'topic_id',
				 			'topic_subject'		// Column Name A to search in
							//'COLUMNNAME_B'		// Column Name B to search in
			            ),
			'blogs' => array(			// TABLENAME 2 to search in
							'blog_id',
				 			'blog_title',		// Column Name A to search in
							'blog_content'		// Column Name B to search in
			            ),	
			'event_info' => array(			// TABLENAME 2 to search in
							'event_id',
				 			'title',		// Column Name A to search in
							'headline',		// Column Name B to search in
							'description'		// Column Name B to search in
						)					
			);

php_search_all_database($search_keyword, $table_ass_array);		// call this Awesomme function

function php_search_all_database($search_keyword,$table_ass_array){

	global $conn;							// declared global variable conn

	$db_hostname = "localhost"; 				// database hostname (default value: localhost)
	$db_username = "root"; 				// database username (default value: root)
	$db_password = ""; 				// database password (default value: password)
	$db_database_name = "OnAid_database"; 				// database name

	$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database_name, 3306);	// create connection

		if(mysqli_connect_errno()){		// Check connection
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$rt = $table_ass_array;
		echo "<b>Given Keyword :</b> ".$search_keyword . '<br>';
		echo "<b>Given tables :</b> " . implode($rt,', ') . '<br>';

		if(count($rt) > 0){ 							// check weather table column is not empty
			foreach($rt as $k=>$v){ 						// iterate column name table
				echo $table = $k;
				echo $v;
				foreach($v as $r2){	// fetch data from respective column name

					$colum = $r2;	//[0];
					$sql_search_fields = $colum . " LIKE ('%" . $search_keyword . "%')";
					$sql_search = "SELECT * FROM " . $table . " WHERE " . $sql_search_fields;
					$rs3 = $conn->query($sql_search);

					if($rs3->num_rows > 0){ 				// check weather 'keyword' found or not
						
						echo "<ul><u>Table :" . $table . '</u>';
						while($r3 = $rs3->fetch_array()){ 	// fetch result from respective data
							$count++;
							echo "<li> Column Name : " . $colum . "</li>";
							//echo "<li> Row  : " . $r3['ROW ID'] . "</li>";	// primary key column name
							echo "<li> Value : " . $r3[$colum] . "</li><br>";
						
						}	// while loop close

					}	// table data count close
					echo "</ul>";

				echo ""; }	//foreach close

				echo $table." Searching End's Here<hr>";

			}	//foreach close

		}	// Table count close
}

/*
# PHP Search All Database
With this code, you can search entire database, by narrowing down the tables &amp; column to search in. Giving the flexibility to developer and efficiency to execute faster searches by lowering down the traversing nodes.<br/>
<li>Sample, Easy & Efficient searching.</li>
<li>User friendly - pass parameters and get started</li>

# Usage

## How to use:

Assign `keyword to search` to varible `$search_keyword`
```php
$search_keyword = "keyword";                            // search Keyword
```

Enter `table names` & their repective `column names` in an associative array `$table_ass_array` to search the `given keyword`.
```php

$table_ass_array = array( 
			'TABLE NAME 1' => array( 			// TABLENAME 1 to search in
						'COLUMNNAME_A',			// Column Name A to search in
						'COLUMNNAME_B'			// Column Name B to search in
						),
			'TABLE NAME 2' => array(			// TABLENAME 2 to search in
						'COLUMNNAME_A',			// Column Name A to search in
						'COLUMNNAME_B'			// Column Name B to search in
						)
			);
```

Call this awesome function `php_search_all_database("Keyword to search", "Table name array")` as below
```php
php_search_all_database($search_keyword, $table_ass_array);       // call this Awesomme function
```
*/