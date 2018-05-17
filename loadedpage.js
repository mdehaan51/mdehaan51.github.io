
const selectionItem = document.getElementsByClassName("selectionItem");

function addClickFeature(arr,task){
	for(let i = 0; i < arr.length; i++){
		arr[i].addEventListener("click",task)
	}
}
function startUpFunction(){
	addClickFeature(selectionItem, landingSequence)
}
//calculate center of div
function landingSequence(){
	let centerX = this.offsetLeft + this.offsetWidth / 2;
	let centerY = this.offsetTop + this.offsetHeight / 2;
	console.log(centerX)


}


window.onload = startUpFunction()