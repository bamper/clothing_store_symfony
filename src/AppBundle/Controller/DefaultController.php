<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Clothes')->findAll();

        return $this->render('default/index.html.twig', array('entities'=>$entities));
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('default/about.html.twig', array());
    }

    /**
     * @Route("/search")
     */
    public function searchAction(Request $request)
    {

        //On key up searches for matching names
        // on submit it passes the array of entities to the list route to display them
        // must create that route, and use it to filter.
        if($request->get('live')==true) {


            //$string = $request->get('searchText');

            $entities = $this->getDoctrine()
                ->getRepository('AppBundle:Clothes')
                ->findAll();
            //find by name function
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizers = array(new GetSetMethodNormalizer());
            $serializer = new Serializer($normalizers, $encoders);

            $jsonContent = $serializer->serialize($entities, 'json');

            $response = new Response($jsonContent);
            return $response;

        }
        else{
            $string = $request->get('searchText');
            $entities = $this->getDoctrine()
                ->getRepository('AppBundle:Clothes')
                ->find($string);
        }

    }



}
