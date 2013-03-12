<script type='text/javascript'>
	function nbrOfDays(str)
	{
		if(str == 'January' || str == 'March' || str == 'May' || str == 'July' || str == 'August' || str == 'October' || str == 'December')
		{
		
		}
		else if(str == 'April' || str == 'June' || str == 'September' || str == 'November')
		{
		
		}
		else if(str == 'February')
		{
		
		}
	}
	function callMe()
	{
		var objMonth = document.createElement("ddlMonth");
		objMonth.Attributes.Add("onchange", nbrOfDaysInMonth(this.value));
	}
	function nbrOfDaysInMonth(monthNbr)
	{
		//alert(monthNbr);
		var monthNbrValue = parseInt(monthNbr, 10);
		
		if(monthNbrValue ==1 || monthNbrValue ==3 || monthNbrValue ==5 || monthNbrValue ==7 ||monthNbrValue ==8 || monthNbrValue ==10 || monthNbrValue ==12)
		{
			fillDropDown(31);
		} else if (monthNbrValue ==4 || monthNbrValue ==6 || monthNbrValue ==9 || monthNbrValue ==11)
		{
			fillDropDown(30);
		} else fillDropDown(29);
		
	}

//window.onload = fillDropDown;

function fillDropDown(nbrOfDays) {
	//alert('in filldropdown');
	var ddl = document.getElementById('day1');
	var theOption, x, i;
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
</script>

<select name="month" id="ddlMonth" onchange="nbrOfDaysInMonth(this.value);">
	<?for($month=1; $month <= 12; ++$month):?>
		<?
                //this code is adding a 0 before all values less than 10
                //you don't need this code, but I prefer to have 2 digit values
		// if($month < 10)
// 		{
// 			$month = "0".$month;
// 		}
		?>
		<option value="<?=$month?>"><?=$month?></option>
	<?endfor;?>
</select>
<select name="day1" id="day1">

</select>
<select name="day">
	<?for($day=1; $day <= 31; ++$day):?>
		<?
                //this code is adding a 0 before all values less than 10
                //you don't need this code, but I prefer to have 2 digit values
		if($day < 10)
		{
			$day = "0".$day;
		}
		?>
		<option value="<?=$day?>"><?=$day?></option>
	<?endfor;?>
</select>
<select name="year">
	<?
        //The 60 value here is the amount of years to go back
	$year = date("Y") - 60;
        //The 60 value here is the amount of years to go forward
        //because i went back 60 years, i'm going forward 60 years so the dropdown will always have the current year, going back 60 years.
	for ($i = 0; $i <= 60; ++$i)
	{
		echo "<option>$year</option>"; ++$year;
	}
	?>
</select>