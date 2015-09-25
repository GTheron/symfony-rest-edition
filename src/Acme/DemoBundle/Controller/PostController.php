<?php

namespace Acme\DemoBundle\Controller;

use GTheron\RestBundle\Annotation\ResourceControllerAnnotation;
use GTheron\RestBundle\Controller\ResourceController;

/**
 * Class PostController
 * @package Acme\DemoBundle\Controller
 *
 * @ResourceControllerAnnotation(resourceClass="Acme\DemoBundle\Entity\Post")
 */
class PostController extends ResourceController
{
    /**
     * @param $id
     */
    public function getAction($id)
    {

    }

}
