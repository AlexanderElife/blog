<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message alert alert-danger" role="alert">
      <span>'.$message.'</span>
      <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <section class="flex">

      <a href="home.php" class="logo">Blog</a>

      <form action="search.php" method="POST" class="search-form">
         <input type="text" name="search_box" class="box" maxlength="100" placeholder="Buscar blogs" required>
         <button type="submit" class="fas fa-search" name="search_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <nav class="navbar">
         <a href="home.php"> <i class="fas fa-angle-right"></i> Inicio</a>
         <a href="posts.php"> <i class="fas fa-angle-right"></i> Publicaciones</a>
         <a href="all_category.php"> <i class="fas fa-angle-right"></i> Categorias</a>
         <a href="authors.php"> <i class="fas fa-angle-right"></i> Autores</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> Inicio sesión</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> Registro</a>
      </nav>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <a href="update.php" class=" btn btn-success btn-lg btn-block">Actualizar perfil</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Inicio sesión</a>
            <a href="register.php" class="option-btn">Registrar</a>
         </div> 
         <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">Salir</a>
         <?php
            }else{
         ?>
            <p class="name">Iniciar sesión</p>
            <a href="login.php" class="option-btn">Inicio sesión</a>
         <?php
            }
         ?>
      </div>

   </section>
  

</header>