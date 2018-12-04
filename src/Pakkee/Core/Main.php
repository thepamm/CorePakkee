<?php

declare(strict_types=1);

namespace Pakkee\Core;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\command\CommandSender;
use pocketmine\event\player\{PlayerInteractEvent, PlayerMoveEvent, PlayerRespawnEvent, PlayerJoinEvent, PlayerDeathEvent, PlayerQuitEvent , PlayerItemHeldEvent};
use pocketmine\level\Position;
use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\enchantment\ProtectionEnchantment;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use jojoe77777\FormAPI;
use pocketmine\event\entity\{EntityDamageEvent, EntityDamageByEntityEvent};

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
