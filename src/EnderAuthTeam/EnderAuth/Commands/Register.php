<?php

namespace EnderAuth\Commands;

use pocketmine\permission\Permission;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Register implements CommandExecutor {
	public function __construct(EnderAuth $plugin){
        $this->plugin = $plugin;
    }
