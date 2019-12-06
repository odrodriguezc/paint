<?php

class Line extends Form2d
{



}

/* ALGO POUR DESIGNER LES POLIGONES REGULIERS

PdepartX ---- par defaut 0 et apres prends la valeur du point d'arrive 
pdepartY ----- idem

angle---- determine par le poligone que l'on veux contruire ex. hexagone 60
radius --- corresponde a la longuer des lignes, donc des cotes du poligone

PdarriveX = PdepartX + (radius * cos(angle))
PdarriveY = PdepartY + (radius * sin(angle))

avec les calcul des point de depart. --> designer une ligne entre ces deux points
ensuite on doit calculer le point suivant.


