<?php
  require_once 'Classes/Lutador.php';
  require_once 'Luta.php';

  $l = array();
  $l[0] = new Lutador('Pretty Boy', 'França', 30, 1.75, 68.9, 14, 11, 2, 1);
  $l[1] = new Lutador ('Putsript', 'Brasil', 29, 1.68, 57.8, 19, 14, 2, 3);
  $l[2] = new Lutador ('SnapShadow', 'EUA', 35, 1.65, 80.9, 15, 12, 2, 1);
  $l[3] = new Lutador ('Dead Code', 'Austrália', 28, 1.93, 81.6, 15, 13, 0, 2);
  $l[4] = new Lutador ('UFOcobol', 'Brasil', 37, 1.70, 119.3, 12, 5, 4, 3);
  $l[5] = new Lutador ('Nerdaart', 'EUA', 30, 1.81, 105.7, 18, 12 , 2, 4);

  $UEC01 = new Luta ();
  $UEC01->marcarLuta($l[1], $l[5]);
  $UEC01->lutar();

  $l[0]->status();
  $l[1]->status();