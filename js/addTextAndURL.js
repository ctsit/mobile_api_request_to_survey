$('document').ready(function() {
	// Find the table containing message 'What is the REDCap Mobile App?''
	$table = $("tbody:has(td:contains('What is the REDCap Mobile App?'))");

	// Prepend text provided by user
	if($table.length == 1) {
		$table.prepend("<tr><td>"+mobileApiRequestToSurveyText+"</td></tr>");
		$table.prepend("<tr><td><div><p> </p></div></td></tr>");
	}

	// Find the 'Request API Token' button
	$requestTokenButton = $("button:has(span:contains('Request API token'))");

	// Modify target URL for 'Request API Token' button
	if ($requestTokenButton.length == 1) {
		$requestTokenButton.attr("onclick","window.location='"+mobileApiRequestToSurveyURL+"'");
	}
});


