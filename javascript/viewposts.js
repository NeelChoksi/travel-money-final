

const postsList = document.querySelector("#posts_display_box");

const loadActiveTravellerBTN =document.querySelector("#loadActiveTraveller");
loadActiveTravellerBTN.onclick = ()=>{
	let xhr = new XMLHttpRequest();
	xhr.open("GET","includes/viewposts.inc.php",true);//async = true
	xhr.onload = () =>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				// console.log(data);
				if(searchBar.value==""){
					postsList.innerHTML = data;
				}
			}
		}
	}
	xhr.send();
}

// const travellerActive = ()=>{
	
// }
	
	

	

	
	