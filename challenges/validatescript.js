
//validate function
function validate()
{
//validating fname
//getting value by id of the field 
var	fname=document.getElementById('fn').value;
//regular expression that matches lower and uppercase letters only
var alpha=/^[a-zA-Z]*$/;
if(!fname.match(alpha))
{
	alert('invalid First Name');
	return false;
}

//validating lname
var	lname=document.getElementById('ln').value;
if(!lname.match(alpha))
{
	alert('invalid Last Name');
	return false;
}

//validating higher qualification
var	highq=document.getElementById('hq').value;
if(!highq.match(alpha))
{
	alert('invalid Higher qualification');
	return false;
}

//validation cnic number
var	cnic=document.getElementById('cnic').value;
//pattern of cnic no is written in regular expression
var cnicpattern=/^\d{5}-\d{7}-\d{1}$/
if(!cnic.match(cnicpattern))
{
	alert('invalid CNIC');
	return false;
}

//validating experience field
//regular expression that matches alphabets and numbers
var numalpha=/^[a-zA-Z0-9]*$/;
var	experience=document.getElementById('ex').value;
if(!experience.match(numalpha))
{
	alert('invalid experience');
	return false;
}

//validating programming languages
//getting checkboxs are check are not
var c=document.getElementById('op1').checked;
var php=document.getElementById('op2').checked;
var java=document.getElementById('op3').checked;
var python=document.getElementById('op4').checked;
//if all checkboxs are not checked
if (c==false && php==false && java==false && python==false) 
 {
 	 	alert("select atleast on programming language");
 		return false;
		
}

//validating gender
var male=document.getElementById('m').checked;
var female=document.getElementById('f').checked;
if (male==false && female==false) 
 {
 			 	alert("select gender");
 			 	return false;
		
}

//validating provincec democilie
var province=document.getElementById('select1').value;
//if value of select field is default value return false
if (province=='select') {
	alert("select province of Domcilie ");
	return false;

}
//validating nation same as province democilie
var nation=document.getElementById('select2').value;
if (nation=='select') {
	alert("select Nationality ");
	return false;

}
//validating cover letter
var cover=document.getElementById('cover').value;
//if length is 0 returns false
if(cover.trim().length==0)
{
	alert("Entered Nothing in Cover Letter");
	return false;

}
//after all validations all fields return true then form page redirects to php file

}
