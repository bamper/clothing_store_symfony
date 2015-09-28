<?php

/* ::base.html.twig */
class __TwigTemplate_c90f5e8fb2539ab7109ba9684145b710a4f78dc8dddd5df7563f4c4749893e66 extends Twig_Template
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
        $__internal_c0697b865c66b068da7ad7e511b98aca633f8ae4e61bbe5110ae7c949c29bdc2 = $this->env->getExtension("native_profiler");
        $__internal_c0697b865c66b068da7ad7e511b98aca633f8ae4e61bbe5110ae7c949c29bdc2->enter($__internal_c0697b865c66b068da7ad7e511b98aca633f8ae4e61bbe5110ae7c949c29bdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\">Clothing Store</a>
            </div>
            <div class=\"pull-right\">
                <form class=\"navbar-form\" role=\"search\">
                    <div class=\"input-group\">
                        <input id=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"q\" autocomplete=\"off\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                        </div>
                        <div id=\"update\"></div>
                    </div>
                </form>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("clothes");
        echo "\">Shop</a>
                    </li>
                    <li>
                        <a href=\"#\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class=\"container\">
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </div>
    </body>
</html>
";
        
        $__internal_c0697b865c66b068da7ad7e511b98aca633f8ae4e61bbe5110ae7c949c29bdc2->leave($__internal_c0697b865c66b068da7ad7e511b98aca633f8ae4e61bbe5110ae7c949c29bdc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa33aa3505463fff5c8e1a348ba180e50bf4d48be85cc62eacb583270fc030c1 = $this->env->getExtension("native_profiler");
        $__internal_fa33aa3505463fff5c8e1a348ba180e50bf4d48be85cc62eacb583270fc030c1->enter($__internal_fa33aa3505463fff5c8e1a348ba180e50bf4d48be85cc62eacb583270fc030c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clothing 9000!";
        
        $__internal_fa33aa3505463fff5c8e1a348ba180e50bf4d48be85cc62eacb583270fc030c1->leave($__internal_fa33aa3505463fff5c8e1a348ba180e50bf4d48be85cc62eacb583270fc030c1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0501394fee4277d736b5fe783350b1d3cee2bca2e59c4568cea25c80acf053c2 = $this->env->getExtension("native_profiler");
        $__internal_0501394fee4277d736b5fe783350b1d3cee2bca2e59c4568cea25c80acf053c2->enter($__internal_0501394fee4277d736b5fe783350b1d3cee2bca2e59c4568cea25c80acf053c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_0501394fee4277d736b5fe783350b1d3cee2bca2e59c4568cea25c80acf053c2->leave($__internal_0501394fee4277d736b5fe783350b1d3cee2bca2e59c4568cea25c80acf053c2_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_b65232a914f19c7d76841ecdeff0a49dbb85a2ae1d72c71c842e7f4a63e2268d = $this->env->getExtension("native_profiler");
        $__internal_b65232a914f19c7d76841ecdeff0a49dbb85a2ae1d72c71c842e7f4a63e2268d->enter($__internal_b65232a914f19c7d76841ecdeff0a49dbb85a2ae1d72c71c842e7f4a63e2268d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b65232a914f19c7d76841ecdeff0a49dbb85a2ae1d72c71c842e7f4a63e2268d->leave($__internal_b65232a914f19c7d76841ecdeff0a49dbb85a2ae1d72c71c842e7f4a63e2268d_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_373cc6809ec3abd3ac1a5efc93ae34f407f005a2f5d3285a44a845216a302112 = $this->env->getExtension("native_profiler");
        $__internal_373cc6809ec3abd3ac1a5efc93ae34f407f005a2f5d3285a44a845216a302112->enter($__internal_373cc6809ec3abd3ac1a5efc93ae34f407f005a2f5d3285a44a845216a302112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_373cc6809ec3abd3ac1a5efc93ae34f407f005a2f5d3285a44a845216a302112->leave($__internal_373cc6809ec3abd3ac1a5efc93ae34f407f005a2f5d3285a44a845216a302112_prof);

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
        return array (  170 => 63,  159 => 59,  150 => 10,  145 => 8,  140 => 7,  134 => 6,  122 => 5,  112 => 64,  110 => 63,  106 => 62,  102 => 61,  97 => 60,  95 => 59,  79 => 46,  73 => 43,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
