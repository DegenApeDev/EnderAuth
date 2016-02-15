<?php

namespace EnderAuthTeam\EnderAuth;
     
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class MainClass extends PluginBase implements Listener 
{
    public function onEnable()
        {
        $this->getLogger()->info("YAY!! You are using EnderAuth v0.0.1 , The best Auth plugin EVER!");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        }
    public function onDisable()
        {
        $this->getLogger()->info("Why'd you stop EnderAuth? Do we need to update it?");
        }
        function onJoin(PlayerJoinEvent $event)
     {
          $this->config = new Config($this->getDataFolder."config.yml", Config::YAML);
          $cfg = $this->getConfig()->getAll();
          $message = $cfg["show-message"];
          $enable = $cfg["enable-plugin"];
          if ($enable == true){
               if ($message == true){
                    $msg = $cfg["join-message"];
                    $name = $event->getPlayer()->getDisplayName();
                    $name->sendMessage($msg);
               }
          }
     }
 }
    
