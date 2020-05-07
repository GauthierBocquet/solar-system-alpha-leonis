<?php

/* constellations.html.twig */
class __TwigTemplate_92ac7a9f7da5388946348f1ce0c0d45f43b82a8bcd517276f0dc3b64456b5e31 extends Twig_Template
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
<head xmlns=\"http://www.w3.org/1999/html\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel='stylesheet' href='../css/barre_menu.css' type='text/css' />
    <link rel='stylesheet' href='../css/constellation.css' type='text/css' />
    <title>Alpha Leonis</title>
</head>
";
        // line 8
        $this->loadTemplate("barre_menu.html.twig", "constellations.html.twig", 8)->display($context);
        // line 9
        echo "<body>

    <script src='../js/lib/jquery-3.1.0.min.js'></script>
    <script src='../js/lib/UniverseData.js'></script>
    <script src='../js/lib/three.js/three.min.js'></script>
    <script src='../js/lib/three.js/TrackballControls.js'></script>
    <script src='../js/lib/three.js/threex.planets.js'></script>
    <script src='../js/lib/three.js/threex.atmospherematerial.js'></script>
    <script src='../js/lib/three.js/dat.gui.min.js'></script>
    <script src='../js/lib/three.js/TextGeometry.js'></script>
    <script src='../js/lib/three.js/Camera.js'></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"5\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"6\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"7\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"8\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"9\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"10\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"11\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"12\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"13\"></li>


        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"../assets/img/constellations/Balance.png\" alt=\"Balance\">
            </div>

            <div class=\"item\">
                <img src=\"../assets/img/constellations/Belier.png\" alt=\"Belier\">
            </div>

            <div class=\"item\">
                <img src=\"../assets/img/constellations/Cancer.png\" alt=\"Cancer\">
            </div>

            <div class=\"item\">
                <img src=\"../assets/img/constellations/Capricorne.png\" alt=\"Capricorne\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Cassiopeia.png\" alt=\"Cassiopeia\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Gemeaux.png\" alt=\"Gémeaux\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Grande_Ourse.png\" alt=\"Grande Ourse\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Lion.png\" alt=\"Lion\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/PetiteOurse.png\" alt=\"Petite Ourse\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Poissons.png\" alt=\"Poissons\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Sagittaire.png\" alt=\"Sagittaire\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Scorpion.png\" alt=\"Scorpion\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Taurus.png\" alt=\"Taureau\">
            </div>
            <div class=\"item\">
                <img src=\"../assets/img/constellations/Vierge.png\" alt=\"Vierge\">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

</body>";
    }

    public function getTemplateName()
    {
        return "constellations.html.twig";
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
        return new Twig_Source("", "constellations.html.twig", "/Applications/MAMP/htdocs/alpha_leonis/src/templates/constellations.html.twig");
    }
}
