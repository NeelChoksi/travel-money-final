const searchBar = document.querySelector('.users .search input');

const searchBtn = document.querySelector(".users .search button");


searchBar.onkeyup = () =>{
	let searchTerm = searchBar.value;

	if(searchTerm != ""){
		let xhr = new XMLHttpRequest();
		xhr.open("POST","includes/search.inc.php",true);//async = true
		xhr.onload = () =>{
			if(xhr.readyState === XMLHttpRequest.DONE){
				if(xhr.status === 200){
					let data = xhr.response;
					console.log(data);

					usersList.innerHTML = data;
				}
			}
		}
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("searchTerm="+searchTerm);
	}

}


// searchBtn.onclick = ()=>{
// 	searchBar.classList.toggle("active");
// }

const postsList = document.querySelector("#posts_display_box");


	
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

	

	
	