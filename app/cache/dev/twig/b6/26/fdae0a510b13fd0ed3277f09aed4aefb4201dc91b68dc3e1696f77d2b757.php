<?php

/* KulinariaMainBundle:CookBook:cookbook.html.twig */
class __TwigTemplate_b626fdae0a510b13fd0ed3277f09aed4aefb4201dc91b68dc3e1696f77d2b757 extends Twig_Template
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
        echo "    
    ";
        // line 5
        if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > (isset($context["maxPage"]) ? $context["maxPage"] : $this->getContext($context, "maxPage"))) || ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 1))) {
            // line 6
            echo "        WYSTAPIL BLAD! PRZEPRASZAMY!
    ";
        } else {
            // line 8
            echo "        <div class=\"container\">

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
            // line 121
            echo $this->env->getExtension('routing')->getPath("cook_book");
            echo "\">&laquo;</a>
                        </li>
                        ";
            // line 123
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 2), ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 2)));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 2) && ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < ((isset($context["maxPage"]) ? $context["maxPage"] : $this->getContext($context, "maxPage")) - 1)))) {
                    // line 124
                    echo "                            ";
                    if (($context["i"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                        // line 125
                        echo "                                <li class=\"active\">
                                    <a href=\" ";
                        // line 126
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["i"])), "html", null, true);
                        echo " \">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
                                </li>
                            ";
                    } else {
                        // line 129
                        echo "                                <li>
                                    <a href=\"";
                        // line 130
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["i"])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a>
                                </li>
                            ";
                    }
                    // line 133
                    echo "                        ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 134
                echo "                            ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 3)) {
                    // line 135
                    echo "                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 136
                        echo "                                    ";
                        if (($context["j"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                            // line 137
                            echo "                                        <li class=\"active\">
                                           <a href=\"";
                            // line 138
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["j"])), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                            echo "</a>
                                        </li>
                                    ";
                        } else {
                            // line 141
                            echo "                                        <li>
                                            <a href=\"";
                            // line 142
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["j"])), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                            echo "</a>
                                        </li>
                                    ";
                        }
                        // line 145
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                            ";
                } else {
                    // line 147
                    echo "                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(((isset($context["maxPage"]) ? $context["maxPage"] : $this->getContext($context, "maxPage")) - 4), (isset($context["maxPage"]) ? $context["maxPage"] : $this->getContext($context, "maxPage"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                        // line 148
                        echo "                                    ";
                        if (($context["k"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                            // line 149
                            echo "                                        <li class=\"active\">
                                           <a href=\"";
                            // line 150
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["k"])), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                            echo "</a>
                                        </li>
                                    ";
                        } else {
                            // line 153
                            echo "                                        <li>
                                            <a href=\"";
                            // line 154
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => $context["k"])), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                            echo "</a>
                                        </li>
                                    ";
                        }
                        // line 157
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "                            ";
                }
                // line 159
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                        <li>
                            <a href=\" ";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cook_book", array("page" => (isset($context["maxPage"]) ? $context["maxPage"] : $this->getContext($context, "maxPage")))), "html", null, true);
            echo " \">&raquo;</a>
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
        // line 179
        echo "    
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
        return array (  308 => 179,  287 => 161,  284 => 160,  278 => 159,  275 => 158,  269 => 157,  261 => 154,  258 => 153,  250 => 150,  247 => 149,  244 => 148,  239 => 147,  236 => 146,  230 => 145,  222 => 142,  219 => 141,  211 => 138,  208 => 137,  205 => 136,  200 => 135,  197 => 134,  191 => 133,  183 => 130,  180 => 129,  172 => 126,  169 => 125,  166 => 124,  160 => 123,  155 => 121,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
