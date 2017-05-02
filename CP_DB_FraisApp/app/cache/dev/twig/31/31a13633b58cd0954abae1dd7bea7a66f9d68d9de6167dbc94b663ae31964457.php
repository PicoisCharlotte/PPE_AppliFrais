<?php

/* FraisBundle:Comptable:SuivrePaiements.html.twig */
class __TwigTemplate_a26dbc9a18e7e9f4a9a9ef5932dd57b258d87eefe3f0e02faf841631387b4db1 extends Twig_Template
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
        $__internal_e6c445c2c999e734833eaf13de825c9d684b19542820038854937fa366ed6cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c445c2c999e734833eaf13de825c9d684b19542820038854937fa366ed6cbf->enter($__internal_e6c445c2c999e734833eaf13de825c9d684b19542820038854937fa366ed6cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Comptable:SuivrePaiements.html.twig"));

        // line 2
        echo "
<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "3584534_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "3584534_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_style_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "3584534"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 8
        echo " 
    </head>


    <body>
        ";
        // line 13
        if (array_key_exists("formFiche", $context)) {
            // line 14
            echo "            ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formFiche"]) ? $context["formFiche"] : $this->getContext($context, "formFiche")), 'form');
            echo "
        ";
        }
        // line 16
        echo "        ";
        if (array_key_exists("noFiche", $context)) {
            // line 17
            echo "            <div class=\"alert alert-default\">
                <strong> Oups !</strong> ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["noFiche"]) ? $context["noFiche"] : $this->getContext($context, "noFiche")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 21
        echo "        <table  class=\"table-bordered\" >



            ";
        // line 25
        if (array_key_exists("ficheVA", $context)) {
            // line 26
            echo "
                <tr>
                    <th>Identifiant </th>
                    <th>Nom </th>
                    <th>Prénom </th>                    
                    <th>Date </th>                                     
                    <th>Etat </th>
                    <th>Date du modif </th>
                </tr>

                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ficheVA"]) ? $context["ficheVA"] : $this->getContext($context, "ficheVA")));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 37
                echo "

                    <tr>     

                        <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "idvisiteur", array()), "nom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "idvisiteur", array()), "prenom", array()), "html", null, true);
                echo "</td> 
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "idEtat", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datemodif", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>
                            <form action=\"";
                // line 48
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailFiche");
                echo "\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Détail\" />   
                                <input type=\"hidden\" name=\"idFiche\"  value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
                echo "\"/>                              
                            </form>
                        </td>

                    </tr>



                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        }
        // line 60
        echo "
        </table>

        <form action=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frais_connexionC");
        echo "\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
        </form>


    </body>

    suivre paiements ";
        
        $__internal_e6c445c2c999e734833eaf13de825c9d684b19542820038854937fa366ed6cbf->leave($__internal_e6c445c2c999e734833eaf13de825c9d684b19542820038854937fa366ed6cbf_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Comptable:SuivrePaiements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 63,  163 => 60,  160 => 59,  145 => 50,  140 => 48,  135 => 46,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  109 => 37,  105 => 36,  93 => 26,  91 => 25,  85 => 21,  79 => 18,  76 => 17,  73 => 16,  67 => 14,  65 => 13,  58 => 8,  32 => 7,  28 => 6,  22 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

<html>
    <head>
        <title>Bienvenue dans AppliFrais !</title>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>


    <body>
        {% if formFiche is defined %}
            {{form(formFiche)}}
        {%endif%}
        {% if noFiche is defined %}
            <div class=\"alert alert-default\">
                <strong> Oups !</strong> {{noFiche}}
            </div>
        {% endif %}
        <table  class=\"table-bordered\" >



            {% if ficheVA is defined%}

                <tr>
                    <th>Identifiant </th>
                    <th>Nom </th>
                    <th>Prénom </th>                    
                    <th>Date </th>                                     
                    <th>Etat </th>
                    <th>Date du modif </th>
                </tr>

                {% for fiche in ficheVA %}


                    <tr>     

                        <td>{{ fiche.id }}</td>
                        <td>{{ fiche.idvisiteur.nom }}</td>
                        <td>{{ fiche.idvisiteur.prenom }}</td> 
                        <td>{{ fiche.date | date('d/m/Y')}}</td>
                        <td>{{ fiche.idEtat}}</td>
                        <td>{{ fiche.datemodif | date('d/m/Y')}}</td>
                        <td>
                            <form action=\"{{ path('detailFiche') }}\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Détail\" />   
                                <input type=\"hidden\" name=\"idFiche\"  value=\"{{ fiche.id }}\"/>                              
                            </form>
                        </td>

                    </tr>



                {% endfor %}
            {% endif %}

        </table>

        <form action=\"{{ path('frais_connexionC') }}\" method=\"post\">
            <input type=\"submit\" class=\"btn btn-lg btn-default\"  value=\"Retour\" />
        </form>


    </body>

    suivre paiements ";
    }
}
