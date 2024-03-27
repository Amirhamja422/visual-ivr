
function goBack() {
	let array_length = user_footprint.length;
	if (array_length > 1) {
		const lastItem  = user_footprint[array_length - 1];
		const visititem = user_footprint[array_length - 2];
		user_footprint.pop(lastItem);
		loader(visititem);
	}else{
		loader('main_menu');
	}
}

function goForward() {
	window.history.forward();
}

function goHome(){
	loader('main_menu');
}