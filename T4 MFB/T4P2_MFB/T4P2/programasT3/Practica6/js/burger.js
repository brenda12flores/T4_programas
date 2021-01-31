function iniciar( ) {
	
	var cantidad,opc,cargo,sencilla,doble,tripel,total,error,modopago;

	cantidad=document.getElementById('cantidad').value;

	
	for (var i = 1; i <=cantidad; i++) {
		opc = prompt("Menú de hambuerguesas \n1.- Sencilla $20\n2.- Doble $25\n3.- Triple $28\nIngresa el numero de la hambuerguesa que quieres hordenar");
		
		}

	
	if (opc == 1) {
		total = cantidad*20;
	}else if (opc == 2) {
		total =cantidad*25;
	}else if (opc == 3) {
		total=cantidad*28;
	}else{
		alert("Ingrese una opción del menú :D");
		error=1;
	}
	
	if (error == 0) {
		modopago =prompt("Ingrese el modo de pago \n 1.-Efectivo \n 2.-Tarjeta \n Elija la opción a pagar");
	}else if (modopago == 1) {
		alert("El total a pagar por "+cantidad+" hamburgesas es: $"+total);
	}else if (modopago == 2) {
		cargo =total*0.5;
		var cargo2 = total+cargo;
		alert("El total a pagar por "+cantidad+" hamburgesas es: $"+cargo2);
		alert("El cargo aplicado es: $"+cargo);
	}else{
		alert("Ingresa un tipo de pago correcto");
	}
}