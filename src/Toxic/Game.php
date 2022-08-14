<?php

namespace Toxic;

use pocketmine\player\Player;
use pocketmine\event\Listener;
use Scoreboards\Scoreboards;

class Game implements Listener {

  const PHASE_LOBBY = 0;
  const PHASE_GAME = 1;
  const PHASE_RESTART = 2;
  
  /** @var int */
  public $startTime = 30;
  /** @var int */
  public $gameTime = 300;
  /** @var int */
  public $restartTime = 5;
  /** @var int */
  public $phase = 0;
  
  // } else {
  
  public $map = null;
  public $setup = false;
  
  public $players = [];
}
