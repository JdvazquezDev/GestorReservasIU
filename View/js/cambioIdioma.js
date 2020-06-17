//Clase : cambioIdioma.js
//Fecha de modificiación : 16/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------



window.addEventListener("load", function (event) {
  cambio_idioma('')
});

//Función que se encarga del cambio de idioma
function cambio_idioma(idioma) {

  if (sessionStorage.getItem('idioma') == '' || sessionStorage.getItem('idioma') == null) {
    sessionStorage.setItem('idioma', 'ES');
    idioma = 'ES';

  }
  else if (idioma == '') {
    idioma = sessionStorage.getItem('idioma');
  }
  else {
    sessionStorage.setItem('idioma', idioma);
  }

  string_idioma = {
    'ES': {

      //----------------- Usuario ----------------- 
      'Login': 'Login',
      'Contraseña': 'Contraseña',
      'Nombre': 'Nombre',
      'Apellidos': 'Apellidos',
      'Email': 'Correo electrónico',
      'Rol': 'Rol',
      'Usuario': 'Usuario',
      'Usuarios': 'Usuarios',

      //----------------- ESPACIO -----------------
      'Espacios': 'Espacios',

      //----------------- RESERVA -----------------
      'Reservas': 'Reservas',

      //----------------- IDIOMAS -----------------
      'ENGLISH': 'Inglés',
      'SPANISH': 'Español',
      'GALLAECIAN': 'Gallego',
      'Idioma': 'Idioma',

      //----------------- PALABRAS -----------------
      'Inicio': 'Inicio',
      'Creado por:': 'Creado por:',
      'aquí': 'aquí',
      'Si no tienes cuenta, crea una ': 'Si no tienes cuenta, crea una ',
      'Si ya tienes una cuenta, inicia sesión': 'Si ya tienes una cuenta, inicia sesión',

      //----------------- ACCIONES -----------------
      'Add': 'Crear',
      'Showall': 'Mostrar todos',
      'Edit': 'Editar',
      'Delete': 'Eliminar',
      'Search': 'Buscar',
      'Showcurrent': 'Mostrar usuario',
      'Volver': 'Volver',
      'Iniciar sesión': 'Iniciar sesión',
      'Crear cuenta': 'Crear cuenta',
      'Entrar': 'Entrar',
      'Crear': 'Crear',
      'Crear usuario': 'Crear usuario',
      'Eliminar usuario': 'Eliminar usuario',
      'Editar usuario': 'Editar usuario',
      'Buscar usuario': 'Buscar usuario'

    },

    'GAL': {
      //----------------- USUARIO ----------------- 
      'Login': 'Login',
      'Contraseña': 'Contrasinal',
      'Nombre': 'Nome',
      'Apellidos': 'Apelidos',
      'Email': 'Correo electrónico',
      'Rol': 'Rol',
      'Usuario': 'Usuario',
      'Usuarios': 'Usuarios',


      //----------------- ESPACIO -----------------
      'Espacios': 'Espazos',

      //----------------- RESERVA -----------------
      'Reservas': 'Reservas',

      //----------------- IDIOMAS -----------------
      'ENGLISH': 'Inglés',
      'SPANISH': 'Castelán',
      'GALLAECIAN': 'Galego',
      'Idioma': 'Lingua',

      //----------------- PALABRAS -----------------
      'Inicio': 'Inicio',
      'Creado por:': 'Creado por:',
      'aquí': 'aquí',
      'Si no tienes cuenta, crea una ': 'Se non tes conta, crea unha ',
      'Si ya tienes una cuenta, inicia sesión': 'Se xa tes unha conta, inicia sesión',

      //----------------- ACCIONES -----------------
      'Add': 'Engadir',
      'Showall': 'Mostrar todos',
      'Edit': 'Editar',
      'Delete': 'Eliminar',
      'Search': 'Buscar',
      'Showcurrent': 'Mostrar usuario',
      'Volver': 'Volver',
      'Iniciar sesión': 'Iniciar sesión',
      'Crear cuenta': 'Crear conta',
      'Entrar': 'Entrar',
      'Crear': 'Crear',
      'Crear usuario': 'Crear usuario',
      'Eliminar usuario': 'Eliminar usuario',
      'Editar usuario': 'Editar usuario',
      'Buscar usuario': 'Buscar usuario'


    },

    'EN': {

      //----------------- USUARIO ----------------- 
      'Login': 'Login',
      'Contraseña': 'Password',
      'Nombre': 'Name',
      'Apellidos': 'Surname',
      'Email': 'Email',
      'Rol': 'Role',
      'Usuario': 'User',
      'Usuarios': 'Users',

      //----------------- ESPACIO -----------------
      'Espacios': 'Spaces',

      //----------------- RESERVA -----------------
      'Reservas': 'Bookings',


      //----------------- IDIOMAS -----------------
      'ENGLISH': 'English',
      'SPANISH': 'Spanish',
      'GALLAECIAN': 'Gallaecian',
      'Idioma': 'Language',

      //----------------- PALABRAS -----------------
      'Inicio': 'Home',
      'Creado por:': 'Created by:',
      'aquí': 'here',
      'Si no tienes cuenta, crea una ': 'If you dont have an account, create one ',
      'Si ya tienes una cuenta, inicia sesión': 'If you already have an account, log in',

      //----------------- ACCIONES -----------------
      'Add': 'Add',
      'Showall': 'Showall',
      'Edit': 'EDIT',
      'Delete': 'Delete',
      'Search': 'Search',
      'Showcurrent': 'Showcurrent',
      'Volver': 'Go Back',
      'Iniciar sesión': 'Log in',
      'Crear cuenta': 'Create an account',
      'Entrar': 'Login',
      'Crear': 'Create account',
      'Crear usuario': 'Create user',
      'Eliminar usuario': 'Delete user',
      'Editar usuario': 'Edit user',
      'Buscar usuario': 'Search user'

    }
  };
  for (let id in string_idioma[idioma]) {
    if (document.getElementById(id) != null) {
      document.getElementById(id).innerHTML = string_idioma[idioma][id];
    }
  }
}
