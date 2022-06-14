var removeCartItem = document.getElementsByClassName('remove');
console.log(removeCartItem)

for(var i = 0; i<removeCartItem; i++){
	var button = removeCartItem[i];
	button.addEventListener('click', function(){
		console.log('clicked')
	})
}
