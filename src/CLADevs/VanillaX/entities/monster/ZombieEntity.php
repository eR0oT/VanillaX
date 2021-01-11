<?php

namespace CLADevs\VanillaX\entities\monster;

use CLADevs\VanillaX\entities\LivingEntity;
use CLADevs\VanillaX\entities\traits\EntityAgeable;

class ZombieEntity extends LivingEntity{

    public $width = 0.6;
    public $height = 1.9;

    const NETWORK_ID = self::ZOMBIE;

    protected function initEntity(): void{
        parent::initEntity();
        $this->ageable = new EntityAgeable($this, [0.3, 0.95], [0.6, 1.9]);
        $this->ageable->setCanBeBredByPlayer(false);
        //TODO
    }

    public function getName(): string{
        return "Zombie";
    }
}