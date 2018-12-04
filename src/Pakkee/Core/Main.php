<?php

declare(strict_types=1);

namespace Pakkee\Core;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info("§aCorePakkee Cargado");
	}

	public function onDisable() : void{
		$this->getLogger()->info("§cCorePakkee Detenido");
	}
}

?>
