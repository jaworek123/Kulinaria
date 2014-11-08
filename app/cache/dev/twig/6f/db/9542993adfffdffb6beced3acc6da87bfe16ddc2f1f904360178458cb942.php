<?php

/* KulinariaMainBundle:Main:index.html.twig */
class __TwigTemplate_6fdb9542993adfffdffb6beced3acc6da87bfe16ddc2f1f904360178458cb942 extends Twig_Template
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
        // line 4
        echo "    Strona glowna projektu.
";
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
        return array (  31 => 4,  28 => 3,);
    }
}
