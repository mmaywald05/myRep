<?php include "Header_auslagerung.php" ?>
            <h1>Login </h1>
        </div>
    </div>
    <?php include "Sidebar_auslagerung.php"?>
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
