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
use Events\items;
use pocketmine\event\entity\{EntityDamageEvent, EntityDamageByEntityEvent};

class Main extends PluginBase implements Listener{
 
	public function onEnable() : void{
		$this->getLogger()->info("§aCorePakkee Cargado");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onCommand( CommandSender $sender, Command $command, string $label, array $args ) : bool{
	    switch($command->getName()){
	      case "corecfg":
		$sender->sendMessage("Configuracion no disponible.");
		return true;
	      default:
		return false;
	    }
	}
	
	public function onJoin(PlayerJoinEvent $ev){
		$player = $ev->getPlayer();
		//Da Items Al Entrar A El Servidor
		$this->giveGadgets($player);
	}
	
	//Cuando se usa el item con el nombre indicado...
	public function onUse( PlayerInteractEvent $ev ){
		$player = $ev->getPlayer();
		$item = $ev->getItem();
		switch( $item->getName() ){
			case "§7Particulas":
				$player->addTitle("§7Particulas");
				return true;
			case "§aInfo":
				$player->addTitle("§aInfo");
				return true;
			case "§bGames":
				$player->addTitle("§bGames");
				return true;
			case "§cRanks":
				$player->addTitle("§cRanks");
				return true;
			case "§eFly":
				$player->addTitle("§eFly");
				return true;
			case "default":
				return true;
		}
	}

	public function onDisable() : void{
		$this->getLogger()->info("§cCorePakkee Detenido");
	}
	
	public function cfgtpspawn(){
		return false;
	}
	
	public function giveGadgets($player){
    	$player->getInventory()->clearAll();
  	$player->getInventory()->setItem(0, Item::get(369, 0, 1)->setCustomName("§7Particles"));
      	$player->getInventory()->setItem(8, Item::get(340, 0, 1)->setCustomName("§aInfo"));
      	$player->getInventory()->setItem(2, Item::get(378, 0, 1)->setCustomName("§bGames"));
      	$player->getInventory()->setItem(6, Item::get(410, 0, 1)->setCustomName("§cRanks"));
      	$player->getInventory()->setItem(4, Item::get(288, 0, 1)->setCustomName("§eFly"));
    }
}

?>
