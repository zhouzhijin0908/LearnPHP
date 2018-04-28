//menu
var isOverMainMenu = false;
var isOverSortMenu = false;
var gh = window.location.host;
function showMenu(id){
	var a = document.getElementById("mainMenu").getElementsByTagName("a");
	for(var i=0;i<a.length;i++){
		a[i].onmouseover = function() {             
            showSortMenu(this.parentNode.id);			 
			isOverMainMenu=true;           
		}
		a[i].onmouseout = function() {
			if(this.className!="current") {
				this.className = "";
				}
			setTimeout("showSortMenu('"+id+"')", 400);
			isOverMainMenu=false;
		}	
		if(a[i].parentNode.id == id) {
			a[i].className = "current";
            showSortMenu(id);
		} else {
			a[i].className = "";
		}
	}
}

function showSortMenu(id){
	var a = document.getElementById("childMenu");
	a.onmouseover = function(){
		isOverSortMenu=true;
	}
	a.onmouseout = function(){
		isOverSortMenu=false;
		a.getElementsByTagName("ul");
	}	
	if(!isOverSortMenu && !isOverMainMenu) {
		var b = document.getElementById("childMenu").getElementsByTagName("ul"); 
		for(var i=0;i<b.length;i++){
			if(b[i].id == "child_"+id) {
				b[i].className = "current";
			} else {
				b[i].className = "";
			}
		}
	}
}



