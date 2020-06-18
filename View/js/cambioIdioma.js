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
      'Código': 'Código',
      'Superficie': ' Superficie',

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
      'Texto index': 'Bienvenidos a ReservasIU. La web ofrece un servicio de reservas de espacios en un horario específico. Los usuarios puede realizar peticiones de reservas añadiendo el uso que se le va a dar al espacio. Estas peticiones serán revisadas por un administrador que dará una respuesta lo antes posible. Los usuarios podrán revisar el calendario de ocupación de cada espacio.',
      'Acciones': 'Acciones',

      //----------------- ACCIONES -----------------
      'Add': 'Crear',
      'Showall': 'Mostrar todos',
      'Edit': 'Editar',
      'Delete': 'Eliminar',
      'Search': 'Buscar',
      'Showcurrent': 'Ver en detalle',
      'Volver': 'Volver',
      'Iniciar sesión': 'Iniciar sesión',
      'Crear cuenta': 'Crear cuenta',
      'Entrar': 'Entrar',
      'Crear': 'Crear',
      'Crear usuario': 'Crear usuario',
      'Eliminar usuario': 'Eliminar usuario',
      'Editar usuario': 'Editar usuario',
      'Buscar usuario': 'Buscar usuario',
      'Crear espacio': 'Crear espacio',
      'Eliminar espacio': 'Eliminar espacio',
      'Editar espacio': 'Editar espacio',
      'Buscar espacio': 'Buscar espacio',



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
      'Código': 'Código',
      'Superficie': ' Superficie',

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
      'Texto index': 'Benvidos a ReservasIU. A web ofrece un servizo de reservas de espazos nun horario específico. Os usuarios poden realizar peticións de reservas engadindo o uso que se lle vai dar ao espazo. Estas peticións serán revisadas por un administrador, que dará unha resposta o antes posible. Os usuarios poderán revisar o calendario de ocupación de cada espazo.',
      'Acciones': 'Accións',


      //----------------- ACCIONES -----------------
      'Add': 'Engadir',
      'Showall': 'Mostrar todos',
      'Edit': 'Editar',
      'Delete': 'Eliminar',
      'Search': 'Buscar',
      'Showcurrent': 'Ver en detalle',
      'Volver': 'Volver',
      'Iniciar sesión': 'Iniciar sesión',
      'Crear cuenta': 'Crear conta',
      'Entrar': 'Entrar',
      'Crear': 'Crear',
      'Crear usuario': 'Crear usuario',
      'Eliminar usuario': 'Eliminar usuario',
      'Editar usuario': 'Editar usuario',
      'Buscar usuario': 'Buscar usuario',
      'Crear espacio': 'Crear espazo',
      'Eliminar espacio': 'Eliminar espazo',
      'Editar espacio': 'Editar espazo',
      'Buscar espacio': 'Buscar espazo',


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
      'Código': 'Code',
      'Superficie': 'Surface',

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
      'Texto index': 'Welcome to ReservasIU. The website offers a space booking service at a specific time. Users can make booking requests by adding the use that will be given to the space. These requests will be reviewed by an administrator who will give an answer as soon as possible. Users can check the occupation schedule of each space.',
      'Acciones': 'Actions',

      //----------------- ACCIONES -----------------
      'Add': 'Add',
      'Showall': 'Showall',
      'Edit': 'EDIT',
      'Delete': 'Delete',
      'Search': 'Search',
      'Showcurrent': 'View in detail',
      'Volver': 'Go Back',
      'Iniciar sesión': 'Log in',
      'Crear cuenta': 'Create an account',
      'Entrar': 'Login',
      'Crear': 'Create account',
      'Crear usuario': 'Create user',
      'Eliminar usuario': 'Delete user',
      'Editar usuario': 'Edit user',
      'Buscar usuario': 'Search user',
      'Crear espacio': 'Create space',
      'Eliminar espacio': 'Delete space',
      'Editar espacio': 'Edit space',
      'Buscar espacio': 'Search space',

    }
  };
  for (let id in string_idioma[idioma]) {
    if (document.getElementById(id) != null) {
      document.getElementById(id).innerHTML = string_idioma[idioma][id];
    }
  }
}
