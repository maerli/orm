 async function login(){
	var email = document.querySelector('#email').value;
	var senha = document.querySelector('#senha').value;
	var feedback = document.querySelector('#feedback');
	try{
	const req = await fetch('/orm/login',{
		method:'POST',
		headers:{
			'Content-Type':'application/json'
		},
		body:JSON.stringify({email,senha})
	});
	//console.log(await req.text());
	const res = await req.json();
	feedback.innerText = res.message;
	if(res.success){
		location.replace('/orm/spu');
	}else{
		console.log(res);
	}
	}catch(err){
	console.log(err);
	}
}

document.querySelector('#form').addEventListener('submit',function(event){
	event.preventDefault();
	login();
});
