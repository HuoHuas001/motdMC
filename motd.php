<?php

namespace HuoHua;
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

require __DIR__ . '/src/MinecraftQuery.php';
require __DIR__ . '/src/MinecraftQueryException.php';

class MotdMC
{
    private $Address; //地址
    private $Port; //端口
    private $array = [
        'code' => 201,
        'data' => null
    ];

    public function __construct($Address, $Port = 25565)
    {
        $this->Address = $Address;
        $this->Port = $Port;
    }

    public function motdJE()
    {
        $Query = new MinecraftQuery();

        try {
            $Query->Connect($this->Address, $this->Port);
            $this->array['code'] = 200;
            $this->array['data'] = $Query->GetInfo();
            return $this->array;
        } catch (MinecraftQueryException $e) {
            $this->array['code'] = 201;
            $this->array['data'] = $e->getMessage();
            return $this->array;
        }
    }

    public function motdBE()
    {
        $Query = new MinecraftQuery();
        try {
            $Query->ConnectBedrock($this->Address, $this->Port);
            $this->array['code'] = 200;
            $this->array['data'] = $Query->GetInfo();
            return $this->array;
        } catch (MinecraftQueryException $e) {
            $this->array['code'] = 201;
            $this->array['data'] = $e->getMessage();
            return $this->array;
        }
    }
}
?>
