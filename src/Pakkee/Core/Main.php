<?php

declare(strict_types=1);

namespace Pakkee\Core;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\{PlayerInteractEvent, PlayerMoveEvent, PlayerRespawnEvent, PlayerDeathEvent, PlayerQuitEvent , PlayerJoinEvent , PlayerItemHeldEvent};
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase implements Listener{
 
	public function onEnable() : void{
		$this->getLogger()->info("§aCorePakkee Cargado");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onJoin(PlayerJoinEvent $ev){
		$player = $ev->getPlayer();
		//Da Items Al Entrar A El Servidor
	}

	public function onDisable() : void{
		$this->getLogger()->info("§cCorePakkee Detenido");
	}
	
	
}

?>
