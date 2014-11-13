<?php

/* KulinariaUserBundle:Registration:registration.html.twig */
class __TwigTemplate_5f884fe06feeeec344dee4280b78b728679c5facefbc5b8f9efd3e4f289ffeb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
    }

    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"form_row\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "KulinariaUserBundle:Registration:registration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
