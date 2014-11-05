<?php

/* KulinariaMainBundle:Main:index2.html.twig */
class __TwigTemplate_8d32745efb516e51540a48efcac7e0a679c46324fd694d2f184e454c8fc76b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KulinariaMainBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 2
    public function block_wynik($context, array $blocks = array())
    {
        // line 3
        echo "    Siema tu przycisk 1
";
    }

    public function getTemplateName()
    {
        return "KulinariaMainBundle:Main:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
