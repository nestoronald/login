 function formhash(form, password) {

	 var p=form.p;
	 p.value = hex_sha512(password.value);
	 password.value = "";
	 form.submit();
	 return false;
} 