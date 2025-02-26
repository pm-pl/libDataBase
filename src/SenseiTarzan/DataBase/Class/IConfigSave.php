<?php

namespace SenseiTarzan\DataBase\Class;

use Generator;

interface IConfigSave
{

     public function getName(): string;

    public function loadConfig(): Generator;

    /**
     * @param string $id
     * @param string $type
     * @param mixed $data
     * @return mixed
     */
    public function update(string $id, string $type, mixed $data): mixed;
}