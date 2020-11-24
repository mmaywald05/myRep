<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Moritz Maywald Management</title>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          rel="stylesheet" />

</head>
<body>
<div class = "container-fluid">
    <div class = "jumbotron">
        <h1 class="text-center">Aufgabenplaner: Todos (Aktuelles Projekt) </h1>
    </div>
    <div class = row>
        <div class="col-2">
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
                        <select class="form-control form-control-sm">
                                <option selected>ToDo Liste</option>
                        </select>
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
        <div class = "col">
            <div class="card">
                <div class="card-header">
                    ToDo:
                </div>
                <div class="list-group">
                    <div class ="list-group-item">
                        HTML Datei erstellen (Moritz Maywald)
                    </div>
                    <div class="list-group-item">
                        CSS Datei erstellen (Moritz Maywald
                    </div>
                </div>
            </div>
        </div>
        <div class = "col">
            <div class="card">
                <div class="card-header">
                    Erledigt:
                </div>
                <div class="list-group">
                    <div class ="list-group-item">
                        PC eingeschaltet (Moritz Maywald)
                    </div>
                    <div class="list-group-item">
                        Kaffe trinken (Moritz Maywald)
                    </div>
                </div>
            </div>
        </div>
        <div class = "col">
            <div class="card">
                <div class = "card-header">
                    Verschoben:
                </div>
                <div class="list-group">
                    <div class="list-group-item">
                        Für die Uni lernen (Moritz Mayald)
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
