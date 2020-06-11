<header>
  <div class="header-top bg-dark d-flex justify-content-between border-bottom border-light">
    <a class="h3 a-link text-white ml-4 mt-2 " href="#"><strong>ReservasIU</strong></a>
    <div class="language-selector">
      <form name='idiomaform' action="./Functions/CambioIdioma.php" method="post">
        <select id="idioma" name="idioma" onChange='this.form.submit()'
          class="custom-select custom-select-sm mt-2 bg-light " data-width="fit">
          <option selected value="<?php echo $_SESSION['idioma'] ?>">
            <?php echo $strings[$_SESSION['idioma']] ?></option>
          <option value="SPANISH"><?php echo $strings['SPANISH'] ?></option>
          <option value="ENGLISH"><?php echo $strings['ENGLISH'] ?></option>
          <option value="GALLAECIAN"><?php echo $strings['GALLAECIAN'] ?></option>
        </select>
      </form>
    </div>
    <span class="h6 mt-3 text-white"><?php echo $strings['Usuario'] ?>: <strong>Jose</strong></span>
    <a class="a-link mr-4" href='./Functions/Desconectar.php'>
      <img class="logout-icon ml-4 mt-2" src='./View/icons/logout.svg'>
    </a>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-end">

    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active mr-3">
          <a class="nav-link" href="#"><?php echo $strings['Inicio'] ?><span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link" href="#"><?php echo $strings['Espacios'] ?></a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link" href="#"><?php echo $strings['Reservas'] ?></a>
        </li>
      </ul>
    </div>
  </nav>
</header>