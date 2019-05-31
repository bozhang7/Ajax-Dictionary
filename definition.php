<?php
$definitions = array(
    "ajax" => "a Greek hero in the Trojan War who rescued the body of Achilles and killed himself out of jealousy 
    when Odysseus was awarded the armor of Achilles.",

    "button" => "a small disk or knob sewn on to a garment, either to fasten it by being pushed through a slit made 
    for the purpose or for decoration.",

    "load" => "a heavy or bulky thing that is being carried or is about to be carried.",

    "submit" => "accept or yield to a superior force or to the authority or will of another person.",

    "update" => "an act of bringing something or someone up to date, or an updated version of something."
);

$term = $_POST['term'];
echo "<Strong>$term</Strong>: $definitions[$term]";