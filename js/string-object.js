//create a string to use for the string example
var saying= 'Home sweet home';

//create a var msg display the results
//disply the length of the string

var msg = '<h2>length</h2><p>' + saying.length + '</p>';

msg+= '<h2>uppercase</h2><p>' + saying.toLowerCase() + '</p>';

msg+= '<h2>uppercase</h2><p>' + saying.toUpperCase() + '</p>';

//display the msg on the page 
var el = document.getElementById('info');
el.innerHTML = msg;