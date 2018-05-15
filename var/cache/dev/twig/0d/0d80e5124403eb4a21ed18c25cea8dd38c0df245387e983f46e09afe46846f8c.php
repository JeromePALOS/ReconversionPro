<?php

/* PFAgendaBundle:TimeSlot:viewTimeSlot.html.twig */
class __TwigTemplate_8bab85ea8941304d2b154bd93e58b4bf2aa1f6dfd0917999e765b5ca3c515ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PFAgendaBundle::layout.html.twig", "PFAgendaBundle:TimeSlot:viewTimeSlot.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PFAgendaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFAgendaBundle:TimeSlot:viewTimeSlot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFAgendaBundle:TimeSlot:viewTimeSlot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | TimeSlot
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
\t\t<table class=\"table table-hover\" id=\"table-timeslot\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTimeSlot"]) ? $context["listTimeSlot"] : $this->getContext($context, "listTimeSlot")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["timeslot"]) {
            // line 20
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timeslot"], "date", array()), "d/m/Y H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 26
            if ((twig_length_filter($this->env, $this->getAttribute($context["timeslot"], "rdv", array())) > 0)) {
                // line 27
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["timeslot"], "rdv", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["rdv"], "candidat", array()) == (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "status", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t<a class=\"btn-blue\" aria-label=\"reserve this time slot\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pf_agenda_add_rdv", array("idtimeslot" => $this->getAttribute($context["timeslot"], "id", array()), "typerdv" => "skype")), "html", null, true);
                echo "\">Reserve Skype</a>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t</tr>";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $context["timeslot"]);
            echo "
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeslot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t

\t\t\t</tbody>
\t\t</table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PFAgendaBundle:TimeSlot:viewTimeSlot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 39,  151 => 38,  147 => 36,  141 => 34,  138 => 33,  131 => 31,  125 => 29,  122 => 28,  117 => 27,  115 => 26,  109 => 23,  104 => 21,  101 => 20,  84 => 19,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PFAgendaBundle::layout.html.twig\" %}


{% block title %}
\t{{ parent() }} | TimeSlot
{% endblock %}

{% block body %}

\t\t<table class=\"table table-hover\" id=\"table-timeslot\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for timeslot in listTimeSlot %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">{{ loop.index }}</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ timeslot.date|date('d/m/Y H:i') }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if timeslot.rdv|length > 0 %}
\t\t\t\t\t\t\t\t{% for rdv in timeslot.rdv %}
\t\t\t\t\t\t\t\t\t{% if rdv.candidat == user %}
\t\t\t\t\t\t\t\t\t\t{{ rdv.status }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a class=\"btn-blue\" aria-label=\"reserve this time slot\" href=\"{{ path('pf_agenda_add_rdv', {'idtimeslot': timeslot.id, 'typerdv': 'skype' }) }}\">Reserve Skype</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t</tr>{{ dump(timeslot)}}
\t\t\t\t{% endfor %}\t\t\t

\t\t\t</tbody>
\t\t</table>


{% endblock %}

", "PFAgendaBundle:TimeSlot:viewTimeSlot.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\symfony\\reconversionPro\\src\\PF\\AgendaBundle\\Resources\\views\\TimeSlot\\viewTimeSlot.html.twig");
    }
}
