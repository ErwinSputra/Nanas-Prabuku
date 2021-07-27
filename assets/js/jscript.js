function ngumpet(){
	var tom= document.getElementById("tombol");

	var utara= document.getElementById("utara");
	var selatan= document.getElementById("selatan");
	var barat= document.getElementById("barat");
	var timur= document.getElementById("timur");
	var rkt=document.getElementById("erkate");
	var cambai=document.getElementById("timur");
	var peta=document.getElementById("peta");

	var isi=tom.getAttribute("value");

	if (isi=="nyala") {
		document.getElementById("tombol").setAttribute("value","mati");
		document.getElementById("utara").setAttribute("class","utarabalik col");
		document.getElementById("selatan").setAttribute("class","selatanbalik col");
		document.getElementById("barat").setAttribute("class","baratbalik col");
		document.getElementById("timur").setAttribute("class","timurbalik col");
		document.getElementById("erkate").setAttribute("class","erkatebalik col");
		document.getElementById("cambai").setAttribute("class","cambaibalik col");
		document.getElementById("peta").setAttribute("class","petabesak col");

	}
	else{
		document.getElementById("tombol").setAttribute("value","nyala");
		document.getElementById("utara").setAttribute("class","utara col");
		document.getElementById("selatan").setAttribute("class","selatan col");
		document.getElementById("barat").setAttribute("class","barat col");
		document.getElementById("timur").setAttribute("class","timur col");
		document.getElementById("erkate").setAttribute("class","erkate col");
		document.getElementById("cambai").setAttribute("class","cambai col");
		document.getElementById("peta").setAttribute("class","peta col");
		
	}

}
