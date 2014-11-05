<?php

/* KulinariaMainBundle:Main:index.html.twig */
class __TwigTemplate_840ae10bcd7b87c7f251bc8b28c32f3d6b5d5fd9ed6d3a93cb01a7d4651f341b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KulinariaMainBundle::layout.html.twig");

        $this->blocks = array(
            'mojBlok' => array($this, 'block_mojBlok'),
            'wynik' => array($this, 'block_wynik'),
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
    public function block_mojBlok($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('wynik', $context, $blocks);
    }

    public function block_wynik($context, array $blocks = array())
    {
        echo "Hello fantastic world!";
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
        return array (  32 => 4,  29 => 3,);
    }
}
