<?php

namespace DeletedUser522;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;

use DeletedUser522\command\Heal;

class Main extends PluginBase implements Listener {

    public function onEnable(){

        $this->getLogger()->info("§2 Le plugin est chargé ! ");
        $this->getServer()->getCommandMap()->register("heal", new Heal ($this));
    }

    public function onDisable(){

        $this->getLogger()->info("§4 Le plugin est étaint ! ");
    }
}