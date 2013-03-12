<?php

/**
 * @package ApplicationStatus
 * @version 1.0
 */
/*
Plugin Name: appStatus
Plugin URI:
Description: This short code outputs a form containing the following fields: Date of Birth, first three letters of first name, last name, last four digits of ssn, panther number. By entering this data and clicking on the Continue button, the student will be able to get his/her application status. 
This shortcode has no style in it - it reflects the style of the theme it is put into.
Author: IS&T
Version: 1.0
Author URI:
*/
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

	//body starts here
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
	$return_value .= "</div> ";
	return $return_value;
}

add_shortcode('appStatus','application_status');

?>