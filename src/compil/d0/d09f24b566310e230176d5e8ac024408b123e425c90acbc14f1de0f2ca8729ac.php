<?php

/* info.html.twig */
class __TwigTemplate_d8da554ec0d4b41964143a43277e8fa2b283e30c97cc7b50843ad706091d239f extends Twig_Template
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
    <meta charset=\"ISO-8859-1\">
    <link rel='stylesheet' href='../css/barre_menu.css' type='text/css' />
    <link rel='stylesheet' href='../css/info.css' type='text/css' />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"../js/info.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    <title>Alpha Leonis</title>
</head>
";
        // line 13
        $this->loadTemplate("barre_menu.html.twig", "info.html.twig", 13)->display($context);
        // line 14
        echo "<body>
";
        // line 15
        if ( !twig_test_empty((isset($context["message_erreur"]) ? $context["message_erreur"] : null))) {
            // line 16
            echo "    <h1>";
            echo twig_escape_filter($this->env, (isset($context["message_erreur"]) ? $context["message_erreur"] : null), "html", null, true);
            echo "</h1>
";
        }
        // line 18
        echo "<div id=\"container\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" >
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
        </ol>

        <div class=\"carousel-inner\">
        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    <div  id=\"container-infos\">
        <form method=\"GET\"  action=\"info.php? \">
            <input type=\"hidden\" name=\"pdf\" />
            ";
        // line 38
        if ( !twig_test_empty((isset($context["info_planete"]) ? $context["info_planete"] : null))) {
            // line 39
            echo "                <input type=\"hidden\" name=\"planete\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "nom", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 41
        echo "            ";
        if ( !twig_test_empty((isset($context["info_constellation"]) ? $context["info_constellation"] : null))) {
            // line 42
            echo "                <input type=\"hidden\" name=\"constellation\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "abv", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 44
        echo "            <input type=\"hidden\" name=\"pdf\" value=\"1\"/>

            <img src=\"../assets/img/pdf.png\" onclick=\"submit();\" style=\"float:right\">
        </form>
        ";
        // line 48
        if ( !twig_test_empty((isset($context["info_planete"]) ? $context["info_planete"] : null))) {
            // line 49
            echo "            ";
            if ((isset($context["is_favoris"]) ? $context["is_favoris"] : null)) {
                // line 50
                echo "                <img src=\"../assets/img/heart.png\" style=\"width:50px;\" >
            ";
            } else {
                // line 52
                echo "                <img src=\"../assets/img/heart_grey.png\" style=\"width:50px;\" onclick=\"addtofav('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "id", array()), "html", null, true);
                echo "','planete'); window.location.replace('../php/info.php?planete=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "nom", array()), "html", null, true);
                echo "');\">
            ";
            }
            // line 54
            echo "        <ul id=\"liste_info\">
            <li id=\"nom\" > ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "nom", array()), "html", null, true);
            echo "</li>
            ";
            // line 56
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "mass", array()))) {
                // line 57
                echo "                <li><label>Masse :</label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "mass", array()), "html", null, true);
                echo " 10e24Kg</li>
            ";
            }
            // line 59
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "diameter", array()))) {
                // line 60
                echo "                <li><label>Diamètre : </label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "diameter", array()), "html", null, true);
                echo " Km</li>
            ";
            }
            // line 62
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "density", array()))) {
                // line 63
                echo "                <li><label>Densité :</label>  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "density", array()), "html", null, true);
                echo " Kg/m3</li>
            ";
            }
            // line 65
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "gravity", array()))) {
                // line 66
                echo "                <li><label>Gravité :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "gravity", array()), "html", null, true);
                echo " 8.7 M/s2</li>
            ";
            }
            // line 68
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "escapeVelocity", array()))) {
                // line 69
                echo "                <li><label>Vitesse de libération :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "escapeVelocity", array()), "html", null, true);
                echo " Km/s</li>
            ";
            }
            // line 71
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "rotationPeriod", array()))) {
                // line 72
                echo "                <li><label>Période de rotation :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "rotationPeriod", array()), "html", null, true);
                echo " h</li>
            ";
            }
            // line 74
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "lengthDay", array()))) {
                // line 75
                echo "                <li><label> Durée d'une journée :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "lengthDay", array()), "html", null, true);
                echo " h</li>
            ";
            }
            // line 77
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "distanceFromSun", array()))) {
                // line 78
                echo "                <li><label>Distance du Soleil :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "distanceFromSun", array()), "html", null, true);
                echo "</li>
            ";
            }
            // line 80
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "meanTemperature", array()))) {
                // line 81
                echo "                <li><label>Température moyenne : </label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "meanTemperature", array()), "html", null, true);
                echo " C</li>
            ";
            }
            // line 83
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "surfacePressure", array()))) {
                // line 84
                echo "                <li><label>Pression en surface : </label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "surfacePressure", array()), "html", null, true);
                echo "</li>
            ";
            }
            // line 86
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "numberMoons", array()))) {
                // line 87
                echo "                <li><label>Nombre de lunes :</label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_planete"]) ? $context["info_planete"] : null), "numberMoons", array()), "html", null, true);
                echo "</li>
            ";
            }
            // line 89
            echo "        </ul>
        ";
        }
        // line 91
        echo "        ";
        if ( !twig_test_empty((isset($context["info_constellation"]) ? $context["info_constellation"] : null))) {
            // line 92
            echo "            ";
            if ((isset($context["is_favoris"]) ? $context["is_favoris"] : null)) {
                // line 93
                echo "                <img src=\"../assets/img/heart.png\" style=\"width:50px;\" >
            ";
            } else {
                // line 95
                echo "                <img src=\"../assets/img/heart_grey.png\" style=\"width:50px;\" onclick=\"addtofav('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "id", array()), "html", null, true);
                echo "','constellation'); window.location.replace('../php/info.php?constellation=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "abv", array()), "html", null, true);
                echo "');\">
            ";
            }
            // line 97
            echo "            <ul id=\"liste_info\">
                <li id=\"nom\" > ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "nom", array()), "html", null, true);
            echo "</li>
                ";
            // line 99
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "nomLatin", array()))) {
                // line 100
                echo "                    <li><label>Nom latin :</label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "nomLatin", array()), "html", null, true);
                echo " </li>
                ";
            }
            // line 102
            echo "                ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "ascensionDroite", array()))) {
                // line 103
                echo "                    <li><label>Ascension droite : </label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "ascensionDroite", array()), "html", null, true);
                echo "</li>
                ";
            }
            // line 105
            echo "                ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "declinaison", array()))) {
                // line 106
                echo "                    <li><label>Déclinaison :</label>  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "declinaison", array()), "html", null, true);
                echo " </li>
                ";
            }
            // line 108
            echo "                ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "visibilite", array()))) {
                // line 109
                echo "                    <li><label>Visibilité :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "visibilite", array()), "html", null, true);
                echo " </li>
                ";
            }
            // line 111
            echo "                ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "meridien", array()))) {
                // line 112
                echo "                    <li><label>Méridien :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "meridien", array()), "html", null, true);
                echo "</li>
                ";
            }
            // line 114
            echo "                ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "nombreEtoile", array()))) {
                // line 115
                echo "                    <li><label>Nombre d'étoile  :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "nombreEtoile", array()), "html", null, true);
                echo " </li>
                ";
            }
            // line 117
            echo "                ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "nombreEtoileBrillante", array()))) {
                // line 118
                echo "                    <li><label> Nombre d'étoile brilliante:</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "nombreEtoileBrillante", array()), "html", null, true);
                echo " </li>
                ";
            }
            // line 120
            echo "                ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "etoileLaPlusBrillante", array()))) {
                // line 121
                echo "                    <li><label>Etoile la plus brilliante :</label> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "etoileLaPlusBrillante", array()), "html", null, true);
                echo "</li>
                ";
            }
            // line 123
            echo "                ";
            if ( !twig_test_empty($this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "etoileLaPlusProche", array()))) {
                // line 124
                echo "                    <li><label>Etoile la plus proche: </label>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info_constellation"]) ? $context["info_constellation"] : null), "etoileLaPlusProche", array()), "html", null, true);
                echo " C</li>
                ";
            }
            // line 126
            echo "            </ul>
        ";
        }
        // line 128
        echo "    </img>
