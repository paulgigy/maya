function mdy(todaysdate) {
var ext = "";
switch(todaysdate.getDate()) {
	case 1:
	case 21:
	case 31:
		ext = "st";
		break;
	case 2:
	case 22:
		ext = "nd";
		break;
	case 3:
	case 23:
		ext = "rd";
		break;
	default:
		ext = "th";
		break;
}
var month = "";
switch(todaysdate.getMonth()+1) {
	case 1:
		month = "January";
		break;
	case 2:
		month = "February";
		break;
	case 3:
		month = "March";
		break;
	case 4:
		month = "April";
		break;
	case 5:
		month = "May";
		break;
	case 6:
		month = "June";
		break;
	case 7:
		month = "July";
		break;
	case 8:
		month = "August";
		break;
	case 9:
		month = "September";
		break;
	case 10:
		month = "October";
		break;
	case 11:
		month = "November";
		break;
	case 12:
		month = "December";
		break;
	default:
		month = "Error";
		break;
}
return todaysdate.getDate()+ext+" "+month+", "+todaysdate.getFullYear();
}
