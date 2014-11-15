<?php

/* KulinariaMainBundle:Main:notLoggedIn.html.twig */
class __TwigTemplate_977dca2781735901b1cbf6cbaa834121f4c1145583108793b433e0d8e005b36d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KulinariaMainBundle:Main:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KulinariaMainBundle:Main:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 6
        echo "    <script> infoUser(); </script>
";
    }

    public function getTemplateName()
    {
        return "KulinariaMainBundle:Main:notLoggedIn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  28 => 3,);
    }
}
