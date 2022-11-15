<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Start Your Project</title>

    <link href="vues/css/Accueil.css" rel="stylesheet"/>
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>

    <!-- jQuery BOOTSTRAP -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS BOOTSTRAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- JavaScript BOOTSTRAP -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container card mt-5 p-3" id="size-container">
    <h1 class="mb-3">Créez une tâche</h1>
    <div class="form-group mb-3 mx-auto">
        <form action="index.php?action=creerTache" method="post">
            <input class="form-control mt-3 mb-3" placeholder="Nom de la tâche" required autofocus name="nomtache">
            <input type="hidden"name="idProjet" class="form-control mt-3 mb-3" value="<?php echo $idProjet;?>">
            <input type="hidden"name="mail" class="form-control mt-3 mb-3" value="<?php echo "cc";?>">
            <input name="description" placeholder="Description de la tâche" class="form-control mt-3 mb-3"  >
            <input name="cout" class="form-control mt-3 mb-3" placeholder="Coût de la tâche" >
            <input type="date"name="datedebut" placeholder="Date de début" class="form-control mt-3 mb-3">
            <input name="duree" placeholder="Durée" class="form-control mt-3 mb-3"  >
            <button class="btn btn-primary" type="submit">Créer une tâche</button>
        </form>
    </div>
</div>
</body>

