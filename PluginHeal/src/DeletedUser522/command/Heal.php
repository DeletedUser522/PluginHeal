<?php

namespace DeletedUser522\command;

use pocketmine\command\{Command, CommandSender};
use pocketmine\Player;

use DeletedUser522\Main;

class Heal extends Command {

    private $plugin;

    public function __construct(Main $plugin) {

        $this->plugin = $plugin;

        parent::__construct("heal", "permet de se soigné");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){

        if ($sender instanceof Player){

            $sender->SendMessage("Tu est full vie");
            $sender->setHealth($sender->getMaxHealth());
        }
    }
}