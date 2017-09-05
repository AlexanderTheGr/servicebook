<?php

/* SoftoneBundle:Customer:index.html.twig */
class __TwigTemplate_261303ca493f34e7f918bafb3a48b0fc1f75293d5faf41ddb43e68c58c2661cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SoftoneBundle:Customer:index.html.twig", 1);
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
        $__internal_376934a0bd65d6f7208fbfa468a2fda3caf34139964ac89bdac680fcedce8a39 = $this->env->getExtension("native_profiler");
        $__internal_376934a0bd65d6f7208fbfa468a2fda3caf34139964ac89bdac680fcedce8a39->enter($__internal_376934a0bd65d6f7208fbfa468a2fda3caf34139964ac89bdac680fcedce8a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoftoneBundle:Customer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_376934a0bd65d6f7208fbfa468a2fda3caf34139964ac89bdac680fcedce8a39->leave($__internal_376934a0bd65d6f7208fbfa468a2fda3caf34139964ac89bdac680fcedce8a39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acf5dd0151e9d9730ee3455e853985423ad9ec773445f8074ea0257a407a64fb = $this->env->getExtension("native_profiler");
        $__internal_acf5dd0151e9d9730ee3455e853985423ad9ec773445f8074ea0257a407a64fb->enter($__internal_acf5dd0151e9d9730ee3455e853985423ad9ec773445f8074ea0257a407a64fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SoftoneBundle:Order:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_acf5dd0151e9d9730ee3455e853985423ad9ec773445f8074ea0257a407a64fb->leave($__internal_acf5dd0151e9d9730ee3455e853985423ad9ec773445f8074ea0257a407a64fb_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b72fd06827989eed36aee1236f5fd97019ed77b990f1fa31aad7dacfc8451255 = $this->env->getExtension("native_profiler");
        $__internal_b72fd06827989eed36aee1236f5fd97019ed77b990f1fa31aad7dacfc8451255->enter($__internal_b72fd06827989eed36aee1236f5fd97019ed77b990f1fa31aad7dacfc8451255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_b72fd06827989eed36aee1236f5fd97019ed77b990f1fa31aad7dacfc8451255->leave($__internal_b72fd06827989eed36aee1236f5fd97019ed77b990f1fa31aad7dacfc8451255_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a5f3949663915095914d241ecbf1db0a884af325ddea17b757a245bcc7e0f3c = $this->env->getExtension("native_profiler");
        $__internal_6a5f3949663915095914d241ecbf1db0a884af325ddea17b757a245bcc7e0f3c->enter($__internal_6a5f3949663915095914d241ecbf1db0a884af325ddea17b757a245bcc7e0f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6a5f3949663915095914d241ecbf1db0a884af325ddea17b757a245bcc7e0f3c->leave($__internal_6a5f3949663915095914d241ecbf1db0a884af325ddea17b757a245bcc7e0f3c_prof);

    }

    public function getTemplateName()
    {
        return "SoftoneBundle:Customer:index.html.twig";
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
/* {{ render(controller('SoftoneBundle:Order:datatable', { 'ctrl': ctrl,'app':app,'url':url })) }}*/
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
