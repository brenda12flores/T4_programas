function operacion(){
	var array_palabras = new Array();
    var nueva_ventana;
    var num_palabras
  
    array_palabras=miFormulario.miArea.value.split(" "); 
    num_palabras=array_palabras.length;

    nueva_ventana=window.open("","","width=375,height=275,menubar=no"); 
    nueva_ventana.document.write("<TITLE>Array´s</TITLE>");
    nueva_ventana.document.write("<CENTER>");
    nueva_ventana.document.write("<H3>Información sobre el texto introducido...:</H3>");
    nueva_ventana.document.write("número de palabras : ");
    nueva_ventana.document.write("<B>" + num_palabras + "</B>");
    nueva_ventana.document.write("<BR>primera palabra : ");
    nueva_ventana.document.write(array_palabras[0].bold());
    nueva_ventana.document.write("<BR>última palabra : ");
    nueva_ventana.document.write(array_palabras[num_palabras-1].bold());
    nueva_ventana.document.write("<BR>colocadas al revés:<BR>");
    nueva_ventana.document.write(array_palabras.reverse().join("..").bold());
    nueva_ventana.document.write("<BR>ordenadas de la 'a' a la 'z':<BR>");
    nueva_ventana.document.write(array_palabras.sort().join("..").bold());
    nueva_ventana.document.write("<BR>ordenadas de la 'z' a la 'a':<BR>");
    nueva_ventana.document.write(array_palabras.sort().reverse().join("..").bold());
    nueva_ventana.document.write("<H3>Hecho</H3>");
    nueva_ventana.document.write("</CENTER>");
}
