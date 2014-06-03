<?php
if($step == 1)
{
	$cnt = count($all);
	$cnt_columns = 5;
	$cnt_rows = ceil($cnt/$cnt_columns);
?>
	<h1><?=$title_page_display?></h1>
	<div class="l_div">
<?php
		foreach ($all as $k=>$v)
		{
?>
			<?=$v['name']?><br />
<?php
			if((($k+1)%$cnt_rows) == 0)
			{
?>
				</div>
				<div class="l_div">
<?php				
			}			
		}
?>
	</div>
	<div class="clear"></div>
<?php	
	
}
?>