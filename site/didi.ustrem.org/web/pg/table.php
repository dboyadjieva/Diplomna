<?php
if(!isset($_GET['type']))
{
	$json_sc = 'table.json';
	$competitions = $db->getCompetitions();
	
	$title_page_display = 'Table';
	$title_page = 'Table';
	$description_page = 'Table';
	$key_words_page = 'Table';
	//print_r($all);
	$step = 1;
}
else 
{
	header('Location: index.php');
}
?>