<!DOCTYPE html>
<html>
	<head>
           <meta charset="utf-8" />
			<title><?=$title_page?></title>
			<meta name="description" content="<?=$description_page?>"/>
			<meta name="keywords" content="<?=$key_words_page?>"/>
			<link href="style.css" type="text/css" rel="stylesheet">
			<meta http-equiv="content-type" content="text/html; charset=UTF-8">
			<script src="jquery.js" type="text/javascript"></script>
			<script src="script.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
$(document).ready(function(){
$(function(){init();})
});
//-->
    function redirect_(){
        window.location = "/";
    }
</script>

    </head>
	<body>
		<div id="top" onclick="redirect_()">
			<div id="menu">
				<ul class="m_n">
					<li>
						<a href="" title="" class="<?=($_GET['nav'] == 'competitins'?'hov':'normal')?>" id="no_active1">Competitins</a>
						<ul style="margin-left:73px;">
							<li><a href="?nav=competitins&type=League" title="League" class="normal">League</a></li>
							<li><a href="?nav=competitins&type=Cup" title="Cup" class="normal">Cup</a></li>
						</ul>
					</li>
					<li>|</li>
					<li><a href="?nav=teams" title="Teams" class="<?=($_GET['nav'] == 'teams'?'hov':'normal')?>">Teams</a></li>
					<li>|</li>
					<li><a href="?nav=top_score" title="Top Score" class="<?=($_GET['nav'] == 'top_score'?'hov':'normal')?>">Top Score</a></li>
					<li>|</li>
					<li><a href="?nav=table" title="Table" class="<?=($_GET['nav'] == 'table'?'hov':'normal')?>">Table</a></li>
				</ul>
			</div>
		</div>
		
		<div id="content" <?=($nav != '' && $nav !='main'?'style="background-image: url(images/back.jpg);"':"")?>>
			<div class="contentt">