<?php
if($step == 1)
{
?>
	<h1><?=$title_page_display?></h1>

<?php
		foreach ($competitions as $k=>$v)
		{
				if($k >= 6)
				{
					break;
				}
?>
			<p class="cli" name="c_<?=$k?>"><?=$v['name']?> <?=$v['group']?></p>
<div id="c_<?=$k?>" style="display:none;">
<?php
			$teams = $stat->teams($v['path'],$v['group'],$v['year']);
			foreach ($teams as $k1=>$v1)
			{
				if($k1 > 15)
				{
					break;
				}
				$url = $stat->settings['api_url'].$json_sc.'?key='.$stat->settings['key'].'&competition='.$v['path'].'&team='.$v1['path'].'&year='.$v['year'];
				$top_score = $stat->getResult($url);
				
				if(!isset($top_score['error']))
				{
?>
		<table class="f_ll">
			<tr>
				<th>Player</th>
				<th>Team</th>
				<th>Goals</th>
			</tr>
<?php
				foreach ($top_score as $k2=>$v2)
				{
					if(isset($v2['player']) && isset($v2['team']) && isset($v2['goals']))
					{
?>
					<tr>
						<td><?=$v2['player']?></td>
						<td><?=$v2['team']?></td>
						<td><?=$v2['goals']?></td>
					</tr>
<?php	
					}				
				}

?>			

		</table>

					
<?php
//echo $k2+1;
					if((($k1+1)%3) == 0)
					{
?>
			<div class="clear"></div>
<?php						
					}
				}

			}	
?>
</div>
<?php
		}
?>

	<div class="clear"></div>
<?php	
	
}
?>