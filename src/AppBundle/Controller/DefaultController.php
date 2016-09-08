<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $query = $request->query->all();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'nothing',
        ]);
    }

    /**
     * @Route("
     *     /test/{foo}/{page}/{limit}/{_format}",
     *     requirements={
     *         "foo"="\w+",
     *         "page"="\d+",
     *         "limit"="\d+",
     *         "_format"="html|json"
     *     },
     *     defaults={
     *         "foo"="test",
     *         "page" = "10",
     *         "limit" = "10",
     *         "_format"="html"
     *     },
     *     name="test")
     * @Template()
     */
    public function testAction(Request $request, $foo, $page, $limit, $_format) {
        $query = $request->query->all();
        $bar = (isset($query['bar'])) ? $query['bar'] : 'undefined';
        return array(
            'foo' => $foo,
            'page' => $page,
            'limit' => $limit,
            'bar' => $bar,
            'query' => print_r($query, true)
        );
    }
}
