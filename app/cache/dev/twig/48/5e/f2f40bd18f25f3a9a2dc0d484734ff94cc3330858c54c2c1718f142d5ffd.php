<?php

/* KulinariaMainBundle:CookBook:cookbook.html.twig */
class __TwigTemplate_485ef2f40bd18f25f3a9a2dc0d484734ff94cc3330858c54c2c1718f142d5ffd extends Twig_Template
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
        echo "    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">One Column Portfolio
                    <small>Subheading</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"index.html\">Home</a>
                    </li>
                    <li class=\"active\">One Column Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project One</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class=\"btn btn-primary\" href=\"portfolio-item.html\">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project Two</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
                <a class=\"btn btn-primary\" href=\"portfolio-item.html\">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project Three</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
                <a class=\"btn btn-primary\" href=\"portfolio-item.html\">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class=\"row\">

            <div class=\"col-md-7\">
                <a href=\"portfolio-item.html\">
                    <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project Four</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class=\"btn btn-primary\" href=\"portfolio-item.html\">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"#\">
                    <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project Five</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
                <a class=\"btn btn-primary\" href=\"#\">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class=\"row text-center\">
            <div class=\"col-lg-12\">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("cook_book");
        echo "\">&laquo;</a>
                    </li>
                    ";
        // line 119
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2), ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2)));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 2)) {
                // line 120
                echo "                        ";
                if (($context["i"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    // line 121
                    echo "                            <li class=\"active\">
                                <a href=\" ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["i"])), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                } else {
                    // line 125
                    echo "                            <li>
                                <a href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["i"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                // line 129
                echo "                    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 130
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 131
                echo "                            ";
                if (($context["j"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    // line 132
                    echo "                                <li class=\"active\">
                                   <a href=\"";
                    // line 133
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["j"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                } else {
                    // line 136
                    echo "                                <li>
                                    <a href=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["j"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                }
                // line 140
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                    <li>
                        <a href=\"#\">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
";
    }

    public function getTemplateName()
    {
        return "KulinariaMainBundle:CookBook:cookbook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 142,  224 => 141,  218 => 140,  210 => 137,  207 => 136,  199 => 133,  196 => 132,  193 => 131,  188 => 130,  182 => 129,  174 => 126,  171 => 125,  163 => 122,  160 => 121,  157 => 120,  151 => 119,  146 => 117,  31 => 4,  28 => 3,);
    }
}
