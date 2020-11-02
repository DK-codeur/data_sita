<?php
isLogged();
    $latestEmploye = Employe::getLatestEmploye();
    $countAllEmploye = Employe::countAllEmploye();
    $countAllMen = Employe::countAllMen();
    $countAllWomen = Employe::countAllWomen();
