
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          rel="stylesheet" />

</head>
<body>
<div class = "container-fluid">
    <div class = "jumbotron">
        <h1 class="text-center">Login </h1>
    </div>
        <div class="row">
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
                <h1>Bitte geben Sie ihre E-Mail und Ihr Passwort an.</h1>
                <form class="mb-4">
                    <div class="form-group">
                        <label for ="mailInput">E-Mail</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" id = "mailInput" placeholder="Enter E-Mail">
                        <small id="emailHelp" class="form-text text-muted"> We'll never share your email with anyone else</small>
                    </div>
                    <div class="form-group">
                        <label for = "passwordInput"> Password</label>
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class = "form-check-input" id = exampleCheck>
                        <label class="form-check-label" for="exampleCheck">I have read and understood the terms of service</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>

        </div>


</div>
</body>
</html>
