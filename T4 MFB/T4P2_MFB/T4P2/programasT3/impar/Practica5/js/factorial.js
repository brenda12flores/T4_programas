function  factorial(){
	var num =parseFloat(prompt("Ingresa un numero"));
	var total = 1;

	for (var i =  1; i <= num; i++) {
		total =total *i;
	}
	alert("El factorail del numero "+num+"es:"+total);

}