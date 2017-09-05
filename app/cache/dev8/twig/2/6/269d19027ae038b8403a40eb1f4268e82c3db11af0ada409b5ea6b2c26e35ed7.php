<?php

/* customer/index.html.twig */
class __TwigTemplate_6b3ec2862504394ad9447bae7c51ef99d2491c037314b1e0187f45cc0ee3d867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer/index.html.twig", 1);
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
        $__internal_6f8af84a74641a62ee375935912c05d803b96c4a5a83d41c2a95a07099ba65fa = $this->env->getExtension("native_profiler");
        $__internal_6f8af84a74641a62ee375935912c05d803b96c4a5a83d41c2a95a07099ba65fa->enter($__internal_6f8af84a74641a62ee375935912c05d803b96c4a5a83d41c2a95a07099ba65fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f8af84a74641a62ee375935912c05d803b96c4a5a83d41c2a95a07099ba65fa->leave($__internal_6f8af84a74641a62ee375935912c05d803b96c4a5a83d41c2a95a07099ba65fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f873a212b41daff5448c2888356416d332436780e7a934c7530a8c726b9d043c = $this->env->getExtension("native_profiler");
        $__internal_f873a212b41daff5448c2888356416d332436780e7a934c7530a8c726b9d043c->enter($__internal_f873a212b41daff5448c2888356416d332436780e7a934c7530a8c726b9d043c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Customer:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_f873a212b41daff5448c2888356416d332436780e7a934c7530a8c726b9d043c->leave($__internal_f873a212b41daff5448c2888356416d332436780e7a934c7530a8c726b9d043c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_262211279a1d24a07793553fa4f5a8c17649b2077702676afcda27f2875ce23a = $this->env->getExtension("native_profiler");
        $__internal_262211279a1d24a07793553fa4f5a8c17649b2077702676afcda27f2875ce23a->enter($__internal_262211279a1d24a07793553fa4f5a8c17649b2077702676afcda27f2875ce23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_262211279a1d24a07793553fa4f5a8c17649b2077702676afcda27f2875ce23a->leave($__internal_262211279a1d24a07793553fa4f5a8c17649b2077702676afcda27f2875ce23a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e47814e64fa3ef5e9bb6449d9b595c63167320d8b14c5be77d42dfbca279125 = $this->env->getExtension("native_profiler");
        $__internal_0e47814e64fa3ef5e9bb6449d9b595c63167320d8b14c5be77d42dfbca279125->enter($__internal_0e47814e64fa3ef5e9bb6449d9b595c63167320d8b14c5be77d42dfbca279125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0e47814e64fa3ef5e9bb6449d9b595c63167320d8b14c5be77d42dfbca279125->leave($__internal_0e47814e64fa3ef5e9bb6449d9b595c63167320d8b14c5be77d42dfbca279125_prof);

    }

    public function getTemplateName()
    {
        return "customer/index.html.twig";
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
/* {{ render(controller('PartsboxBundle:Customer:datatable', { 'ctrl': ctrl,'app':app,'url':url })) }}*/
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
