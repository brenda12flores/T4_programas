function descuentaso(){
	var cantidad, total1,descuento1,descuento2,descuento3;
	var totaliva1, totaliva2,totaliva3;
	cantidad =document.getElementById("cantidad").value;
	total1 =cantidad*4000;

	descuento1=10*total1/100;
	descuento2=20*total1/100;
	descuento3=40*total1/100;
	
	if (cantidad <=5) {
		alert("Tienes un descuento del 10% "+"\nCantidad de Productos: "+cantidad+"\nTotal: "+total1+"\nMonto Final: "+(total1-descuento1)+"" );
	}else if (cantidad >5 && cantidad <10) {
		alert("Tienes un descuento del 20% "+"\nCantidad de Productos: "+cantidad+"\nTotal: "+total1+"\nMonto Final: "+(total1-descuento2)+"");
	}else if (cantidad >=10) {
		alert("Tienes un descuento del 40%"+"\nCantidad de Productos: "+cantidad+"\nTotal: "+total1+"\nMonto Final: "+(total1-descuento3)+"");
	}
	
}