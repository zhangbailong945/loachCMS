
function uploadWindow(url,name,width,height)
{
	var left=(screen.width-width)/2;
	var top=(screen.height-height)/2;
    window.open(url,name,'width='+width+',height='+height+',top='+top+',left='+left);	
}