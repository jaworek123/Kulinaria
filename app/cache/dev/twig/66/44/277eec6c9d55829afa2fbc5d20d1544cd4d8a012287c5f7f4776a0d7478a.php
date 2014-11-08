<?php

/* KulinariaMainBundle:Main:cookbook.html.twig */
class __TwigTemplate_6644277eec6c9d55829afa2fbc5d20d1544cd4d8a012287c5f7f4776a0d7478a extends Twig_Template
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
                        <a href=\"#\">&laquo;</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"#\">1</a>
                    </li>
                    <li>
                        <a href=\"#\">2</a>
                    </li>
                    <li>
                        <a href=\"#\">3</a>
                    </li>
                    <li>
                        <a href=\"#\">4</a>
                    </li>
                    <li>
                        <a href=\"#\">5</a>
                    </li>
                    <li>
                        <a href=\"#\">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

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
        return "KulinariaMainBundle:Main:cookbook.html.twig";
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
