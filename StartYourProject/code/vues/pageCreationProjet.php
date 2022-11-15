<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Start Your Project</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/CreationProjet.css" rel="stylesheet"/>
</head>

<body>
<div class="container">
    <nav class="navbar navbar-expand">
        <a class="navbar-brand" href="#">Start Your Project</a>
        <div class="navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Projet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Crédit</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
</nav>

<form method="post" action="index.php?action=AjouterProjet">
    <div class="container mt-5">
        <h4>Création de Projet</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Entrez le nom du projet</label>
                <input name="nomProjet" type="text" class="form-control" placeholder="Nom du projet" required/>
            </div>
            <div class="col-md-6 mb-3">
                <label>Entrez la description du projet</label>
                <input name="descriptionProjet" class="form-control" placeholder="Description du projet" required/>
            </div>
        </div>

        <div class="mb-3">
            <label>Adresse-mail des personnes à ajouter <span class="text-muted">(Optionnel)</span></label>
            <button type="button" class="btn btn-success mb-2 ml-4">AjouterMembre</button>
            <input type="hidden" type="email" class="form-control" id="email" placeholder="acdefgh@example.com"/>
        </div>
        <div class="mb-3">
            <div class="switch">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="budgetSwitch"/>
                    <label class="custom-control-label" for="budgetSwitch">Budget sur le projet</label>
                    <input name="budgetProjet" type="number" class="ml-2"/>
                </div>
            </div>
        </div>
        <div class="mb-3 mt-5">
            <div class="switch">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="dateSwitch"/>
                    <label class="custom-control-label" for="dateSwitch">Date de début (qui rend visible la partie d'en
                        dessous avec un calendrier pour choisir la date de début) <span class="text-muted">(À partir d'aujourd'hui)</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-3 mt-5">
            <p>Date de début</p>

        </div>
        <button type="submit" class="btn btn-outline-primary">Ajouter le projet</button>
</form>
</body>
</html>
