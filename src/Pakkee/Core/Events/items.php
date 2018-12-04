<?php
 
namespace Pakkee\Core\Events;

use Pakkee\Core\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\tile\Tile;
use pocketmine\item\Item;
use pocketmine\entity\Entity;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as Color;
 
class items implements Listener{
  
   private $plugin;

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $player->setMaxHealth(20);
        $player->teleport($this->plugin->getServer()->getDefaultLevel()->getSafeSpawn());
      $player->getInventory()->setItem(0, Item::get(369, 0, 1)->setCustomName("§7Hide Players"));
      $player->getInventory()->setItem(8, Item::get(403, 0, 1)->setCustomName("§aPlayers On/Off"));
      $player->getInventory()->setItem(2, Item::get(399, 0, 1)->setCustomName("§bGames"));
      $player->getInventory()->setItem(6, Item::get(377, 0, 1)->setCustomName("§cInfo"));
      $player->getInventory()->setItem(4, Item::get(345, 0, 1)->setCustomName("§eUtils"));
    }
  }
<?
