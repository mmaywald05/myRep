<?php include "Header_auslagerung.php" ?>
                <h1>Reiter</h1>
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
                            <div class="col">
                                Beschreibung
                            </div>
                        </div>
                    </div>
                    <div class="list-group">
                        <div class="row">
                            <div class="col">
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-3">
                                            Todo
                                        </div>
                                        <div class="col">
                                            Dinge, die erledigt werden müssen.
                                        </div>
                                        <div class="col-0">
                                            <div class="text-primary">
                                                <?php include "edit_delete_icon_auslagerung.php"?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-3">
                                            Erledigt
                                        </div>
                                        <div class="col">
                                            Dinge, die erledigt sind.
                                        </div>

                                        <div class="col-0">
                                            <div class="text-primary">
                                                <?php include "edit_delete_icon_auslagerung.php"?>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-3">
                                            Verschoben.
                                        </div>
                                        <div class="col">
                                            Dinge, die später erledigt werden.
                                        </div>

                                        <div class="col-0">
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
                            <label for="reiterFeld">Bezeichnung des Reiters</label>
                            <input type="text" class="form-control" id = "reiterFeld" placeholder="Reiter">

                        </div>
                        <div class="form-group">
                            <label for="descriptionField">Beschreibung</label>
                            <textarea class="form-control" id="descriptionField" rows="3" placeholder="Beschreibung"></textarea>
                        </div>
                        <div class="form-group">
                            <label for = "projectDropdown">Zugewiesenes Projekt</label>
                            <select class = "form-control" id="projectDropdown">
                                <option>Projekt 1</option>
                                <option>Projekt 2</option>
                                <option>Projekt 3</option>
                                <option>Projekt 4</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Speichern</button>
                        <button type="submit" class="btn btn-info">Reset</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
