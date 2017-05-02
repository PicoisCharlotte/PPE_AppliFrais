<?php

/* FraisBundle:Comptable:DetailFrais.html.twig */
class __TwigTemplate_8f772a85daf74453b72c5f6e76e751546dc5f6751d4acf6e45bc1201e71d65a0 extends Twig_Template
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
        $__internal_572a312e452f93d6fd5b998742b047950da14c4b92b1d0091e4a6709f080cff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572a312e452f93d6fd5b998742b047950da14c4b92b1d0091e4a6709f080cff7->enter($__internal_572a312e452f93d6fd5b998742b047950da14c4b92b1d0091e4a6709f080cff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisBundle:Comptable:DetailFrais.html.twig"));

        // line 2
        echo "
Détail frais ! <3

<html>
    <head>
        ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3584534_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3584534_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/3584534_part_1_bootstrap-theme.min_1.css");
            // line 8
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
        // line 9
        echo " 
    </head>
    ";
        // line 11
        echo twig_include($this->env, $context, "FraisBundle:Template:VisiteurConnectedMenu.html.twig");
        echo "

    <div class=\"container\">
        ";
        // line 19
        echo "        <h3>
            Informations de la fiche de frais en cours
            <h3>
                <table  class=\"table-bordered\" >

                    ";
        // line 24
        if (array_key_exists("fiche", $context)) {
            // line 25
            echo "                        ";
            // line 26
            echo "
                        <tr>
                            <th>Identifiant</th>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>

                        <tr>
                            <th>Nom </th>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idvisiteur", array()), "nom", array()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th>Prénom </th>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idvisiteur", array()), "prenom", array()), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>     
                            <th>Date </th>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <tr>

                            <th>Etat </th>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idEtat", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>
                            <th>Date de modif </th>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "datemodif", array()), "d/m/Y"), "html", null, true);
            echo "</td>

                        </tr>
                        ";
            // line 56
            if (array_key_exists("etat", $context)) {
                // line 57
                echo "                            ";
                if (((isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")) == "CL")) {
                    // line 58
                    echo "
                                <form action=\"";
                    // line 59
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("misePaiement");
                    echo "\" method=\"post\">
                                    <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Mise en Paiement\" style=\"margin:20px\"/> 
                                    <input type=\"hidden\" name=\"idFiche\" value=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "id", array()), "html", null, true);
                    echo "\"/>
                                </form>
                            ";
                }
                // line 64
                echo "                        ";
            }
            // line 65
            echo "
                    ";
        }
        // line 67
        echo "                </table>
                <br>

                <h3>
                    Frais Forfaitisés
                    <h3>
                        <table  class=\"table-bordered\" >

                            <thead>
                            <th> Libellé</th>
                            <th> Montant</th>
                            <th> Quantité </th>
                            <th> Total </th>

                            </thead>

                            ";
        // line 83
        $context["total"] = 0;
        // line 84
        echo "                            ";
        if (array_key_exists("fraisForfait", $context)) {
            // line 85
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisForfait"]) ? $context["fraisForfait"] : $this->getContext($context, "fraisForfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unFraisForfait"]) {
                // line 86
                echo "                                    <tr>
                                        <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unFraisForfait"], "idfraisforfait", array()), "libelle", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unFraisForfait"], "idfraisforfait", array()), "montant", array()), "html", null, true);
                echo " €</td>
                                        <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisForfait"], "quantite", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 90
                echo twig_escape_filter($this->env, ($this->getAttribute($context["unFraisForfait"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["unFraisForfait"], "idfraisforfait", array()), "montant", array())), "html", null, true);
                echo " €</td>
                                        ";
                // line 91
                $context["total"] = (($this->getAttribute($context["unFraisForfait"], "quantite", array()) * $this->getAttribute($this->getAttribute($context["unFraisForfait"], "idfraisforfait", array()), "montant", array())) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                echo "         
                                    </tr>          
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFraisForfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "  
                            ";
        }
        // line 95
        echo "




                        </table>

                        <h5>  Les frais forfaitisés s'élèvent à :  ";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " € <h5>



                                <h3>
                                    Frais Non Forfaitisés
                                    <h3>
                                        <table  class=\"table-bordered\" >

                                            <thead>
                                            <th> Libellé</th>
                                            <th> Montant</th>                              
                                            <th> Date </th>

                                            </thead>

                                            ";
        // line 118
        $context["total"] = 0;
        // line 119
        echo "                                            ";
        if (array_key_exists("fraisHorsForfait", $context)) {
            // line 120
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fraisHorsForfait"]) ? $context["fraisHorsForfait"] : $this->getContext($context, "fraisHorsForfait")));
            foreach ($context['_seq'] as $context["_key"] => $context["unFraisHorsForfait"]) {
                // line 121
                echo "                                                    <tr>
                                                        <td>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHorsForfait"], "libelle", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["unFraisHorsForfait"], "montant", array()), "html", null, true);
                echo " €</td>
                                                        <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unFraisHorsForfait"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>

                                                        ";
                // line 126
                $context["total"] = ($this->getAttribute($context["unFraisHorsForfait"], "montant", array()) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                echo "         
                                                    </tr>          
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFraisHorsForfait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo " 
                                            ";
        }
        // line 130
        echo "
                                            </div>

                                        </table>

                                        <h5>  Les frais non forfaitisés s'élèvent à :  ";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " € <h5>


";
        
        $__internal_572a312e452f93d6fd5b998742b047950da14c4b92b1d0091e4a6709f080cff7->leave($__internal_572a312e452f93d6fd5b998742b047950da14c4b92b1d0091e4a6709f080cff7_prof);

    }

    public function getTemplateName()
    {
        return "FraisBundle:Comptable:DetailFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 135,  283 => 130,  279 => 128,  270 => 126,  265 => 124,  261 => 123,  257 => 122,  254 => 121,  249 => 120,  246 => 119,  244 => 118,  225 => 102,  216 => 95,  212 => 93,  203 => 91,  199 => 90,  195 => 89,  191 => 88,  187 => 87,  184 => 86,  179 => 85,  176 => 84,  174 => 83,  156 => 67,  152 => 65,  149 => 64,  143 => 61,  138 => 59,  135 => 58,  132 => 57,  130 => 56,  124 => 53,  116 => 48,  109 => 44,  101 => 39,  94 => 35,  85 => 29,  80 => 26,  78 => 25,  76 => 24,  69 => 19,  63 => 11,  59 => 9,  33 => 8,  29 => 7,  22 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}

Détail frais ! <3

<html>
    <head>
        {% stylesheets '@FraisBundle/Resources/public/css/*' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        {% endstylesheets %} 
    </head>
    {{ include(\"FraisBundle:Template:VisiteurConnectedMenu.html.twig\") }}

    <div class=\"container\">
        {#{% if lesFiches is defined%}
            {% for fiche in lesFiches %}
                {{ fiche.nbJustificatifs }}
            {% endfor %}
        {%endif%}#}
        <h3>
            Informations de la fiche de frais en cours
            <h3>
                <table  class=\"table-bordered\" >

                    {% if fiche is defined%}
                        {# {% for fiche in ficheFrais %}#}

                        <tr>
                            <th>Identifiant</th>
                            <td>{{ fiche.id }}</td>
                        </tr>
                        <tr>

                        <tr>
                            <th>Nom </th>
                            <td>{{ fiche.idvisiteur.nom }}</td>
                        </tr>
                        <tr>
                            <th>Prénom </th>
                            <td>{{ fiche.idvisiteur.prenom }}</td>
                        </tr>

                        <tr>     
                            <th>Date </th>
                            <td>{{ fiche.date | date('d/m/Y')}}</td>
                        <tr>

                            <th>Etat </th>
                            <td>{{ fiche.idEtat.libelle }}</td>
                        </tr>

                        <tr>
                            <th>Date de modif </th>
                            <td>{{ fiche.datemodif | date('d/m/Y')}}</td>

                        </tr>
                        {%if etat is defined%}
                            {%if etat == 'CL'%}

                                <form action=\"{{ path('misePaiement') }}\" method=\"post\">
                                    <input type=\"submit\" class=\"btn btn-lg btn-inverse\" value=\"Mise en Paiement\" style=\"margin:20px\"/> 
                                    <input type=\"hidden\" name=\"idFiche\" value=\"{{fiche.id}}\"/>
                                </form>
                            {%endif%}
                        {%endif%}

                    {%endif%}
                </table>
                <br>

                <h3>
                    Frais Forfaitisés
                    <h3>
                        <table  class=\"table-bordered\" >

                            <thead>
                            <th> Libellé</th>
                            <th> Montant</th>
                            <th> Quantité </th>
                            <th> Total </th>

                            </thead>

                            {% set total = 0 %}
                            {%if fraisForfait is defined%}
                                {% for unFraisForfait in fraisForfait  %}
                                    <tr>
                                        <td>{{unFraisForfait.idfraisforfait.libelle}}</td>
                                        <td>{{unFraisForfait.idfraisforfait.montant}} €</td>
                                        <td>{{unFraisForfait.quantite}}</td>
                                        <td>{{unFraisForfait.quantite * unFraisForfait.idfraisforfait.montant}} €</td>
                                        {% set total = unFraisForfait.quantite * unFraisForfait.idfraisforfait.montant + total %}         
                                    </tr>          
                                {%endfor%}  
                            {%endif%}





                        </table>

                        <h5>  Les frais forfaitisés s'élèvent à :  {{total}} € <h5>



                                <h3>
                                    Frais Non Forfaitisés
                                    <h3>
                                        <table  class=\"table-bordered\" >

                                            <thead>
                                            <th> Libellé</th>
                                            <th> Montant</th>                              
                                            <th> Date </th>

                                            </thead>

                                            {% set total = 0 %}
                                            {%if fraisHorsForfait is defined%}
                                                {% for unFraisHorsForfait  in fraisHorsForfait %}
                                                    <tr>
                                                        <td>{{unFraisHorsForfait.libelle}}</td>
                                                        <td>{{unFraisHorsForfait.montant}} €</td>
                                                        <td>{{unFraisHorsForfait.date | date('d/m/Y') }}</td>

                                                        {% set total = unFraisHorsForfait.montant + total %}         
                                                    </tr>          
                                                {%endfor%} 
                                            {%endif%}

                                            </div>

                                        </table>

                                        <h5>  Les frais non forfaitisés s'élèvent à :  {{total}} € <h5>


";
    }
}
