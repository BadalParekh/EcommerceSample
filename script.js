function displayNextImage(){
	x = (x == images.length -1) ? 0 :x+1;
	document.getElementById("imgs").src = images[x];
}
function displayPreviousImage(){
	x = (x <= 0) ? images.length-1 : x-1;
	document.getElementById("imgs").src = images[x];
}
function startTimer(){
	setInterval(displayNextImage,3000);
}
function drop0(){
 document.getElementById("myDropdown0").classList.toggle("show");
}
function drop1(){
 document.getElementById("myDropdown1").classList.toggle("show");
}
function drop2(){
 document.getElementById("myDropdown2").classList.toggle("show");
}
function drop3(){
 document.getElementById("myDropdown3").classList.toggle("show");
}
function drop4(){
 document.getElementById("myDropdown4").classList.toggle("show");
}
function showSizes(){
	var x = document.getElementById('showSizes');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function showColors(){
	var x = document.getElementById('showColors');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function showSort(){
	var x = document.getElementById('showSort');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

window.onclick = function(e){
	if(!e.target.matches('.drop')){
		var myDropdown0 = document.getElementById("myDropdown0");
		var myDropdown1 = document.getElementById("myDropdown1");
		var myDropdown2 = document.getElementById("myDropdown2");
		var myDropdown3 = document.getElementById("myDropdown3");
		var myDropdown4 = document.getElementById("myDropdown4");
		
		if(myDropdown0.classList.contains('show')){
			myDropdown0.classList.remove('show');
		}
		if(myDropdown1.classList.contains('show')){
			myDropdown1.classList.remove('show');
		}
		if(myDropdown2.classList.contains('show')){
			myDropdown2.classList.remove('show');
		}
		if(myDropdown3.classList.contains('show')){
			myDropdown3.classList.remove('show');
		}
		if(myDropdown4.classList.contains('show')){
			myDropdown4.classList.remove('show');
		}
	}
}

var images= [], x=-1;
images[0]= "Photos/vintage-main.jpg";
images[1]= "Photos/vintage1.jpg";
images[2]= "Photos/vintage10.jpg";
images[3]= "Photos/vintage8.jpg";
images[4]= "Photos/vintage2.jpg";
images[5]= "Photos/vintage7.jpg";