</div>
</div>
</body>";
    }

    public function getTemplateName()
    {
        return "info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 128,  322 => 126,  316 => 124,  313 => 123,  307 => 121,  304 => 120,  298 => 118,  295 => 117,  289 => 115,  286 => 114,  280 => 112,  277 => 111,  271 => 109,  268 => 108,  262 => 106,  259 => 105,  253 => 103,  250 => 102,  244 => 100,  242 => 99,  238 => 98,  235 => 97,  227 => 95,  223 => 93,  220 => 92,  217 => 91,  213 => 89,  207 => 87,  204 => 86,  198 => 84,  195 => 83,  189 => 81,  186 => 80,  180 => 78,  177 => 77,  171 => 75,  168 => 74,  162 => 72,  159 => 71,  153 => 69,  150 => 68,  144 => 66,  141 => 65,  135 => 63,  132 => 62,  126 => 60,  123 => 59,  117 => 57,  115 => 56,  111 => 55,  108 => 54,  100 => 52,  96 => 50,  93 => 49,  91 => 48,  85 => 44,  79 => 42,  76 => 41,  70 => 39,  68 => 38,  46 => 18,  40 => 16,  38 => 15,  35 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "info.html.twig", "C:\\Users\\frink\\PhpstormProjects\\alpha_leonis\\alpha_leonis\\src\\templates\\info.html.twig");
    }
}
