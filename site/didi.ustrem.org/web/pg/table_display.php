<?php
if($step == 1)
{
?>
	<h1><?=$title_page_display?></h1>

<?php
		foreach ($competitions as $k=>$v)
		{

				$url = $stat->settings['api_url'].$json_sc.'?key='.$stat->settings['key'].'&competition='.$v['path'].'&group='.$v['group'].'&year='.$v['year'];
				$table = $stat->getResult($url);
				if($k >= 6)
				{
					break;
				}				
				if(!isset($table['error']))
				{
					
?>
				<?=$v['name']?> <?=$v['group']?><br />
		<table width="930">
			<tr>
				<th>Position</th>
				<th>Team</th>
				<th>Played</th>
				<th>Won</th>
				<th>Drawn</th>
				<th>Lost</th>
				<th>for</th>
				<th>against</th>
				<th>difference</th>
				<!--<th>home</th>
				<th>away</th>-->
				<th>points</th>
			</tr>
<?php
				foreach ($table as $k1=>$v1)
				{
					if(
						isset($v1['position']) && 
						isset($v1['team']) && 
						isset($v1['played']) && 
						isset($v1['won']) && 
						isset($v1['drawn']) && 
						isset($v1['lost']) && 
						isset($v1['for']) && 
						isset($v1['against']) && 
						isset($v1['difference']) && 
						isset($v1['home']) && 
						isset($v1['away']) && 
						isset($v1['points'])
						)
					{
?>
					<tr>
						<td><?=$v1['position']?></td>
						<td><?=$v1['team']?></td>
						<td><?=$v1['played']?></td>
						<td><?=$v1['won']?></td>
						<td><?=$v1['drawn']?></td>
						<td><?=$v1['lost']?></td>
						<td><?=$v1['for']?></td>
						<td><?=$v1['against']?></td>
						<td><?=$v1['difference']?></td>
						<!--<td>
							<table>
								<tr>
									<th>played</th>
									<th>won</th>
									<th>drawn</th>
									<th>lost</th>
									<th>for</th>
									<th>against</th>
									<th>difference</th>
								</tr>
<?php
								foreach ($v1['home'] as $k2=>$v2)
								{
?>									
									<tr>
										<td><?=$v2['played']?></td>
										<td><?=$v2['won']?></td>
										<td><?=$v2['drawn']?></td>
										<td><?=$v2['lost']?></td>
										<td><?=$v2['for']?></td>
										<td><?=$v2['against']?></td>
										<td><?=$v2['difference']?></td>
									</tr>	
<?php
								}
?>
							</table>

						<td>
							<table>
								<tr>
									<th>played</th>
									<th>won</th>
									<th>drawn</th>
									<th>lost</th>
									<th>for</th>
									<th>against</th>
									<th>difference</th>
								</tr>
<?php
								foreach ($v1['away'] as $k2=>$v2)
								{
?>									
									<tr>
										<td><?=$v2['played']?></td>
										<td><?=$v2['won']?></td>
										<td><?=$v2['drawn']?></td>
										<td><?=$v2['lost']?></td>
										<td><?=$v2['for']?></td>
										<td><?=$v2['against']?></td>
										<td><?=$v2['difference']?></td>
									</tr>	
<?php
								}
?>
							</table>						
						</td>-->
						<td><?=$v1['points']?></td>
					</tr>
<?php	
					}				
				}

?>			

		</table>
		<br />
		<br />

<?php
				}
?>

<?php


		}
?>

	<div class="clear"></div>
<?php	
	
}
?>