
//自动选择等级
$(function(){
	
	selectLevel();
	
});

function selectLevel()
{
    var level=document.getElementById("level");
    if(level!=null)
    {

	    var options=document.getElementsByTagName("option");
	    if(level)
	    {
	    	for(var i=0;i<options.length;i++)
	    		{
	    		   if(options[i].value==level.value)
	    			   {
	    			      options[i].setAttribute('selected','selected');
	    			   }
	    		}
	    }
    }
}
