<?php

namespace EnderAuth;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		
	}
