<?php

require __DIR__.'/vendor/autoload.php';

use Marvel\Atlantida\NamorSubMariner;
use Marvel\England\CaptainBritain;
use Marvel\Illinois\Beast;
use Marvel\NewJersey\WonderMan;
use Marvel\NewYork\HankPym;
use Marvel\NewYork\IronMan;
use Marvel\NewYork\WaspJanetVanDyne;
use Marvel\Norway\Thor;

echo NamorSubMariner::whoami().'<br>';
echo CaptainBritain::whoami().'<br>';
echo Beast::whoami().'<br>';
echo WonderMan::whoami().'<br>';
echo HankPym::whoami().'<br>';
echo IronMan::whoami().'<br>';
echo WaspJanetVanDyne::whoami().'<br>';
echo Thor::whoami().'<br>';
