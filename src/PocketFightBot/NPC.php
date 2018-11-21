<?php
namespace PocketFightBot;

use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;

class NPC extends PocketFightBot{

	public $attackDamage = 10;
	public $speed = 1.00;
	public $startingHealth = 25;

	public function __construct(Level $level, CompoundTag $nbt){
		parent::__construct($level, $nbt);
	}

	public function getType(){
		return "PockDev";
	}
}