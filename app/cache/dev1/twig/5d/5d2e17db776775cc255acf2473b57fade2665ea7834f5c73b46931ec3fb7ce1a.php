<?php

/* EdiBundle:Eltreka:index.html.twig */
class __TwigTemplate_5d0a7a865ff6921e90224a0ece392930c1fdaad7f8a423b366bf881164580982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EdiBundle:Eltreka:index.html.twig", 1);
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
        $__internal_e35f20e1ea4e1b25fd4419a85f9ec668286914807552dbbbb5270f74ff928280 = $this->env->getExtension("native_profiler");
        $__internal_e35f20e1ea4e1b25fd4419a85f9ec668286914807552dbbbb5270f74ff928280->enter($__internal_e35f20e1ea4e1b25fd4419a85f9ec668286914807552dbbbb5270f74ff928280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EdiBundle:Eltreka:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35f20e1ea4e1b25fd4419a85f9ec668286914807552dbbbb5270f74ff928280->leave($__internal_e35f20e1ea4e1b25fd4419a85f9ec668286914807552dbbbb5270f74ff928280_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11b2f71c4f0e05b7eee20b880fcfe1b624337d85bca836cf802d5c9ffd7e4c0 = $this->env->getExtension("native_profiler");
        $__internal_b11b2f71c4f0e05b7eee20b880fcfe1b624337d85bca836cf802d5c9ffd7e4c0->enter($__internal_b11b2f71c4f0e05b7eee20b880fcfe1b624337d85bca836cf802d5c9ffd7e4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 5
            echo "        <button class=\"btn ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "position", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "label", array()), "html", null, true);
            echo "</button>    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EdiBundle:Eltreka:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_b11b2f71c4f0e05b7eee20b880fcfe1b624337d85bca836cf802d5c9ffd7e4c0->leave($__internal_b11b2f71c4f0e05b7eee20b880fcfe1b624337d85bca836cf802d5c9ffd7e4c0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d9813fb5e566e09ea00d29eef69f457af6c67792a1894dbadf7c337da48fed8 = $this->env->getExtension("native_profiler");
        $__internal_9d9813fb5e566e09ea00d29eef69f457af6c67792a1894dbadf7c337da48fed8->enter($__internal_9d9813fb5e566e09ea00d29eef69f457af6c67792a1894dbadf7c337da48fed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
";
        
        $__internal_9d9813fb5e566e09ea00d29eef69f457af6c67792a1894dbadf7c337da48fed8->leave($__internal_9d9813fb5e566e09ea00d29eef69f457af6c67792a1894dbadf7c337da48fed8_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_caf6a94b6f968878a0bb681127fb93c450a3f58f5e0a4d8ca69a80f03df1a070 = $this->env->getExtension("native_profiler");
        $__internal_caf6a94b6f968878a0bb681127fb93c450a3f58f5e0a4d8ca69a80f03df1a070->enter($__internal_caf6a94b6f968878a0bb681127fb93c450a3f58f5e0a4d8ca69a80f03df1a070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
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
        
        $__internal_caf6a94b6f968878a0bb681127fb93c450a3f58f5e0a4d8ca69a80f03df1a070->leave($__internal_caf6a94b6f968878a0bb681127fb93c450a3f58f5e0a4d8ca69a80f03df1a070_prof);

    }

    public function getTemplateName()
    {
        return "EdiBundle:Eltreka:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  82 => 14,  74 => 11,  68 => 10,  59 => 7,  46 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {% for button in buttons %}*/
/*         <button class="btn {{ button.class }} {{ button.position }}">{{ button.label }}</button>    */
/* {% endfor %}*/
/* {{ render(controller('EdiBundle:Eltreka:datatable', { 'ctrl': ctrl,'app':app,'url':url })) }}*/
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
