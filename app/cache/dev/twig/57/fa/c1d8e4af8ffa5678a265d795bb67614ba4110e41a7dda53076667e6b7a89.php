<?php

/* KulinariaMainBundle::layout.html.twig */
class __TwigTemplate_57fac1d8e4af8ffa5678a265d795bb67614ba4110e41a7dda53076667e6b7a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'wynik' => array($this, 'block_wynik'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"pierwszy\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("przycisk1h");
        echo "\">Przycisk 1</a>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("przycisk2h");
        echo "\">Przycisk 2</a>
        <a href=\"index.ahml\">Przycisk 3</a>
    </div>
    <br />
    <div id=\"drugi\">
        <p> ";
        // line 11
        $this->displayBlock('wynik', $context, $blocks);
        echo " </p>
    </div>
";
    }

    public function block_wynik($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "KulinariaMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  39 => 6,  35 => 5,  32 => 4,  29 => 3,);
    }
}
