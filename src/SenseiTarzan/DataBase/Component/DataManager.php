<?php

namespace SenseiTarzan\DataBase\Component;

use pocketmine\utils\SingletonTrait;
use SenseiTarzan\DataBase\Class\IDataSave;

class DataManager
{
    use SingletonTrait;

    public IDataSave|null $dataSystem = null;

    public function setDataSystem(?IDataSave $saveData, bool $overwrite = false): void
    {
        if ($this->dataSystem !== null && ($saveData === null || !$overwrite)) return;
        $this->dataSystem = $saveData;
    }


    public function resetDataSystem(): void
    {
        unset($this->dataSystem);
    }

    /**
     * @return IDataSave|null
     */
    public function getDataSystem(): ?IDataSave
    {
        return $this->dataSystem;
    }


}