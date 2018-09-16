/*const avatarButtonsList = document.getElementsByClassName("avatarbutton");
const mainContainer = document.getElementById("maincontainer");
const avatarImages = document.getElementsByClassName("avatarimage");
const playerAvatarImg = document.getElementById("playerAvatar");
const selectedAvatar = document.getElementById("selectedAvatar");
let pageCounter = 0*/



function addClickFeature(arr,task){
	for(let i = 0; i < arr.length; i++){
		arr[i].addEventListener("click",task)
	}
}

function mainActivate(){
	clickedId = this.textContent
	chosenChar = document.getElementById(clickedId);
	playerAvatarImg.src = chosenChar.src
	mainContainer.style.animation = "fadeout 4s";
	mainContainer.style.visibility = "hidden";
	for(let i = 0; i < 6; i++){
		avatarButtonsList[i].disabled = true
	};
	/*for(let i = 0; i < 4; i++){
		selectionItem[i].style.animation = "fadein 3s both"
	};*/
	document.getElementById("itemsContainer").style.animation = "fadein 3s both"
	selectedAvatar.style.animation = "fadein 3s both";

	let avatarCenter = [selectedAvatar.offsetLeft + selectedAvatar.offsetWidth/2, selectedAvatar.offsetTop + selectedAvatar.offsetHeight/2];

	//add mouse tracking
	document.addEventListener("mousemove", chaseMouse)
	let avatarPos = {x:window.innerWidth/2, y:window.innerHeight/2};
	
	setInterval(trackMouse, 50);
	let mouse = {x:0, y:0}
	function chaseMouse(e){
		mouse.x = e.pageX;
		mouse.y = e.pageY;
		let angle = Math.atan2(e.pageX - avatarCenter[0],-(e.pageY - avatarCenter[1]))*(180/Math.PI);
		selectedAvatar.style.transform = "rotate(" + angle + "deg)";
	}
	function trackMouse(){
		let distX = mouse.x - avatarPos.x;
		let distY = mouse.y - avatarPos.y;
		
		avatarPos.x += distX/5;
		avatarPos.y += distY/2;
		selectedAvatar.style.left = avatarPos.x + "px";
		selectedAvatar.style.top = avatarPos.y + "px";
		
	}

}

/*function slideToCenter(element){
	var pageCenterW = window.innerWidth/2;
	var pageCenterH = window.innerHeight/2;
	var posW = element.getBoundingClientRect().x;
	var posH = element.getBoundingClientRect().y;
	console.log(pageCenterW)
	console.log(pageCenterH)
	console.log(posW)
	console.log(posH)
	element.style.top = pageCenterH;
	element.style.left = pageCenterW;
	element.style.position = "absolute";
	element.style.zIndex = 6
	element.style.opacity = 1
	/*var id = setInterval(frame,5);
	function frame(){
		if(posW > pageCenterW){
			while (posW > pageCenterW){
				posW--;
				element.style.top = posW +'px'
			}
		} else if(posW < pageCenterW){
			while(posW < pageCenterW){
				posW++;
				element.style.top = posW + 'px'
			}
		} else {
			clearInterval(id);
			console.log("o no!")
			break;
		}*/





function startUpFunction(){
	addClickFeature(avatarButtonsList, mainActivate)
	for(let i = 0; i < 6; i++){
		avatarImages[i].id = avatarButtonsList[i].textContent
	}
}

$(document).ready(function(){
	$("#contact").click(function(){
		$("#contact-modal").modal({backdrop: true});
	})
	$("#portfolio").click(function(){
		$("#portfolio-modal").modal();
	})
	$("#about").click(function(){
		$("#about-modal").modal();
	})
	$("#resume").click(function(){
		$("#resume-modal").modal();
	})
	});
;

$(".close-modal").on("click", function(){
	$(".modal").modal('hide')
})

window.onload = startUpFunction()