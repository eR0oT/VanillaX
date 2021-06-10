<?php

namespace CLADevs\VanillaX\entities\monster;

use CLADevs\VanillaX\entities\VanillaEntity;

class ZombieEntity extends VanillaEntity{

    const NETWORK_ID = self::ZOMBIE;

    public $width = 0.6;
    public $height = 1.9;

    protected function initEntity(): void{
        parent::initEntity();
        $this->setMaxHealth(20);
        $this->setHealth(20);
    }

    public function getName(): string{
        return "Zombie";
    }
}