<?php

/* KulinariaMainBundle:Recipt:addRecipt.html.twig */
class __TwigTemplate_f041866bee9aa4bd9d954d1368903bee1b73589c87793f93d387a634f47d302d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KulinariaMainBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <form action =\"";
        echo $this->env->getExtension('routing')->getPath("add_recipt");
        echo "\" method=\"POST\" class=\"kulinaria_add_recipt\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input type=\"submit\" value=\"Dodaj\" />
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "KulinariaMainBundle:Recipt:addRecipt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,);
    }
}
