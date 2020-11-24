

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projekte</title>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          rel="stylesheet" />

</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="text-center">
                <h1>Projekte</h1>
            </div>
        </div>
        <div class="row">
            <div class = "col-2">
                <div class="text-primary">
                    <div class="list-group" >
                        <div class= "list-group-item">
                            <a href = "ToDo.php">
                                Home
                            </a>
                        </div>
                        <div class= "list-group-item">
                            <a href = "login.php">
                                Login
                            </a>
                        </div>
                        <div class = "list-group-item">
                            <a href="projekte.php">
                                Projekte
                            </a>
                        </div>
                        <div class = "list-group-item">
                            Aktuelles Projekt
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col">
                                <div class="list-group">
                                    <div class = "list-group-item">
                                        <a href="Reiter.php">
                                            Reiter
                                        </a>
                                    </div>
                                    <div class = "list-group-item">
                                        <a href="Aufgaben.php">
                                            Aufgaben
                                        </a>
                                    </div>
                                    <div class="list-group-item">
                                        <a href="Personen.php">
                                            Personen
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h1>Projekt Auswählen</h1>
                <div class="form-group">
                    <select class="form-control" id = "projectSelect">
                        <option>Projekt 1</option>
                        <option>Projekt 2</option>
                        <option>Projekt 3</option>
                        <option>Projekt 4</option>
                    </select>
                    <div class="row">
                        <div class = "col">
                            <button type="button" class="btn btn-primary" style="margin-top: 1%">Auswählen</button>
                            <button type="button" class="btn btn-primary" style="margin-top: 1%">Bearbeiten</button>
                            <button type="button" class="btn btn-danger" style="margin-top: 1%">Löschen</button>
                        </div>
                    </div>
                </div>
                <h1>Projekt bearbeiten/erstellen</h1>
                <form class ="mb-4">
                    <div class="form-group">
                        <label for="projektFeld">Projektname</label>
                        <input type="text" class="form-control" id = "projektFeld">
                    </div>
                    <div class="form-group">
                        <label for="descriptionField">ProjektBeschreibung</label>
                        <textarea class="form-control" id="descriptionField" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Speichern</button>
                    <button type="submit" class="btn btn-info">Reset</button>
                </form>
            </div>


        </div>




    </div>


</body>