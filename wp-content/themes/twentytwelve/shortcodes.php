
<?php



function application_status0($atts){

	$return_value = "<div><label for='Date of birth' name='dbLabel' value='dbLabel'>Date of Birth:</label>";
	$return_value .= '<select name="month" id="month">';
	$return_value .= '<option value="1" ';
	if($month==1) $return_value .=  "selected";
	$return_value .= '>January</option>';
	$return_value .= '<option value="2"  <?PHP if($month==2) echo "selected";?>February</option>';
	
	$return_value .= '<option value="3"  <?PHP if($month==3) echo "selected";?>March</option>';
	$return_value .= '<option value="4"  <?PHP if($month==4) echo "selected";?>April</option>';
	$return_value .= '<option value="5"  <?PHP if($month==5) echo "selected";?>May</option>';
	$return_value .= '<option value="6"  <?PHP if($month==6) echo "selected";?>June</option>';
	$return_value .= '<option value="7"  <?PHP if($month==7) echo "selected";?>July</option>';
	$return_value .= '<option value="8"  <?PHP if($month==8) echo "selected";?>August</option>';
	$return_value .= '<option value="9"  <?PHP if($month==9) echo "selected";?>September</option>';
	$return_value .= '<option value="10" <?PHP if($month==10) echo "selected";?>October</option>';
	$return_value .= '<option value="11" <?PHP if($month==11) echo "selected";?>November</option>';
	$return_value .= '<option value="12" <?PHP if($month==12) echo "selected";?>December</option>';
$return_value .= '</select>';
 
$return_value .= '<select name="day" id="day">';

for($day=1; $day <= 31; ++$day):
		$return_value .= "<option value=$day>$day</option>";
endfor;
	
$return_value .= '</select>';
 
$return_value .= '<select name="year" id="year">';
	$year = date("Y") - 60;
	for($i=$year; $i<=$year+60; $i++)
		if($year == $i)
			$return_value .=  "<option value=$i selected>$i</option>";
		else
			$return_value .=  "<option value=$i>$i</option>";
	

	$return_value .= '</select>';
	
	$return_value .= '</div><div align="center">';
	
	$return_value .= '<label for="txtFirstName" name="lblFirstName">First three digits of first name:</label>';
	
	$return_value .= '<input type="text" name="txtFirstName" /></div>';
	
	$return_value .= '<div align="center"><label for="txtLastName" name="lblLastName">Last Name:</label>';
	
	$return_value .= '<input type="text" name="txtLastName" /></div>';
	
	$return_value .= '<div align="center"><label for="txtSSN" name="lblSSN">Last four digits of SSN:</label>';
	
	$return_value .= '<input type="text" name="txtSSN" /></div>';
	
	$return_value .= '<div align="center"> or </div><div align="center">';
	
	$return_value .= '<label for="txtPantherNbr" name="lblPantherNbr">Complete Panther#:</label>';
	
	$return_value .= '<input type="text" name="txtPantherNbr" /></div>';
	
 	return $return_value;
 	
 		$return_value = "<style>";
/*-- PromoBox Color Set 1 --*/ 
	$return_value .= ".promobox.color1 .promoheader {";
    $return_value .= "background-image: url(http://www.gsu.edu/enrollment/images/enrollment/promobox2_gray_topleft.gif);";
    $return_value .= "color: #FFF;";
$return_value .= "}";
$return_value .= ".promobox.color1 .promoheader h3{";
    $return_value .= "background-image: url(http://www.gsu.edu/enrollment/images/enrollment/promobox2_gray_topright.gif);";
$return_value .= "}";
$return_value .= ".promobox.color1 .promoheader span.bg {";
    $return_value .= "background-color: #4FA2C1;";
$return_value .= "}";
$return_value .= ".promobox.color1 .promofooter {";
    $return_value .= "background-image: url(http://www.gsu.edu/enrollment/images/enrollment/promobox1_gray_bottomleft.gif);";
$return_value .= "}";
$return_value .= ".promobox.color1 .promofooter span.bg {";
    $return_value .= "background-image: url(http://www.gsu.edu/enrollment/images/enrollment/promobox1_gray_bottomright.gif);";
$return_value .= "}";
$return_value .= ".promobox.color1 .promofooter span.bg span {";
    $return_value .= "background-color: #BAE3F1;";
$return_value .= "}";
$return_value .= ".promobox.color1 .content {";
    $return_value .= "background-color: #BAE3F1;";
    $return_value .= "color: #666;";
$return_value .= "}";
$return_value .= "</style>";

}

add_shortcode('appStatus0','application_status0');

