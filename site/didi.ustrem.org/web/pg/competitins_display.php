<?php
if($step == 1)
{
?>
	<h1><?=$title_page_display?></h1>
	<table>
		<tr>
			<th>Group</th>
			<th>Name</th>
			<th>Year</th>
		</tr>
<?php
		foreach ($all as $k=>$v)
		{
			if($v['type'] != $_GET['type'])
			{
				continue;
			}
?>
		<tr>
			<td><?=$v['group']?></td>
			<td><?=$v['name']?></td>
			<td><?=$v['year']?></td>
		</tr>
<?php			
		}
?>
	</table>
<?php	
	
}
?>