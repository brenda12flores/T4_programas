/*Roles:
1. admin
2. cliente
3. Estudiantes 
*/

function obtenerListaUsuarios(){
    var listaUsuarios = JSON.parse(localStorage.getItem('listaUsuariosLs'));

    if(listaUsuarios == null){
        // id, nombre, apellido, correo, contraseña, fecha_nac, rol
        listaUsuarios = [
            ['1','Jonatan','Quintero','jonathan.quintero@tlahuac.tecnm.mx','jonatan1','1986-02-07','1'],
            ['2','Jessi','Park','jessi@gmail.com','1233','1986-02-07','2'],
            ['3','Brenda','Flores','brendita12@gmail.com','1231','1986-02-07','1'],
            ['4','Kike','Samora','kike1@gmail.com','1234','1997-08-07','3']
        ]
       
    }
    return listaUsuarios;
}

function ListaUsuarios(){
    var listaUsuarios = JSON.parse(localStorage.getItem('listaUsuariosLs'));

    if(listaUsuarios == null){
        // id, nombre, apellido, correo, contraseña, fecha_nac, rol
        listaUsuarios = [
            ['1','Jonatan','Quintero','jonathan.quintero@tlahuac.tecnm.mx','jonatan1','1986-02-07','1'],
            ['\n2','Jessi','Park','jessi@gmail.com','1233','1986-02-07','2'],
            ['\n3','Brenda','Flores','brendita12@gmail.com','1231','1986-02-07','1'],
            ['\n4','Kike','Samora','kike1@gmail.com','1234','1997-08-07','3']
        ]
       alert("Datos de los Usuarios "+listaUsuarios);
    }
    return listaUsuarios;
}

function validarCredenciales(pCorreo, pContrasena){
    var listaUsuarios = obtenerListaUsuarios();
    var bAcceso = false;

    for(var i=0; i<listaUsuarios.length; i++){
        if (pCorreo == listaUsuarios[i][3] && pContrasena == listaUsuarios[i][4]){
            bAcceso = true;
            sessionStorage.setItem('usuarioActivo', listaUsuarios[i][1] + ' ' + listaUsuarios[i][2]);
            sessionStorage.setItem('rolUsuarioActivo', listaUsuarios[i][6]);
        }
    }
    return bAcceso;
}