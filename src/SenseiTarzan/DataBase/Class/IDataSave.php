<?php

namespace SenseiTarzan\DataBase\Class;

use pocketmine\player\Player;

interface IDataSave
{

     public function getName(): string;
     public function loadDataPlayer(Player|string $player): void;
	 public function loadDataPlayerByMiddleware(Player|string $player) : Generator;

    /**
     * @param string $id
     * @param string $type
     * @param mixed $data
     * @return mixed
     */
    public function updateOnline(string $id, string $type, mixed $data): mixed;

    /**
     * @param string $id
     * @param string $type
     * @param mixed $data
     * @return mixed
     */
    public function updateOffline(string $id, string $type, mixed $data): mixed;

}