<?php include "DataArrays.php"?>
<?php include "Header_auslagerung.php" ?>
            <h1>Personen</h1>
        </div>
    </div>
    <?php include "Sidebar_auslagerung.php"?>
        <div class="col-8">
            <div class ="card" style="">
                <div class="card-header">
                    <div class="row">
                        <div class="col-3">
                            Name
                        </div>
                        <div class="col-3">
                            E-Mail
                        </div>
                        <div class="col">
                            In Projekt
                        </div>
                    </div>
                </div>
                <div class="list-group">
                    <div class="row">
                        <div class="col">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        <?php if(isset($Personen[0]["name"])) echo $Personen[0]["name"]?>
                                    </div>
                                    <div class="col-4">
                                        <?php if(isset($Personen[0]["name"]))echo $Personen[0]["email"]?>
                                    </div>
                                    <div class="col">
                                        <?php if(isset($Personen[0]["inProjekt"]) AND ($Personen[0]["inProjekt"])) : ?>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" checked>
                                        <?php else : ?>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col+1">
                                        <div class="text-primary">
                                            <?php include "edit_delete_icon_auslagerung.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-3">
                                        <?php echo $Personen[1]["name"]?>
                                    </div>
                                    <div class="col-4">
                                        <?php echo $Personen[1]["email"]?>
                                    </div>
                                    <div class="col">
                                        <?php if($Personen[1]["inProjekt"]) : ?>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" checked>
                                        <?php else : ?>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col+1">
                                        <div class="text-primary">
                                            <?php include "edit_delete_icon_auslagerung.php"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coL">
                <h3 style="margin-top: 5%">
                    Bearbeiten/Erstellen
                </h3>
                <form class="mb-4">
                    <div class="form-group">
                        <label for="usernameFeld">Username</label>
                        <input type="text" class="form-control" id = "usernameFeld" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="emailFeld">E-Mail Adresse</label>
                        <input type="text" class="form-control" id="emailField" placeholder="E-Mail Adresse">
                    </div>
                    <div class="form-group">
                        <label for="passwordFeld">Passwort</label>
                        <input type="text" class="form-control" id="passwordFeld" placeholder="Passwort">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class = "form-check-input" id = zuordnungCheck>
                        <label class="form-check-label" for="zuordnungCheck">Dem Projekt zugeordnet</label>
                    </div>

                    <?php include "save_reset_buttons_auslagerung.php" ?>
                </form>

            </div>
        </div>
    </div>
</div>
</body>

