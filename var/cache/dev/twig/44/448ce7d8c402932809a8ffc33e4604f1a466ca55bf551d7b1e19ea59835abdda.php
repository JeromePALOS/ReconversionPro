<?php

/* PFAgendaBundle:Rdv:viewRdv.html.twig */
class __TwigTemplate_0b634a84cf61bd5b1fb3f2c0c86a21c9759a0e2a18f875accdcbebc81fa9a9a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PFAgendaBundle::layout.html.twig", "PFAgendaBundle:Rdv:viewRdv.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFAgendaBundle:Rdv:viewRdv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFAgendaBundle:Rdv:viewRdv.html.twig"));

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

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "
";
        // line 14
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugin/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel='stylesheet' />
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugin/fullcalendar/fullcalendar.print.css"), "html", null, true);
        echo "\" rel='stylesheet' media='print' />




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t\t<table class=\"table table-hover\" id=\"table-timeslot\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t<th scope=\"col\">Conseillé</th>
\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listRdv"]) ? $context["listRdv"] : $this->getContext($context, "listRdv")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 35
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["rdv"], "timeslot", array()), "date", array()), "d/m/Y H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rdv"], "timeslot", array()), "conseille", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "status", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t

\t\t\t</tbody>
\t\t</table>
\t\t
\t\t
  <div id='calendar'></div>



<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugin/fullcalendar/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.3.3.1.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugin/fullcalendar/fullcalendar.js"), "html", null, true);
        echo "\"></script>
<script>

  \$(document).ready(function() {

    \$('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },

      navLinks: true, // can click day/week names to navigate views
      events: [
\t\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTimeSlot"]) ? $context["listTimeSlot"] : $this->getContext($context, "listTimeSlot")));
        foreach ($context['_seq'] as $context["_key"] => $context["timeslot"]) {
            // line 73
            echo "\t\t\t\t\t\t{
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 75
            if ((twig_length_filter($this->env, $this->getAttribute($context["timeslot"], "rdv", array())) > 0)) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["timeslot"], "rdv", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["rdv"], "status", array()) != "Validate")) {
                        // line 78
                        echo "\t\t\t\t\t\t\t\t//ses propre timeslot
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tstart: '";
                        // line 80
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timeslot"], "date", array()), "Y-m-d\\TH:i:s"), "html", null, true);
                        echo "',
\t\t\t\t\t\t\t\t\t\t\tend: '";
                        // line 81
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timeslot"], "date", array()), "Y-m-d\\TH:i:s"), "html", null, true);
                        echo "',
\t\t\t\t\t\t\t\t\t\t\tbackgroundColor: '#00B2ED',
\t\t\t\t\t\t\t\t\t\t\tborderColor : '#00B2ED',
\t\t\t\t\t\t\t\t\t\t\ttextColor: 'white',
\t\t\t\t\t\t\t\t\t\t\ttitle: '[";
                        // line 85
                        echo twig_escape_filter($this->env, $this->getAttribute($context["timeslot"], "conseille", array()), "html", null, true);
                        echo "] Click to reserve',
\t\t\t\t\t\t\t\t\t\t\turl: '";
                        // line 86
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pf_agenda_add_rdv_sans_type", array("idtimeslot" => $this->getAttribute($context["timeslot"], "id", array()))), "html", null, true);
                        echo "',
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "\t\t\t\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\tstart: '";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timeslot"], "date", array()), "Y-m-d\\TH:i:s"), "html", null, true);
                echo "',
\t\t\t\t\t\t\t\t\t\tend: '";
                // line 91
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timeslot"], "date", array()), "Y-m-d\\TH:i:s"), "html", null, true);
                echo "',
\t\t\t\t\t\t\t\t\t\tbackgroundColor: '#00B2ED',
\t\t\t\t\t\t\t\t\t\tborderColor : '#00B2ED',
\t\t\t\t\t\t\t\t\t\ttextColor: 'white',
\t\t\t\t\t\t\t\t\t\ttitle: 'click to reserve',
\t\t\t\t\t\t\t\t\t\turl: '";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pf_agenda_add_rdv_sans_type", array("idtimeslot" => $this->getAttribute($context["timeslot"], "id", array()))), "html", null, true);
                echo "',
\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t},
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeslot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t]
    });

  });

