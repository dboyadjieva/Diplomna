function init () 
{
	$('p.cli').click(
		function () 
		{
			var idd = $(this).attr("name");
			if($("#"+idd).css('display') == 'block')
			{
				$("#"+idd).fadeOut("slow");
			}
			else
			{
				$("#"+idd).fadeIn("slow");
			}
		}
	);
	

}