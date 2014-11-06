<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // static_content
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'static_content');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'KulinariaMainBundle:Static:index.html.twig',  '_route' => 'static_content',);
        }

        // kulinaria_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'kulinaria_main_homepage');
            }

            return array (  '_controller' => 'Kulinaria\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'kulinaria_main_homepage',);
        }

        if (0 === strpos($pathinfo, '/przycisk')) {
            // przycisk1h
            if (rtrim($pathinfo, '/') === '/przycisk1') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'przycisk1h');
                }

                return array (  '_controller' => 'Kulinaria\\MainBundle\\Controller\\MainController::przycisk1Action',  '_route' => 'przycisk1h',);
            }

            // przycisk2h
            if (rtrim($pathinfo, '/') === '/przycisk2') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'przycisk2h');
                }

                return array (  '_controller' => 'Kulinaria\\MainBundle\\Controller\\MainController::przycisk2Action',  '_route' => 'przycisk2h',);
            }

        }

        // _index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_index');
            }

            return array (  '_controller' => 'Kulinaria\\MainBundle\\Controller\\MainController::indexAction',  '_route' => '_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
