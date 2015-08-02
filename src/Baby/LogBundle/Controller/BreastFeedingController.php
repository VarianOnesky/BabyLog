<?php

namespace Baby\LogBundle\Controller;

use Baby\LogBundle\Entity\BreastFeeding;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BreastFeedingController extends Controller
{
    public  function listAction()
    {
        echo "BreastFeeding::List";

        die();
    }

    public function postAction()
    {
        $params = json_decode($this->get("request")->getContent(), true);

        $duration = $params['duration'];

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getEntityManager();
        $em->beginTransaction();

        $breastFeeding = new BreastFeeding();
        $breastFeeding->setDuration($duration);

        $em->persist($breastFeeding);

        $em->flush();

        $em->commit();

        $result = array('isSuccess' => true);
        echo json_encode($result);
        die();
    }
}
