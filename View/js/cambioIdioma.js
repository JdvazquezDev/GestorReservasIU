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
      'LOGIN': 'Login',
      'PASSWORD': 'Contraseña',
      'NOMBRE': 'Nombre',
      'APELLIDOS': 'Apellidos',
      'EMAIL': 'Correo electrónico',
      'ROL': 'Rol',

      //----------------- ESPACIO -----------------
      'Espacios': 'Espacios',
      'Espacio': 'Espacio',
      'Código': 'Código',
      'Superficie': ' Superficie',
      'Código espacio': 'Código espacio',
      'CODESPACIO': 'Código espacio',
      'NOMBREESPACIO': 'Nombre',
      'SUPERFICIEESPACIO': 'Superficie m2',

      //----------------- RESERVA -----------------
      'Reservas': 'Reservas',
      'Fecha reserva': 'Fecha reserva',
      'Hora inicio': 'Hora inicio',
      'Hora fin': 'Hora fin',
      'Uso reserva': 'Uso reserva',
      'Creador': 'Creador',
      'CODRESERVA': 'Código reserva',
      'LOGINCREADOR': 'Login creador',
      'FECHARESERVA': 'Fecha',
      'HORARIOINICIORESERVA': 'Hora inicio',
      'HORARIOFINRESERVA': 'Hora fin',
      'USORESERVA': 'Uso',
      'VERIFICADA': 'Verificada',



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
      'True': 'Verdadero',
      'False': 'Falso',

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
      'Crear reserva': 'Crear reserva',
      'Eliminar reserva': 'Eliminar reserva',
      'Editar reserva': 'Editar reserva',
      'Buscar reserva': 'Buscar reserva',
      'Gestionar reservas': 'Gestionar reservas',

      //----------------- BBDD -----------------
      'Actualización realizada con éxito': 'Actualización realizada con éxito',
      'Borrado realizado con éxito': 'Borrado realizado con éxito',
      'Inserción realizada con éxito': 'Inserción realizada con éxito',
      'Inserción fallida: el elemento ya existe': 'Inserción fallida: el elemento ya existe',
      'La password para este usuario no es correcta': 'La contraseña para este usuario no es correcta',
      'El usuario ya existe': 'El usuario ya existe',
      'Error de gestor de base de datos': 'Error de gestor de base de datos'

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
      'LOGIN': 'Login',
      'PASSWORD': 'Contrasinal',
      'NOMBRE': 'Nome',
      'APELLIDOS': 'Apelidos',
      'EMAIL': 'Correo electrónico',
      'ROL': 'Rol',


      //----------------- ESPACIO -----------------
      'Espacios': 'Espazos',
      'Espacio': 'Espazo',
      'Código': 'Código',
      'Superficie': ' Superficie',
      'Código espacio': 'Código espazo',
      'CODRESERVA': 'Código espazo',
      'NOMBREESPACIO': 'Nome',
      'SUPERFICIEESPACIO': 'Superficie m2',


      //----------------- RESERVA -----------------
      'Reservas': 'Reservas',
      'Fecha reserva': 'Data reserva',
      'Hora inicio': 'Hora inicio',
      'Hora fin': 'Hora fin',
      'Uso reserva': 'Uso reserva',
      'Creador': 'Creador',
      'CODRESERVA': 'Código reserva',
      'LOGINCREADOR': 'Login creador',
      'FECHARESERVA': 'Data',
      'HORARIOINICIORESERVA': 'Hora inicio',
      'HORARIOFINRESERVA': 'Hora fin',
      'USORESERVA': 'Uso',
      'VERIFICADA': 'Verificada',


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
      'True': 'Verdadeiro',
      'False': 'Falso',


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
      'Crear reserva': 'Crear reserva',
      'Eliminar reserva': 'Eliminar reserva',
      'Editar reserva': 'Editar reserva',
      'Buscar reserva': 'Buscar reserva',
      'Gestionar reservas': 'Xestionar reservas',


      //----------------- BBDD -----------------
      'Actualización realizada con éxito': 'Actualización realizada con éxito',
      'Borrado realizado con éxito': 'Borrado realizado con éxito',
      'Inserción realizada con éxito': 'Inserción realizada con éxito',
      'Inserción fallida: el elemento ya existe': 'Inserción errónea: o elemento xa existe',
      'La password para este usuario no es correcta': 'O contrasinal para este usuario non é correcta',
      'El usuario ya existe': 'O usuario xa existe',
      'Error de gestor de base de datos': 'Error dr xestor de base de datos'

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
      'LOGIN': 'Login',
      'PASSWORD': 'Password',
      'NOMBRE': 'Name',
      'APELLIDOS': 'Surname',
      'EMAIL': 'Email',
      'ROL': 'Role',


      //----------------- ESPACIO -----------------
      'Espacios': 'Spaces',
      'Espacio': 'Space',
      'Código': 'Code',
      'Superficie': 'Surface',
      'Código espacio': 'Space code',
      'CODESPACIO': 'Space code',
      'NOMBREESPACIO': 'Name',
      'SUPERFICIEESPACIO': 'Surface m2',



      //----------------- RESERVA -----------------
      'Reservas': 'Bookings',
      'Fecha reserva': 'Booking date',
      'Hora inicio': 'Start time',
      'Hora fin': 'End date',
      'Uso reserva': 'Use of booking',
      'Creador': 'Creator',
      'CODRESERVA': 'Booking code',
      'LOGINCREADOR': 'Creator login',
      'FECHARESERVA': 'Date',
      'HORARIOINICIORESERVA': 'Start time',
      'HORARIOFINRESERVA': 'End time',
      'USORESERVA': 'Usage',
      'VERIFICADA': 'Verified',



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
      'True': 'True',
      'False': 'False',

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
      'Crear reserva': 'Create booking',
      'Eliminar reserva': 'Delete booking',
      'Editar reserva': 'Edit booking',
      'Buscar reserva': 'Search booking',
      'Gestionar reservas': 'Manage bookings',


      //----------------- BBDD -----------------
      'Actualización realizada con éxito': 'Successful update',
      'Borrado realizado con éxito': 'Successful delete',
      'Inserción realizada con éxito': 'Successful add',
      'Inserción fallida: el elemento ya existe': 'Insertion failed: the element already exists',
      'La password para este usuario no es correcta': 'The password for this user is not correct',
      'El usuario ya existe': 'User already exists',
      'Error de gestor de base de datos': 'Database manager error'

    }
  };
  for (let id in string_idioma[idioma]) {
    if (document.getElementById(id) != null) {
      document.getElementById(id).innerHTML = string_idioma[idioma][id];
    }
  }
}
