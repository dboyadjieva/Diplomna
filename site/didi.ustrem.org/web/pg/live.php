<?php
if(!isset($_GET['type']))
{
	$all = $db->getTeams();
	$title_page_display = 'Teams';
	$title_page = 'Teams';
	$description_page = 'Teams';
	$key_words_page = 'Teams';
	//print_r($all);
	$step = 1;
}
else 
{
	header('Location: index.php');
}
?>