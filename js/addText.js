$('document').ready(function() {


  // Find the table containing message 'What is the REDCap Mobile App?''
  $table = $("tbody:has(td:contains('What is the REDCap Mobile App?'))");
  $table.prepend("<tr><td>"+routeMobileApiRequestText+"</td></tr>");
  $table.prepend("<tr><td><div><p> </p></div></td></tr>");

    
});


