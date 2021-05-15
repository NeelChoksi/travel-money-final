const form = document.querySelector(".signup form ");
const conitnueBtn = form.querySelector(".submit-btn input");

form.onsubmit = (e) =>{
	e.preventDefault();
}

conitnueBtn.onclick = () =>{
	let xhr = new XMLHttpRequest();
	xhr.open("POST","includes/signup.php",true);//async = true
	xhr.onload = () =>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				console.log(data);
			}
		}
	}
	let formData = new FormData(form);
	xhr.send(formData);

	//xhr.send();
}