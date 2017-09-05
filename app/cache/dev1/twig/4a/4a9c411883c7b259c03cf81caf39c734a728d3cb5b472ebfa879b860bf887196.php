<?php

/* :supplier:index.html.twig */
class __TwigTemplate_f72866c04670284c021df497a0d97256e959cf620dd4c48915e108dba2aa134c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":supplier:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be29f585e7f3f0b93055df385acb61b4c76909b89b830c8e1390234de75399a7 = $this->env->getExtension("native_profiler");
        $__internal_be29f585e7f3f0b93055df385acb61b4c76909b89b830c8e1390234de75399a7->enter($__internal_be29f585e7f3f0b93055df385acb61b4c76909b89b830c8e1390234de75399a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":supplier:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be29f585e7f3f0b93055df385acb61b4c76909b89b830c8e1390234de75399a7->leave($__internal_be29f585e7f3f0b93055df385acb61b4c76909b89b830c8e1390234de75399a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2887c878c31d5678eb9ebe6c855c52c8edef70364aa1b139b68360ac0d18cf8d = $this->env->getExtension("native_profiler");
        $__internal_2887c878c31d5678eb9ebe6c855c52c8edef70364aa1b139b68360ac0d18cf8d->enter($__internal_2887c878c31d5678eb9ebe6c855c52c8edef70364aa1b139b68360ac0d18cf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Supplier:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_2887c878c31d5678eb9ebe6c855c52c8edef70364aa1b139b68360ac0d18cf8d->leave($__internal_2887c878c31d5678eb9ebe6c855c52c8edef70364aa1b139b68360ac0d18cf8d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50ddbe6bd1ab5fb2b8788e54acc3b3fe89905847583165e3a7105aca585c8cc4 = $this->env->getExtension("native_profiler");
        $__internal_50ddbe6bd1ab5fb2b8788e54acc3b3fe89905847583165e3a7105aca585c8cc4->enter($__internal_50ddbe6bd1ab5fb2b8788e54acc3b3fe89905847583165e3a7105aca585c8cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_50ddbe6bd1ab5fb2b8788e54acc3b3fe89905847583165e3a7105aca585c8cc4->leave($__internal_50ddbe6bd1ab5fb2b8788e54acc3b3fe89905847583165e3a7105aca585c8cc4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbbe9fe28ddc254a6ac5d802f81808b68f6aa7a163384a16cfdee0945de1cb4a = $this->env->getExtension("native_profiler");
        $__internal_cbbe9fe28ddc254a6ac5d802f81808b68f6aa7a163384a16cfdee0945de1cb4a->enter($__internal_cbbe9fe28ddc254a6ac5d802f81808b68f6aa7a163384a16cfdee0945de1cb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script>\$(\".";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexDataTable(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "html", null, true);
        echo "\");</script>
";
        
        $__internal_cbbe9fe28ddc254a6ac5d802f81808b68f6aa7a163384a16cfdee0945de1cb4a->leave($__internal_cbbe9fe28ddc254a6ac5d802f81808b68f6aa7a163384a16cfdee0945de1cb4a_prof);

    }

    public function getTemplateName()
    {
        return ":supplier:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 11,  57 => 8,  51 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ render(controller('PartsboxBundle:Supplier:datatable', { 'ctrl': ctrl,'app':app,'url':url })) }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script>$(".{{ctrl}}").alexDataTable("{{app}}", "{{ctrl}}", "{{url}}", "{{view}}");</script>*/
/* {% endblock %}*/
/* */
