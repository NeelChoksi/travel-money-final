const form = document.querySelector(".typing-area");

const inputField = form.querySelector("#inputtext");

const sendbtn = form.querySelector("button");

const chatbox = document.querySelector(".chat-area .chat-box");

form.onsubmit = (e)=>{
	e.preventDefault();
}

sendbtn.onclick = () =>{
	// console.log('hi');
	let xhr = new XMLHttpRequest();
	xhr.open("POST","includes/chat.inc.php",true);//async = true
	xhr.onload = () =>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				inputField.value='';
				scrollToBottom();
			}
		}
	}
	let formData = new FormData(form);
	xhr.send(formData);
	
}

chatbox.onmouseenter = ()=>{
	chatbox.classList.add("active");
}

chatbox.onmouseleave = ()=>{
	chatbox.classList.remove("active");
}

setInterval(()=>{
		let xhr = new XMLHttpRequest();
		xhr.open("POST","includes/chatdisplay.inc.php",true);//async = true
		xhr.onload = () =>{
			if(xhr.readyState === XMLHttpRequest.DONE){
				if(xhr.status === 200){
					let data = xhr.response;
					chatbox.innerHTML= data;	
					if(!chatbox.classList.contains('active')){
						scrollToBottom();

					}
				}
			}
		}
		let formData = new FormData(form);
		xhr.send(formData);
	},500);

	
const scrollToBottom = () =>{

	chatbox.scrollTop = chatbox.scrollHeight;
}