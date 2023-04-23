<?php

namespace SenseiTarzan\DataBase\Class;

use pocketmine\player\Player;

interface IDataSave
{

     public function getName(): string;
     public function loadDataPlayer(Player|string $player): void;


    /**
     * @param string $id
     * @param string $type 'role' | 'suffix' | 'prefix' | 'permissions'
     * @param mixed $data
     * @return void
     */
    public function updateOnline(string $id, string $type, mixed $data): void;

    /**
     * @param string $id
     * @param string $type
     * @param mixed $data
     * @return void
     */
    public function updateOffline(string $id, string $type, mixed $data): void;

}