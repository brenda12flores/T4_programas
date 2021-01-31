function operacion(){
	var resultado, calif1, calif2, calif3;
	calif1=document.getElementById("calif1").value*.25;
	calif2=document.getElementById("calif2").value*.25;
	calif3=document.getElementById("calif3").value*.50;
	resultado=calif1+calif2+calif3;
	alert("El promedio es " + resultado);
}