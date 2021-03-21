function e(name,options,childrens){
	return {
		name, options, childrens
	}
}

function Fragment(childrens){
	return e('fragment',null, childrens);
}

function render(elm){
	if(typeof elm.name === "string"){
		var dom_element;
		if(elm.name === 'fragment'){
			dom_element = document.createDocumentFragment();
		}else{
			dom_element = document.createElement(elm.name);
		}
		if(elm.options){
			for(let option in elm.options){
				if(option === "style"){
					for(let value in elm.options.style){
						dom_element.style.setProperty(value,elm.options.style[value])
					}
					continue;
				}
				dom_element.setAttribute(option, elm.options[option]);
			}
		}
		if(elm.childrens){
			if(elm.childrens instanceof Array){
				for(let c of elm.childrens){
					dom_element.append(render(c));
				}
			}else if(typeof elm.childrens === "object"){
				dom_element.append( render(elm.childrens) );
			}else{
				dom_element.innerHTML = elm.childrens;
			}
		}
		return dom_element;
	}else{
		return render(elm.name)
	}
}

function DOMRender(elm, id, append){
	var dom = document.querySelector(id)
	if(append){
		dom.append(render(elm));
	}else{
		dom.innerHTML = "";
		dom.append( render(elm) );
	}
}
function DOMReplace(elm, id){
	var dom = document.querySelector(id)
	dom.parentNode.replaceChild(render(elm) ,dom);
}
