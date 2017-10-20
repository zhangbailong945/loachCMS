$(function(){

	//list 隐藏域pid
	var sort=$('#sort').val();
	for(i=0;i<30;i++)
    {
		if(sort==i)
		{
			 $('#nav'+i).addClass('nav-current');
		}
		else
	    {
			$('#nav'+i).removeClass('nav-current');
		}
    }
});