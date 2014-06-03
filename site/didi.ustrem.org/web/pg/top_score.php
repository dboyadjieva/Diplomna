<?php
if(!isset($_GET['type']))
{
	$json_sc = 'top-scorers.json';
	$competitions = $db->getCompetitions();
	//$url = $stat->getResult();
	//$all = $db->getResult();
	$title_page_display = 'Top Score';
	$title_page = 'Top Score';
	$description_page = 'Top Score';
	$key_words_page = 'Top Score';
	//print_r($all);
	$step = 1;
}
else 
{
	header('Location: index.php');
}
?>