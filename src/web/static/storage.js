var count = 0;
var currentColor;
var currentBackgroundColor;
var themeCount = 4;
if(localStorage.getItem('count')=="0")
	count=-1;
else if(localStorage.getItem('count')=="1")
	count=0;
else if(localStorage.getItem('count')=="2")
	count=1;
else if(localStorage.getItem('count')=="3")
	count=2;
function setStorage() {
    count = count + 1;
    if (count % themeCount == 1) {
        localStorage.setItem('bgcolor', 'black');
        localStorage.setItem('color', 'white');
        document.getElementsByTagName('main')[0].style.backgroundColor = "#333333";
        document.getElementsByTagName('aside')[0].style.backgroundColor = "#333333";
        document.getElementsByTagName('main')[0].style.color = "white";
        document.getElementsByTagName('aside')[0].style.color = "white";
    }
    else if (count % themeCount == 2) {
        localStorage.setItem('bgcolor', 'blue');
        localStorage.setItem('color', 'white');
        document.getElementsByTagName('main')[0].style.backgroundColor = "blue";
        document.getElementsByTagName('aside')[0].style.backgroundColor = "blue";
        document.getElementsByTagName('main')[0].style.color = "white";
        document.getElementsByTagName('aside')[0].style.color = "white";
    }
    else if (count % themeCount == 3) {
        localStorage.setItem('bgcolor', 'pink');
        localStorage.setItem('color', 'black');
        document.getElementsByTagName('main')[0].style.backgroundColor = "pink";
        document.getElementsByTagName('aside')[0].style.backgroundColor = "pink";
        document.getElementsByTagName('main')[0].style.color = "black";
        document.getElementsByTagName('aside')[0].style.color = "black";
    }
    else if (count % themeCount == 0) {
        localStorage.setItem('bgcolor', 'default');
        localStorage.setItem('color', 'default');
        document.getElementsByTagName('main')[0].style.backgroundColor = "#bfbfbf";
        document.getElementsByTagName('aside')[0].style.backgroundColor = "#bfbfbf";
        document.getElementsByTagName('main')[0].style.color = "#000000";
        document.getElementsByTagName('aside')[0].style.color = "#000000";
        count = 0;
    }
    currentBackgroundColor = localStorage.getItem('bgcolor');
    currentColor = localStorage.getItem('color');
	localStorage.setItem('count',count)
	document.getElementById('motyw').innerHTML = currentColor + " " + currentBackgroundColor;
	document.getElementsByName('motyw').innerHTML = currentColor + " " + currentBackgroundColor;
	}
function favPlayer(){
var para = document.createElement("p");
para.innerHTML = "Oto mój ulubiony zawodnik!";
document.getElementById('text').appendChild(para);
var player = document.createElement("div");
player.classList.add("player");
var img = document.createElement("img");
img.src = "img/messi.jpg";
player.appendChild(img);
para.appendChild(player);
document.getElementById('favPlayer').style.display = "none";

}
function saveTeam(){
	var forward;
	var midfielder;
	var defender;
	var goalkeeper;
	var score;
    forward = document.getElementsByName('forward')[0].value;
	sessionStorage.setItem('forward',forward);
	midfielder = document.getElementsByName('midfielder')[0].value;
	sessionStorage.setItem('midfielder',midfielder);
	defender = document.getElementsByName('defender')[0].value;
	sessionStorage.setItem('defender',defender);
	goalkeeper = document.getElementsByName('goalkeeper')[0].value;
	sessionStorage.setItem('goalkeeper',goalkeeper);
}
function setImg(){
	var img1, img2 ,img3, img4;
	var img1 = document.getElementsByClassName('playerPhoto')[0];
	var img2 = document.getElementsByClassName('playerPhoto')[1];
	var img3 = document.getElementsByClassName('playerPhoto')[2];
	var img4 = document.getElementsByClassName('playerPhoto')[3];
	if(sessionStorage.getItem('forward')=="1")
		img1.src = "img/messi.jpg";
	else if(sessionStorage.getItem('forward')=="2")
		img1.src = "img/ronaldo.jpg";
	else if(sessionStorage.getItem('forward')=="3")
		img1.src = "img/neymar.jpg";

	if(sessionStorage.getItem('midfielder')=="1")
		img2.src = "img/iniesta.jpg";
	else if(sessionStorage.getItem('midfielder')=="2")
		img2.src = "img/xavi.jpg";
	else if(sessionStorage.getItem('midfielder')=="3")
		img2.src = "img/arthur.jpg";

	if(sessionStorage.getItem('defender')=="1")
		img3.src = "img/laporte.jpg";
	else if(sessionStorage.getItem('defender')=="2")
		img3.src = "img/puyol.jpg";
	else if(sessionStorage.getItem('defender')=="3")
		img3.src = "img/pique.jpg";

	if(sessionStorage.getItem('goalkeeper')=="1")
		img4.src = "img/terStegen.jpg";
	else if(sessionStorage.getItem('goalkeeper')=="2")
		img4.src = "img/oblak.jpg";
	else if(sessionStorage.getItem('goalkeeper')=="3")
		img4.src = "img/neuer.jpg";
	if(sessionStorage.getItem('forward')){
		for(var i=0;i<4;i++)
			document.getElementsByClassName('player')[i].style.display = "block";
		document.getElementById('zbuduj').style.display = "none";
	}
	else{
		document.getElementById('zbuduj').innerHTML = "Nie wybrales druzyny!";
	}
}
