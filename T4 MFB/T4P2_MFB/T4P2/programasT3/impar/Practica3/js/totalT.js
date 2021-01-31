function total(){
	var resultado, resultado2, resultado3, precio, marca, iva;
	precio=document.getElementById("precio").value;
	marca=document.getElementById("marca").value;
	iva=document.getElementById("iva").value;

	if(precio>=2000){
		if(marca=="NOSY" || marca=="nosy" || marca=="Nosy"){
			resultado=precio*.15;
			resultado2=precio-resultado;
			resultado3=resultado2+(precio*(iva*.01));
			alert("Costo del producto: " + precio + "\nDescuento por precio y por ser marca" + marca + " %15: " + resultado2 + "\nTotal a pagar con IVA del ."+ iva + " : " + resultado3);
		}else{
			resultado=precio*.10;
			resultado2=precio-resultado;
			resultado3=resultado2+(precio*(iva*.01));
			alert("Costo del producto: " + precio + "\nDescuento por precio del producto " + marca + " %10: " + resultado2 + "\nTotal a pagar con IVA del "+ iva + " : " + resultado3);
		}
	}else{
		resultado3=precio+(precio*(iva*.01));
		alert("Costo del producto: " + precio + "\nDescuento por precio del producto " + marca + " : 0 " + "\nTotal a pagar con IVA del "+ iva + " : " + resultado3);
	}
}