<script type='text/javascript'>
	function slideToggle(f){
		if(typeof f=='undefined')
			return;
			
		fo=document.getElementById(f);
		o=document.getElementById(f+'content');
 		if(o.style.display!='block'){
 		
    		fo.setAttribute('class','open');
    		o.style.opacity=0;
    		o.style.display='block';
    		o.style.height='auto';
    		
    		if(typeof h!='undefined')
      			o.style.height=h;
   			else
      			h=o.offsetHeight;
      			
    		o.style.height=0;
    		r=0;i=0;t=0;
    		var intrvl=setInterval(function(){
      			o.style.height=i+'px';
      			if(t<100){
        			o.style.opacity=t;
        			t=t+5;
      			}
      			i=i+r;r++;
      			if(i>h){
        			o.style.height=h;
        			clearInterval(intrvl);
      			}
    		},20);
 		} else {
    		r=0;i=o.offsetHeight;
    		var intrvl=setInterval(function(){
      			o.style.height=i+'px';
      			o.style.opacity=i/100;
      			i=i-r;r++;
      			if(i<1){
        			clearInterval(intrvl)
        			o.style.display='none';
        			fo.removeAttribute('class');
      			}
    		},20);
 		}
	}
	
	
	
	var showingContent = false;
	function slideToggle1(buttonToClick)
	{
		var btn1 = document.getElementById(buttonToClick);
		var cnt1 = document.getElementById(buttonToClick + 'content');
		
		if (!showingContent)
		{
			
			cnt1.style.display = 'block';
			cnt1.style.height = 'auto';
			
			var h = cnt1.offsetHeight;
			//cnt1.style.pixelHeight = h-50 + 'px';
			var i=0;
			var si = setInterval(function(){
				i=i+1;
				//cnt1.style.height = i+'px';
				cnt1.style.opacity = i/10;
				if( i == 10)
				{
					clearInterval(si);
					showingContent = true;
					//cnt1.style.display = 'inline';	
				}	
			}, 20);
			
		}
		else
		{
			var i=10;
			var h = cnt1.offsetHeight;
			var si = setInterval(function(){
									i=i-1;
									//cnt1.style.height = i+'px';
									cnt1.style.opacity = i/10;
									if( i == 1)
									{
										clearInterval(si);
										showingContent = false;	
										cnt1.style.display = 'none';
									}
								}, 20);
		}
		
		
	}
</script>

<div id='menu' onclick = 'slideToggle1(this.id);'>Show/hide</div>
<div id='menucontent' style='display:none; opacity:0'>content1<p>content2</div>

