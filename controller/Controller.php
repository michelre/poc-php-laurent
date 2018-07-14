<?php

require_once("dao/ServiceDao.php");

class Controller
{
    private $serviceDao;
    private $twig;

    public function __construct()
    {
        $this->serviceDao = new ServiceDao();
        $loader = new Twig_Loader_Filesystem('view');
        $this->twig = new Twig_Environment($loader, array());
    }

    public function listServices()
    {
        /** @var Service[] $services */
        $services = $this->serviceDao->findAll();
        echo $this->twig->render('accueil.html.twig', array("services" => $services));
    }

    public function displayContactForm()
    {
        echo $this->twig->render('contact.html.twig');
    }

}
