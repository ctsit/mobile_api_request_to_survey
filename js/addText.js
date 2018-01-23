$('document').ready(function() {

	// Find the table containing message 'What is the REDCap Mobile App?''
	$table = $("tbody:has(td:contains('What is the REDCap Mobile App?'))");

	// Prepend text provided by user
	$table.prepend("<tr><td>"+mobileApiRequestToSurveyText+"</td></tr>");
	$table.prepend("<tr><td><div><p> </p></div></td></tr>");

	// Modify target URL for 'Request API Token' button 
	// TODO
});


