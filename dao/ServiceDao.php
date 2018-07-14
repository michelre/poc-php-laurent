<?php

require_once('model/Service.php');
require_once('dao/BaseDao.php');

class ServiceDao extends BaseDao
{

    public function findAll(){

        $servicesDB = $this->db
            ->query('SELECT * FROM service')
            ->fetchAll(PDO::FETCH_ASSOC);
        $services = array();
        foreach ($servicesDB as $serviceDB) {
            array_push($services,
                new Service($serviceDB['id'], $serviceDB['name'], $serviceDB['description'], $serviceDB['tarif'], $serviceDB['image']));
        }

        return $services;
    }

}
