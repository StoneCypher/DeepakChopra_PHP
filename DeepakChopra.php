<?php

  srand();

  $starts     = array("Experiential truth ", "The physical world ", "Non-judgment ", "Quantum physics ");
  $middles    = array("nurtures ", "projects onto ", "imparts reality to ", "constructs with ");
  $qualifiers = array("abundance of ", "the barrier of ", "self-righteous ", "potential ");
  $finishes   = array("marvel.", "choices.", "creativity.", "actions.");

  function random_from($uarray) { return $uarray[rand(0, count($uarray)-1)]; }

  echo implode(" ", array(random_from($starts), random_from($middles), random_from($qualifiers), random_from($finishes) ));

?>