<?php

/* ::base.html.twig */
class __TwigTemplate_ee973678b0675662bfa3432a660a3b92771c305c68a2b342094ae183f43f4add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <!-- Bootstrap Core CSS -->
            <link href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/KulinariaMainBundle/css/bootstrap.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/KulinariaMainBundle/css/modern-business.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "            <!-- jQuery -->
            <script src=\" ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/KulinariaMainBundle/js/jquery.js"), "html", null, true);
        echo " \"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src=\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/KulinariaMainBundle/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>

            <!-- Script to Activate the Carousel -->
            <script>
            \$('.carousel').carousel({
                interval: 5000 //changes the speed
            })
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  95 => 25,  92 => 24,  89 => 23,  84 => 22,  78 => 16,  72 => 13,  69 => 12,  66 => 11,  60 => 10,  54 => 37,  51 => 23,  49 => 22,  43 => 19,  40 => 18,  38 => 11,  34 => 10,  23 => 1,);
    }
}
