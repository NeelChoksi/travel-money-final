const form = document.querySelector(".signup form ");
const conitnueBtn = form.querySelector(".submit-btn input");
const errorText = form.querySelector(".error-txt");

form.onsubmit = (e) =>{
	e.preventDefault();
}

conitnueBtn.onclick = () =>{
	let xhr = new XMLHttpRequest();
	xhr.open("POST","includes/signin.php",true);//async = true
	xhr.onload = () =>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				// console.log(data);
				// str1.localeCompare(str2)
				if(data == 1){
					// console.log("success");
					location.href = "dashboard.php";
				}else{
					errorText.textContent = data;

					errorText.style.display = 'block';
				}
			}
		}
	}
	let formData = new FormData(form);
	xhr.send(formData);

	//xhr.send();
}