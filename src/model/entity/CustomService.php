<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;


class CustomService
{
    private $_idServ ;
    private $_serviceGroup ;
    private $_serviceName ;
    private $_price ;


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
    public function idServ()
    {
        return $this->_idServ;
    }
    public function serviceGroup()
    {
        return $this->_serviceGroup;
    }
    public function serviceName()
    {
        return $this->_serviceName;
    }
    public function price()
    {
        return $this->_price;
    }


    //SETTERS
    public function setIdServ($idServ)
    {
        $idServ = (int) $idServ;
        if ($idServ > 0) {
            $this->_idServ = $idServ;
        }
    }

    public function setServiceGroup($serviceGroup)
    {
        if (is_string($serviceGroup)) {
            $this->_serviceGroup = $serviceGroup;
        }
    }

    public function setServiceName($serviceName)
    {
        if (is_string($serviceName)) {
            $this->_serviceName = $serviceName;
        }
    }

    public function setPrice($price)
    {
        $price = (int) $price;
        if ($price >= 0) {
            $this->_price = $price;
        }
    }
}
