<?php

/* KulinariaMainBundle:Main:index.html.twig */
class __TwigTemplate_840ae10bcd7b87c7f251bc8b28c32f3d6b5d5fd9ed6d3a93cb01a7d4651f341b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KulinariaMainBundle::layout.html.twig");

        $this->blocks = array(
            'myBody' => array($this, 'block_myBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KulinariaMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_myBody($context, array $blocks = array())
    {
        echo " Siema wszystkim. Jestem Tigron! :D ";
    }

    public function getTemplateName()
    {
        return "KulinariaMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,);
    }
}
