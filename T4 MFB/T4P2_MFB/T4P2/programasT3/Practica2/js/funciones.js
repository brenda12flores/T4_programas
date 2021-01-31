function operacion(){
	var resultado, kilometros, costo;
	kilometros=document.getElementById("kilometros").value;
	costo=document.getElementById("costo").value;
	resultado=kilometros*costo;
	alert("El costo del boleto por " + kilometros + "kilometros, es de: " + resultado);
}