<?php

declare(strict_types=1);

namespace Pakkee\Core;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\command\{Command, CommandSender};
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\utils\TextFormat as Color;
use pocketmine\utils\Config;
 
class Main extends PluginBase implements Listener{
 
	public function onEnable() : void{
		$this->getLogger()->info("§aCorePakkee Cargado");
		$this->getServer()->getPluginManager()->registerEvents(new Items($this), $this);
	}

	public function onDisable() : void{
		$this->getLogger()->info("§cCorePakkee Detenido");
	}
	
	public function giveGadgets($player){
    	$player->getInventory()->clearAll();
  	$player->getInventory()->setItem(0, Item::get(369, 0, 1)->setCustomName("§7Hide Players"));
      $player->getInventory()->setItem(8, Item::get(403, 0, 1)->setCustomName("§aPlayers On/Off"));
      $player->getInventory()->setItem(2, Item::get(399, 0, 1)->setCustomName("§bGames"));
      $player->getInventory()->setItem(6, Item::get(377, 0, 1)->setCustomName("§cInfo"));
      $player->getInventory()->setItem(4, Item::get(345, 0, 1)->setCustomName("§eUtils"));
    }
}

?>
