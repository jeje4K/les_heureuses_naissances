<?php

/* AppBundle:Advert:view.html.twig */
class __TwigTemplate_88b079db5de255cc04c088dfe4acabbd2a3f21a3a5d0955a782bded1e3d817a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb0b0a62daa924133a632c4460719e165dfed6cb1d7f8cb796a2d0028b40bc80 = $this->env->getExtension("native_profiler");
        $__internal_cb0b0a62daa924133a632c4460719e165dfed6cb1d7f8cb796a2d0028b40bc80->enter($__internal_cb0b0a62daa924133a632c4460719e165dfed6cb1d7f8cb796a2d0028b40bc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb0b0a62daa924133a632c4460719e165dfed6cb1d7f8cb796a2d0028b40bc80->leave($__internal_cb0b0a62daa924133a632c4460719e165dfed6cb1d7f8cb796a2d0028b40bc80_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8bca9079a15f4a94565e36069f5812fba29700be69e77b1a014108ed4cab8c9 = $this->env->getExtension("native_profiler");
        $__internal_c8bca9079a15f4a94565e36069f5812fba29700be69e77b1a014108ed4cab8c9->enter($__internal_c8bca9079a15f4a94565e36069f5812fba29700be69e77b1a014108ed4cab8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c8bca9079a15f4a94565e36069f5812fba29700be69e77b1a014108ed4cab8c9->leave($__internal_c8bca9079a15f4a94565e36069f5812fba29700be69e77b1a014108ed4cab8c9_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_db99daedd197b2349e0e7def3e009a3070817821dc1dc8e6577f3a42c62a88d9 = $this->env->getExtension("native_profiler");
        $__internal_db99daedd197b2349e0e7def3e009a3070817821dc1dc8e6577f3a42c62a88d9->enter($__internal_db99daedd197b2349e0e7def3e009a3070817821dc1dc8e6577f3a42c62a88d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
  ";
        // line 13
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 14
            echo " <img 
  src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
  alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
/>
";
        }
        // line 19
        echo "
  <div class=\"well\">
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>
  <h2>Candidatures</h2>

  <ul>
    
  </ul>
  ";
        // line 28
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 29
            echo "  <p>
    Cette annonce est parue dans les catégories suivantes :
    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 32
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 33
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "  </p>
";
        }
        // line 36
        echo "
";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 38
            echo "  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 42
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </ul>
  </div>
";
        }
        // line 47
        echo "  <p>
    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_db99daedd197b2349e0e7def3e009a3070817821dc1dc8e6577f3a42c62a88d9->leave($__internal_db99daedd197b2349e0e7def3e009a3070817821dc1dc8e6577f3a42c62a88d9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 56,  186 => 52,  179 => 48,  176 => 47,  171 => 44,  160 => 42,  156 => 41,  151 => 38,  149 => 37,  146 => 36,  142 => 34,  128 => 33,  122 => 32,  105 => 31,  101 => 29,  99 => 28,  89 => 21,  85 => 19,  79 => 16,  75 => 15,  72 => 14,  70 => 13,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/*   {% if advert.image is not null %}*/
/*  <img */
/*   src="{{ asset(advert.image.webPath) }}"*/
/*   alt="{{ advert.image.alt }}"*/
/* />*/
/* {% endif %}*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/*   <h2>Candidatures</h2>*/
/* */
/*   <ul>*/
/*     */
/*   </ul>*/
/*   {% if not advert.categories.empty %}*/
/*   <p>*/
/*     Cette annonce est parue dans les catégories suivantes :*/
/*     {% for category in advert.categories %}*/
/*       {{ category.name }}{% if not loop.last %}, {% endif %}*/
/*     {% endfor %}*/
/*   </p>*/
/* {% endif %}*/
/* */
/* {% if listAdvertSkills|length > 0 %}*/
/*   <div>*/
/*     Cette annonce requiert les compétences suivantes :*/
/*     <ul>*/
/*       {% for advertSkill in listAdvertSkills %}*/
/*         <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
