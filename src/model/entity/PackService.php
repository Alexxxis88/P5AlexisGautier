<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;


class PackService
{
    private $_idPack ;
    private $_packNameServices ;
    private $_packPriceServices ;


    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    public function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //GETTERS
    public function idPack()
    {
        return $this->_idPack;
    }
    public function packNameServices()
    {
        return $this->_packNameServices;
    }
    public function packPriceServices()
    {
        return $this->_packPriceServices;
    }


    //SETTERS
    public function setIdPack($idPack)
    {
        $idPack = (int) $idPack;
        if ($idPack > 0) {
            $this->_idPack = $idPack;
        }
    }

    public function setPackNameServices($packNameServices)
    {
        if (is_string($packNameServices)) {
            $this->_packNameServices = $packNameServices;
        }
    }

    public function setPackPriceServices($packPriceServices)
    {
        $packPriceServices = (int) $packPriceServices;
        if ($packPriceServices >= 0) {
            $this->_packPriceServices = $packPriceServices;
        }
    }
}
