<?php

  $hobbies = [
    "Hacking",
    "Drinking",
    "Streaking",
    "Doing nothing",
    "Sleeping",
    "LARPing",
    "Stalking",
  ];
  foreach ($hobbies as $value) {
    echo $value;
    echo "\n";
  }

  foreach($hobbies as $value): ?>
   <p> <?php echo $value; ?> </p>
  <?php endforeach; ?>