function application_status($atts){

//script for changing number of days in the month
$return_value = "<script type='text/javascript'>";
$return_value .= "	function nbrOfDaysInMonth(monthNbrValue)";
$return_value .= "	{";
$return_value .= "		if(monthNbrValue == 'JAN' || monthNbrValue =='MAR' || ";
$return_value .= "			monthNbrValue =='MAY' || monthNbrValue =='JUL' || "; 
$return_value .= "			monthNbrValue =='AUG' || monthNbrValue =='OCT' || "; 
$return_value .= "			monthNbrValue =='DEC')";
$return_value .= "		{";
$return_value .= "			fillDropDown(31);";
$return_value .= "		} else if (monthNbrValue =='APR' || monthNbrValue =='JUN' ";
$return_value .= "				|| monthNbrValue =='SEP' || monthNbrValue =='NOV')";
$return_value .= "		{";
$return_value .= "			fillDropDown(30);";
$return_value .= "		} else fillDropDown(29);";
		
$return_value .= "	}";


$return_value .= "function fillDropDown(nbrOfDays) ";
$return_value .= "{";
$return_value .= "	var ddl = document.getElementById('day');";
$return_value .= "	var theOption, x, i;";
$return_value .= "	if(ddl != null)";
$return_value .= "	{";
$return_value .= "		for (i = 0; i < ddl.options.length; i++) {";
$return_value .= "  			ddl.options[i] = null;";
$return_value .= "		}";
$return_value .= "		ddl.options.length = 0;";
$return_value .= "		for(i = 0; i < nbrOfDays; i++) {";
$return_value .= "			theOption = document.createElement('option');";
$return_value .= "			x = i + 1;";
$return_value .= "			theOption.text = x;";
$return_value .= "			theOption.value = x;";
$return_value .= "			ddl.options.add(theOption);";
		
$return_value .= "		}";
$return_value .= "	}";
$return_value .= "}";
$return_value .= "</script>";


$return_value .= "<div>";

  $return_value .= "<h3>Application Status Check Login</h3>";
  $return_value .= "<div>";

$return_value .= "<script type='text/javascript' src='http://webdb.gsu.edu/applicantstatus/counselor/js_funcs.js'></script> ";

$return_value .= "<p>Enter the required personal information, then click the Continue button.<br>Note: Please allow 2 weeks after submitting your application to check your admission status.</p>"; 
$return_value .= "<form action='https://webdb.gsu.edu/applicantstatus/index.cfm' method='POST' name='loginform' onsubmit='return validateStudentLogin(this);'>";
 
$return_value .= "<table name='dataentrytable' width='100%'>";
$return_value .= "<tbody><tr> 
<td>Date of Birth:</td> 
<td>";
 
$return_value .= "<select name='birth_month' id='month' onchange = 'nbrOfDaysInMonth(this.value)'; >";

	$return_value .= "<option value='JAN'  <?PHP if($month=='JAN') echo 'selected';?>January</option>";
	$return_value .= "<option value='FEB'  <?PHP if($month=='FEB') echo 'selected';?>February</option>";
	
	$return_value .= "<option value='MAR'  <?PHP if($month=='MAR') echo 'selected';?>March</option>";
	$return_value .= "<option value='APR'  <?PHP if($month=='APR') echo 'selected';?>April</option>";
	$return_value .= "<option value='MAY'  <?PHP if($month=='MAY') echo 'selected';?>May</option>";
	$return_value .= "<option value='JUN'  <?PHP if($month=='JUN') echo 'selected';?>June</option>";
	$return_value .= "<option value='JUL'  <?PHP if($month=='JUL') echo 'selected';?>July</option>";
	$return_value .= "<option value='AUG'  <?PHP if($month=='AUG') echo 'selected';?>August</option>";
	$return_value .= "<option value='SEP'  <?PHP if($month=='SEP') echo 'selected';?>September</option>";
	$return_value .= "<option value='OCT' <?PHP if($month=='OCT') echo 'selected';?>October</option>";
	$return_value .= "<option value='NOV' <?PHP if($month=='NOV') echo 'selected';?>November</option>";
	$return_value .= "<option value='DEC' <?PHP if($month=='DEC') echo 'selected';?>December</option>";
$return_value .= "</select>";
 
$return_value .= "<select name='day' id='day'>";

for($dayCounter=1; $dayCounter <= 31; ++$dayCounter):
		$return_value .= "<option value=$dayCounter <?php if($day == $dayCounter) echo 'selected';?>$dayCounter</option>";
endfor;
	
$return_value .= "</select>";

$return_value .= "<input name='birth_year' size='4' maxlength='4' value='' type='text'> ";
$return_value .= "</td>  ";
$return_value .= "</tr>  ";
$return_value .= "<tr>  ";
$return_value .= "<td>First 3 letters of first name</td>  ";
$return_value .= "<td><input name='stud_first_name_three_letters' size='3' maxlength='3' value='' type='text'></td> ";
$return_value .= "</tr>  ";
$return_value .= "<tr>  ";
$return_value .= "<td>Last Name</td>  ";
$return_value .= "<td><input name='stud_last_name' size='30' maxlength='60' value='' type='text'></td>  ";
$return_value .= "</tr>  ";
$return_value .= "<tr>  ";
$return_value .= "<td nowrap=''>Last 4 digits SSN</td>  ";
$return_value .= "<td nowrap=''>  ";
$return_value .= "<input name='stud_four_digits_ssn' size='12' maxlength='4' value='' type='text'> "; 
$return_value .= "- OR - Complete Panther# <input name='stud_panther_number' size='9'    maxlength='9' value='' type='text'></td>  ";
$return_value .= "</tr>  ";
$return_value .= "</tbody></table>  ";
$return_value .= "<br>  ";
$return_value .= "<input name='submit_login' value='Continue' type='submit'> ";
$return_value .= "<input value='Reset' type='reset'> ";
$return_value .= "<input name='submittedadmissionsform' value='true' type='hidden'>";
$return_value .= "</form> ";
$return_value .= "<script> ";
$return_value .= "document.loginform.stud_four_digits_ssn.value=''; ";
$return_value .= "document.loginform.stud_panther_number.value='';  ";
$return_value .= "</script>  ";
$return_value .= "<script>document.loginform.reset();</script>  ";
$return_value .= "  </div> ";
//$return_value .= "  <div><span class='bg'><span>&nbsp;</span></span></div> ";
$return_value .= "</div> ";
	return $return_value;
}

add_shortcode('appStatus1','application_status');

?>