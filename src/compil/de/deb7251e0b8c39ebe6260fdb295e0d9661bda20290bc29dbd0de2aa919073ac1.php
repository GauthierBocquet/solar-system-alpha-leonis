<?php

/* barre_menu.html.twig */
class __TwigTemplate_520eea3413a6af4041a10df5313a1f983720f2a012cde7b0539436cabd775d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
        // line 2
        echo "    <header class=\"clearfix\">
        <div class=\"container\">
            <div class=\"header-left\">
                <a href=\"index.php\"><img src=\"../assets/img/logo_alpha_leonis.PNG\" alt=\"Alpha Leonis\"/></a>
            </div>

            ";
        // line 8
        if ((null === ($context["connexionState"] ?? null))) {
            // line 9
            echo "                <div class=\"header-left-center\">
                    <a href=\"connexion.php\"><img src=\"../assets/img/user.png\" alt=\"User Icon\"/></a>
                </div>
            ";
        } else {
            // line 13
            echo "                <div class=\"header-left-center \">
                    <a href=\"favoris.php\"><img id=\"favoris-img\" src=\"../assets/img/heart.png\" alt=\"Favs Icon\"/></a>
                </div>
            ";
        }
        // line 17
        echo "
            <div id=\"header-icones\">
                <a href=\"index.php\"><img src=\"../assets/img/planete_icone.png\" alt=\"Planètes\"/></a>
                <a href=\"constellations.php\"><img src=\"../assets/img/constellation_icone.png\" alt=\"Planètes\"/></a>
            </div>
            <div class=\"header-right\">
                <label for=\"open\">
                    <span class=\"hidden-desktop\"></span>
                </label>
                <input type=\"checkbox\" name=\"\" id=\"open\">
                <nav>
                    <p><input type=\"text\" class=\"input-recherche\" onkeypress=\"recherche()\" placeholder=\"Rechercher\"/> </p>
                </nav>
                <div id=\"resultat-recherche\" >
                    <ul id=\"liste-resultat-recherche\">
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <script src='../js/lib/jquery-3.1.0.min.js'></script>
    <script src='../js/recherche.js'></script>

";
    }

    public function getTemplateName()
    {
        return "barre_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  42 => 13,  36 => 9,  34 => 8,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "barre_menu.html.twig", "/Applications/MAMP/htdocs/alpha_leonis/src/templates/barre_menu.html.twig");
    }
}
