const passwordField = document.querySelector(".form input[type='password']");
const toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
	if(passwordField.type==='password'){
		passwordField.type='text';
	}else{
		passwordField.type='password';

	}
}

