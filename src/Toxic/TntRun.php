<?php

namespace Toxic;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\utils\{Config, TextFormat};
use Toxic\provider{DefaultProvider, MysqlProvider};
use Toxic\task\{GameTick};
use Toxic\event\{EventListener};
use Toxic\command\{TntCommand};

class TntRun extends PluginBase {
   
   /** @var TntRun */
   private static $instance;
   
   public static function getInstance(): TntRun{
       return self::$instance;
   }
  
   protected function onEnable(): void{
       $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
       $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
       $this->getServer()->getCommandMap()->register("tntrun", new TntCommand($this));
   }
  
   protected function onLoad(): void{
       self::$instance = $this;
   }
  
   public function setProvider(){
       // TODO
   } 
}
