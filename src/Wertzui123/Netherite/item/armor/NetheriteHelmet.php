<?php

namespace Wertzui123\Netherite\item\armor;


use pocketmine\item\Armor;
use pocketmine\item\DiamondHelmet

class NetheriteHelmet extends Armor
{

    const NETHERITE_HELMET = 748;

    public function __construct(int $meta = 0){
        parent::__construct(self::NETHERITE_HELMET, $meta, "Netherite Helmet");
    }

    public function getDefensePoints() : int{
        return 3;
    }

    public function getMaxDurability() : int{
        return 408;
    }

}