</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "PFAgendaBundle:Rdv:viewRdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 101,  283 => 97,  278 => 96,  270 => 91,  265 => 90,  262 => 89,  256 => 88,  251 => 86,  247 => 85,  240 => 81,  236 => 80,  232 => 78,  229 => 77,  224 => 76,  222 => 75,  218 => 73,  214 => 72,  197 => 58,  193 => 57,  189 => 56,  177 => 46,  158 => 42,  153 => 40,  148 => 38,  143 => 36,  140 => 35,  123 => 34,  109 => 23,  100 => 22,  84 => 16,  80 => 15,  76 => 14,  73 => 13,  64 => 12,  51 => 5,  42 => 4,  11 => 1,);
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





{% block stylesheets %}

{{parent()}}
<link href=\"{{ asset('assets/plugin/fullcalendar/fullcalendar.css') }}\" rel='stylesheet' />
<link href=\"{{ asset('assets/plugin/fullcalendar/fullcalendar.print.css') }}\" rel='stylesheet' media='print' />




{% endblock %}
{% block body %}
{{parent()}}
\t\t<table class=\"table table-hover\" id=\"table-timeslot\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t<th scope=\"col\">Conseillé</th>
\t\t\t\t\t<th scope=\"col\">Statut</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for rdv in listRdv%}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">{{ loop.index }}</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ rdv.timeslot.date|date('d/m/Y H:i') }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ rdv.timeslot.conseille }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ rdv.status }}
\t\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}\t\t\t

\t\t\t</tbody>
\t\t</table>
\t\t
\t\t
  <div id='calendar'></div>



<script src=\"{{ asset('assets/plugin/fullcalendar/moment.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.3.3.1.js') }}\"></script>
<script src=\"{{ asset('assets/plugin/fullcalendar/fullcalendar.js') }}\"></script>
<script>

  \$(document).ready(function() {

    \$('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },

      navLinks: true, // can click day/week names to navigate views
      events: [
\t\t\t\t\t{% for timeslot in listTimeSlot %}
\t\t\t\t\t\t{
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{% if timeslot.rdv|length > 0 %}
\t\t\t\t\t\t\t\t\t{% for rdv in timeslot.rdv %}
\t\t\t\t\t\t\t\t\t\t{% if rdv.status != 'Validate' %}
\t\t\t\t\t\t\t\t//ses propre timeslot
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\tstart: '{{ timeslot.date|date('Y-m-d\\\\TH:i:s') }}',
\t\t\t\t\t\t\t\t\t\t\tend: '{{ timeslot.date|date('Y-m-d\\\\TH:i:s') }}',
\t\t\t\t\t\t\t\t\t\t\tbackgroundColor: '#00B2ED',
\t\t\t\t\t\t\t\t\t\t\tborderColor : '#00B2ED',
\t\t\t\t\t\t\t\t\t\t\ttextColor: 'white',
\t\t\t\t\t\t\t\t\t\t\ttitle: '[{{timeslot.conseille}}] Click to reserve',
\t\t\t\t\t\t\t\t\t\t\turl: '{{ path('pf_agenda_add_rdv_sans_type', { 'idtimeslot': timeslot.id }) }}',
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tstart: '{{ timeslot.date|date('Y-m-d\\\\TH:i:s') }}',
\t\t\t\t\t\t\t\t\t\tend: '{{ timeslot.date|date('Y-m-d\\\\TH:i:s') }}',
\t\t\t\t\t\t\t\t\t\tbackgroundColor: '#00B2ED',
\t\t\t\t\t\t\t\t\t\tborderColor : '#00B2ED',
\t\t\t\t\t\t\t\t\t\ttextColor: 'white',
\t\t\t\t\t\t\t\t\t\ttitle: 'click to reserve',
\t\t\t\t\t\t\t\t\t\turl: '{{ path('pf_agenda_add_rdv_sans_type', { 'idtimeslot': timeslot.id }) }}',
\t\t\t\t\t\t\t\t{% endif %}\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t},
\t\t\t\t\t{% endfor %}
\t\t\t\t]
    });

  });

</script>


{% endblock %}

", "PFAgendaBundle:Rdv:viewRdv.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\symfony\\reconversionPro\\src\\PF\\AgendaBundle/Resources/views/Rdv/viewRdv.html.twig");
    }
}
