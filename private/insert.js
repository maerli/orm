async function insert( type, body , callback){
		if(body){
			var req = await fetch('/orm/api/'+type,{
				method:'POST',
				body: JSON.stringify(body)
			});
			var res = await req.json();
			callback(res);

		}
	}
