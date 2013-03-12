<style>
/*-- PromoBox Color Set 1 --*/ 
.promobox.color1 .promoheader {
    background-image: url(http://www.gsu.edu/enrollment/images/enrollment/promobox2_gray_topleft.gif);
    color: #FFF;
}
.promobox.color1 .promoheader h3{
    background-image: url(http://www.gsu.edu/enrollment/images/enrollment/promobox2_gray_topright.gif);
}
.promobox.color1 .promoheader span.bg {
    background-color: #4FA2C1;
}
.promobox.color1 .promofooter {
    background-image: url(http://www.gsu.edu/enrollment/images/enrollment/promobox1_gray_bottomleft.gif);
}
.promobox.color1 .promofooter span.bg {
    background-image: url(http://www.gsu.edu/enrollment/images/enrollment/promobox1_gray_bottomright.gif);
}
.promobox.color1 .promofooter span.bg span {
    background-color: #BAE3F1;
}
.promobox.color1 .content {
    background-color: #BAE3F1;
    color: #666;
}
</style>
<script type='text/javascript'>
	function nbrOfDaysInMonth(monthNbrValue)
	{
		//alert(monthNbr);
		//var monthNbrValue = parseInt(monthNbr, 10);
		
		if(monthNbrValue == 'JAN' || monthNbrValue =='MAR' || 
			monthNbrValue =='MAY' || monthNbrValue =='JUL' || 
			monthNbrValue =='AUG' || monthNbrValue =='OCT' || 
			monthNbrValue =='DEC')
		{
			fillDropDown(31);
		} else if (monthNbrValue =='APR' || monthNbrValue =='JUN' 
				|| monthNbrValue =='SEP' || monthNbrValue =='NOV')
		{
			fillDropDown(30);
		} else fillDropDown(29);
		
	}


function fillDropDown(nbrOfDays) 
{
	//alert('in filldropdown');
	var ddl = document.getElementById('day');
	var theOption, x, i;
	if(ddl != null)
	{
		for (i = 0; i < ddl.options.length; i++) {
  			ddl.options[i] = null;
		}
		ddl.options.length = 0;
		for(i = 0; i < nbrOfDays; i++) {
			theOption = document.createElement("option");
			x = i + 1;
			theOption.text = x;
			theOption.value = x;
			ddl.options.add(theOption);
		
		}
	}
}
</script>
<div class='promobox color1'>


  <div class='promoheader'><h3><span class='bg'><!--<span>-->Application Status Check Login<!--</span>--></span></h3></div>
  <div class='content'>

<h1><span style='color:#ff0000;'>&nbsp;</span></h1><script type='text/javascript' src='http://webdb.gsu.edu/applicantstatus/counselor/js_funcs.js'></script> 

<p>Enter the required personal information, then click the Continue button.<br>Note: Please allow 2 weeks after submitting your application to check your admission status.</p> 
<form action='https://webdb.gsu.edu/applicantstatus/index.cfm' method='POST' name='loginform' onsubmit='return validateStudentLogin(this);'> 
<table name='dataentrytable' width='100%'> 
<tbody><tr> 
<td>Date of Birth:</td> 
<td> 
<select name='birth_month' onchange ='nbrOfDaysInMonth(this.value);'> 

<option value='JAN'>January</option> 


<option value='FEB'>February</option> 

<option value='MAR'>March</option> 
<option value='APR'>April</option> 

<option value='MAY'>May</option> 

<option value='JUN'>June</option> 

<option value='JUL'>July</option> 

<option value='AUG'>August</option> 

<option value='SEP'>September</option> 

<option value='OCT'>October</option> 

<option value='NOV'>November</option> 

<option value='DEC'>December</option> 

</select> 
<select name='birth_day' id='day'> 

</select> 
<input name='birth_year' size='4' maxlength='4' value='' type='text'> 
</td> 
</tr> 
<tr> 
<td>First 3 letters of first name</td> 
<td><input name='stud_first_name_three_letters' size='3' maxlength='3' value='' type='text'></td> 
</tr> 
<tr> 
<td>Last Name</td> 
<td><input name='stud_last_name' size='30' maxlength='60' value='' type='text'></td> 
</tr> 
<tr> 
<td nowrap=''>Last 4 digits SSN</td> 
<td nowrap=''> 
<input name='stud_four_digits_ssn' size='12' maxlength='4' value='' type='text'> 
- OR - Complete Panther# <input name='stud_panther_number' size='9' maxlength='9' value='' type='text'></td> 
</tr> 
</tbody></table> 
<br> 
<input name='submit_login' value='Continue' type='submit'> 
<input value='Reset' type='reset'> 
<input name='submittedadmissionsform' value='true' type='hidden'>
</form> 
<script> 
document.loginform.stud_four_digits_ssn.value=''; 
document.loginform.stud_panther_number.value=''; 
</script> 
<script>document.loginform.reset();</script> 
  </div>
  <div class='promofooter'><span class='bg'><span>&nbsp;</span></span></div>
</div>