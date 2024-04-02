<?php

include 'components/connect.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Master</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<!-- header section ends -->
<div class="master" id="master">
    <div class="row">
        <div class="col">
            <button id= "login" type="button" class="btn btn-outline-light">Iniciar Sesion</button>
        </div>
        <div class="col">
            <button id= "invite" type="button" class="btn btn-outline-light" >Ingresar Como Invitado</button>
        </div>
    </div>
</div>






<?php include 'components/footer.php'; ?>






<!-- custom js file link  -->

<script src="js/master.js"></script>
</body>
</html>