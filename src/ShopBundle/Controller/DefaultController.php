<?php

namespace ShopBundle\Controller;

use ShopBundle\Entity\Producteurs;
use ShopBundle\Entity\Shop;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $shops = $em->getRepository(Producteurs::class)->findAll();
        dump($shops);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($shops, 'json');
        $fs = new Filesystem();
        $fs->dumpFile('js/shops.json', $jsonContent);
        dump($jsonContent);
        return $this->render('ShopBundle:Default:index.html.twig');
    }

    /**
     * @Route(path = "/shop/{id}",
     * name = "this_shop")
     */
    public function thisShopAction($id)
    {

        return $this->render('ShopBundle:Default:test.html.twig',compact('id'));
    }
}


