<script type='text/javascript'>
	var showingContent = false;
	function slideToggle1(divId)
	{
		
		var cnt1 = document.getElementById(divId);
		
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
	
	function showToggle(imgId)
	{
		var divSAT = document.getElementById('divSAT');
		var divACT = document.getElementById('divACT');
		var imgSAT = document.getElementById('imgSAT');
		var imgACT = document.getElementById('imgACT');
		var txtSATV = document.getElementById('txtSATV');
		var txtSATM = document.getElementById('txtSATM');
		var txtACT = document.getElementById('txtACT');
		
		if(imgId == 'imgSAT')
		{
			imgSAT.style.visibility = 'hidden';
			imgSAT.style.display = 'none';
			divSAT.style.visibility = 'visible';
			divSAT.style.display = 'inline';
			imgACT.style.visibility = 'visible';
			imgACT.style.display = 'inline';
			divACT.style.display = 'none';
			
		}
		else if (imgId == 'imgACT')
		{
			imgACT.style.visibility = 'hidden';
			imgACT.style.display = 'none';
			divACT.style.visibility = 'visible';
			divACT.style.display = 'inline';
			imgSAT.style.visibility = 'visible';
			divSAT.style.display = 'none';
			imgSAT.style.display ='inline';
		}
	}
	
	function showDecision()
	{
	
		var txtSATV = document.getElementById('txtSATV');
		var txtSATM = document.getElementById('txtSATM');
		var txtACT = document.getElementById('txtACT');
		var txtGPA = document.getElementById('txtGPA');
		var divDecision = document.getElementById('divDecision');
		var lblDecision = document.getElementById('lblDecision');
		
		var satv, satm, sat, act, gpa, fi;
		satv = ((txtSATV.value == "") ? 0:parseInt(txtSATV.value, 10));
		satm =  ((txtSATM.value == "") ? 0:parseInt(txtSATM.value,10));
		sat = satv + satm;
		act =  ((txtACT.value == "") ? 0:parseInt(txtACT.value,10));
		gpa = parseFloat(txtGPA.value,10).toFixed(2);
		
		if (act == 0)
		{
			fi = (500 * gpa) + satv + satm;
		}
		else if(satm == 0 && satv == 0)
		{
			fi = (500 * gpa) + (act * 42) + 88;
		}
		
		
		if((fi>=3150) && (sat>=1250 || act>=28))
		{
			//blue
			divDecision.style.visibility = 'visible';
			lblDecision.innerHTML = 'Honors Admission - Second Century';
		}
		else if(((fi>=3000 && fi<3150) && (sat>=1210 || act>=27)) || ((fi>=3100) && ((sat>=1210 && sat<=1240) || act == 27)))
		{
			//g.blue
			divDecision.style.visibility = 'visible';
			lblDecision.innerHTML = 'Honors Admission - 1913 Founders Scholarship';
		}	
		else if((fi>=3000 && fi<3100) && (sat>=1210 || act>=27))
		{
			//s. blue
			divDecision.style.visibility = 'visible';
			lblDecision.innerHTML = 'Honors Admission - GSU Excellence';
		}
		else if((fi>=3000) && ((sat>=1130 && sat<=1200) || (act >= 25 && act<=26)))
		{
			//yellow
			divDecision.style.visibility = 'visible';
			lblDecision.innerHTML = 'Regular Admission - Admissions Foundation Award';
		}
		else if((fi>=2900 && fi< 3000) && (sat>=1210 || act>=27))
		{
			//green
			divDecision.style.visibility = 'visible';
			lblDecision.innerHTML = 'Regular Admissions - GSU Achievement Award';
		}
		else if(((fi>=2500 && fi < 2900) && (sat>=940 || act >= 20)) || ((fi>=2900) && (sat<=1120 || act<=24))|| ((fi>=2900 && fi< 3000) && ((sat>= 1130 && sat <=1200) || (act>=25 && act <= 26))))
		{
			//y.green
			divDecision.style.visibility = 'visible';
			lblDecision.innerHTML = 'Regular Admissions';
		}
		else if(((fi >= 2450 && fi < 2500) && sat > 900) || (((sat >=900 && sat<=930)  || act == 19) && fi >= 2450))
		{
			//orange
			divDecision.style.visibility = 'visible';
			lblDecision.innerHTML = 'Summer Success Academy Admission or Panthers Excellence Program (must have a minimum of a 450 in critical reading and 450 in math';
		}
		else if(fi < 2450 || sat < 900)
		{
			divDecision.style.visibility = 'visible';
			lblDecision.innerHTML = 'Admission Denied';
		}
	}
</script>



<div>
  <div><h3>Admission Decision Maker</h3></div>
  <div>
		
			<table name='tblFreshmanIndex'> 
				<tbody><tr> 
					<td colspan='2'>Choose the test you have taken:</td> 
				</tr>
				<tr>
					<td style='border-width:2px; border-color:grey; border-style:solid' colspan = '2'> 
						<img src='SAT.jpg' id='imgSAT' style='opacity:0.2; width:120px; align:left' onclick='showToggle(this.id);' />
						<div id='divSAT' style='display:none'>
							<table>
								<tr>
									<td>
										SAT Verbal:
									</td>
									<td>
										<input type='text' id='txtSATV' size ='4' maxlength = '4' value = ''>
									</td>
								</tr>
								<tr>
									<td>
										SAT Math Score:
									</td>
									<td>
										<input type='text' id='txtSATM' size ='4' maxlength = '4' value = ''>
									</td>
								</tr>
							</table>
						</div> 
						<img src='ACT.jpg' id='imgACT' style='opacity:0.2; ; width:120px; align:right' onclick='showToggle(this.id);'  />
						<div id='divACT' style='display:none'>
							<table>
								<tr>
									<td>
										ACT Score:
									</td>
									<td>
										<input type='text' id='txtACT' size ='2' maxlength = '2' value = ''>
									</td>
								</tr>
							</table>
						<div>
					</td>
				</tr> 
				
				<tr>
					<td>
						High School GPA:
					</td>
					<td>
						<input type='text' id='txtGPA' size='16' maxlength = '4' value = ''>
					</td>
				</tr>
				<tr>
					<td colspan = '2'>
						<div id='divDecision'>
							<table>
								<tr>
									<td>
										Admissibility:
									</td>
									<td>
										<label id='lblDecision' ></label>
									</td>
								</tr>
							</table>
						</div>	
					</td>
				</tr>
				<tr>
					<td>
						<input value='Calculate' type='button' onclick='return showDecision();'> 
					</td>
					<td>
						<input value='Reset' type='reset'> 
					</td>
				</tr>
				
				<tr>
					<td colspan = '2'>
						<span style='color:red'>*Admission requirements may vary from year to year</span>
					</td>
				</tr>
				<tr>
					<td colspan = '2'>
						<span style='color:red'>**The admission requirements mentioned are the minimum values and do not guarantee an admission into GSU</span>
					</td>
				</tr>
				</tbody>
		</table>

