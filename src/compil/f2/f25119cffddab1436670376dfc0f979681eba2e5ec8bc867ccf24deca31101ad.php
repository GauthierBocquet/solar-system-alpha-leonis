<?php

/* index.html.twig */
class __TwigTemplate_26b89e9080c5f5429e84c41ef4d9cf37f7ccb6923710ad5ee5c16bfeaef85363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
    <link rel='stylesheet' href='../css/barre_menu.css' type='text/css' />
    <link rel='stylesheet' href='../css/styles.css' type='text/css' />
    <title>Alpha Leonis</title>
</head>

";
        // line 8
        $this->loadTemplate("barre_menu.html.twig", "index.html.twig", 8)->display($context);
        // line 9
        echo "<section class=\"clearfix\">

    <div id=\"wrap\">
    <ul class=\"wrap-focus-planet\">

        <li class=\"planet-li\"><a hreh=\"#\" class=\"focus-planet\" onclick=\"setFocusPlanet('Sun');\"> Sun</a><img src=\"../assets/images3D/icons/sun.png\" alt=\"\"></li>
        <li class=\"planet-li\"><a hreh=\"#\" class=\"focus-planet\" onclick=\"setFocusPlanet('Mercury');\"> Mercury</a><img src=\"../assets/images3D/icons/mercury.png\" alt=\"\"></li>
        <li class=\"planet-li\"><a hreh=\"#\" class=\"focus-planet\" onclick=\"setFocusPlanet('Venus');\"> Venus</a><img src=\"../assets/images3D/icons/venus.png\" alt=\"\"></li>
        <li class=\"planet-li\"><a hreh=\"#\" class=\"focus-planet\" onclick=\"setFocusPlanet('Earth');\"> Earth</a><img src=\"../assets/images3D/icons/earth.png\" alt=\"\"></li>
        <li class=\"planet-li\"><a hreh=\"#\" class=\"focus-planet\" onclick=\"setFocusPlanet('Mars');\"> Mars</a><img src=\"../assets/images3D/icons/mars.png\" alt=\"\"></li>
        <li class=\"planet-li\"><a hreh=\"#\" class=\"focus-planet\" onclick=\"setFocusPlanet('Jupiter');\"> Jupiter</a><img src=\"../assets/images3D/icons/jupiter.png\" alt=\"\"></li>
        <li class=\"planet-li\"><a hreh=\"#\" class=\"focus-planet\" onclick=\"setFocusPlanet('Saturn');\"> Saturn</a><img src=\"../assets/images3D/icons/saturn.png\" alt=\"\"></li>
        <li class=\"planet-li\"><a hreh=\"#\" class=\"focus-planet\" onclick=\"setFocusPlanet('Uranus');\"> Uranus</a><img src=\"../assets/images3D/icons/uranus.png\" alt=\"\"></li>
    </ul>

    <div class=\"wrapper-content\">
        <div class=\"content\">
            <div class=\"close\"></div>
            <div class=\"planet\">
                <h1>Sun</h1>
                <div class=\"content-data\"></div>
            </div>
            <div class=\"planet\">
                <h1>Mercury</h1>
                <div class=\"content-data\"></div>
            </div>
            <div class=\"planet\">
                <h1>Venus</h1>
                <div class=\"content-data\"></div>
            </div>
            <div class=\"planet\">
                <h1>Earth</h1>
                <div class=\"content-data\"></div>
            </div>
            <div class=\"planet\">
                <h1>Mars</h1>
                <div class=\"content-data\"></div>
            </div>
            <div class=\"planet\">
                <h1>Jupiter</h1>
                <div class=\"content-data\"></div>
            </div>
            <div class=\"planet\">
                <h1>Saturn</h1>
                <div class=\"content-data\"></div>
            </div>
            <div class=\"planet\">
                <h1>Uranus</h1>
                <div class=\"content-data\"></div>
            </div>
            <div class=\"planet\">
                <h1>Neptune</h1>
                <div class=\"content-data\"></div>
            </div>


        </div>
    </div>

        <script src='../js/lib/jquery-3.1.0.min.js'></script>
        <script src='../js/lib/UniverseData.js'></script>
        <script src='../js/lib/three.js/three.min.js'></script>
        <script src='../js/lib/three.js/TrackballControls.js'></script>
        <script src='../js/lib/three.js/threex.planets.js'></script>
        <script src='../js/lib/three.js/threex.atmospherematerial.js'></script>
        <script src='../js/lib/three.js/dat.gui.min.js'></script>
        <script src='../js/lib/three.js/TextGeometry.js'></script>
        <script src='../js/lib/three.js/Camera.js'></script>
        <script src='../js/lib/tween.min.js'></script>

        <script src='../js/planetes.js'></script>

    </div>
        </section>


";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/Applications/MAMP/htdocs/alpha_leonis/src/templates/index.html.twig");
    }
}
