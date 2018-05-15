<?php

/* PFAgendaBundle:TimeSlot:addTimeSlot.html.twig */
class __TwigTemplate_70f73f8f1b378d38fd7b88ba86b1579ae866ef84864d044fc4da1eaf7f828d03 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFAgendaBundle:TimeSlot:addTimeSlot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PFAgendaBundle:TimeSlot:addTimeSlot.html.twig"));

        // line 2
        echo "\t<h1>Ajouter un créneaux horaire</h1>
\t";
        // line 3
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 4
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
\t";
        }
        // line 6
        echo "\t<div>
\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
\t<p><a href=\"\">Retour</a></p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PFAgendaBundle:TimeSlot:addTimeSlot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ON/CabinetMedicalBundle/Resources/views/Patient/ajouter.html.twig #}
\t<h1>Ajouter un créneaux horaire</h1>
\t{% if message %}
\t\t<p>{{ message }}</p>
\t{% endif %}
\t<div>
\t\t{{ form(form) }}
\t</div>
\t<p><a href=\"\">Retour</a></p>", "PFAgendaBundle:TimeSlot:addTimeSlot.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\ReconversionPro\\src\\PF\\AgendaBundle\\Resources\\views\\TimeSlot\\addTimeSlot.html.twig");
    }
}
