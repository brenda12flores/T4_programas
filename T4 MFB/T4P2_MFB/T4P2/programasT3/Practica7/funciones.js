function operacion(){
	var clasificacion = ["Ana", "Oswaldo", "Raúl", "Celia", "María", "Antonio "];
 
	document.write("Clasificación actual" + "<br>"); 
	mostrarClasificacion();
	 
	clasificacion[2] = "Celia";
	clasificacion[3] = "Raúl";
	clasificacion.pop();
	clasificacion.splice(1, 0, "Roberto", "Amaya");
	clasificacion.unshift("Marta");
	 
	document.write("<br>");
	document.write("Clasificación actualizada" + "<br>"); 
	mostrarClasificacion(); 
	
	function mostrarClasificacion() {
	    for (var i = 0; i < clasificacion.length; i++) {
	    document.write(i+1 + ". " + clasificacion[i] + "<br>");
	    }
	}
}
