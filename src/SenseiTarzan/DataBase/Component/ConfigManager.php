<?php

namespace SenseiTarzan\DataBase\Component;

use SenseiTarzan\DataBase\Class\IConfigSave;

class ConfigManager
{

    public IConfigSave|null $configSystem = null;

    public function setConfigSystem(?IConfigSave $configSave, bool $overwrite = false): void
    {
        if ($this->configSystem !== null && ($configSave === null || !$overwrite)) return;
        $this->configSystem = $configSave;
    }


    public function resetDataSystem(): void
    {
        $this->configSystem = null;
    }

    /**
     * @return IConfigSave|null
     */
    public function getConfigSystem(): ?IConfigSave
    {
        return $this->configSystem;
    }


}