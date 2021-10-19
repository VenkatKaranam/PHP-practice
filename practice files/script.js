	function validate(){
	var term=document.form.keyword.value;
	if(term==""){
		alert("A keyword must be entered");
		return false;
	}
	else{
		return true;
	}}