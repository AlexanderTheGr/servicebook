<?php

/* elements/datatable.twig */
class __TwigTemplate_e03686b9334dab358d4f42302b277e31d8d172dda851fc9cfb801202c70053d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_827fee14036de68d1a42df1d0344772e874f18b9518fb64205833804dc22cf4f = $this->env->getExtension("native_profiler");
        $__internal_827fee14036de68d1a42df1d0344772e874f18b9518fb64205833804dc22cf4f->enter($__internal_827fee14036de68d1a42df1d0344772e874f18b9518fb64205833804dc22cf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elements/datatable.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_827fee14036de68d1a42df1d0344772e874f18b9518fb64205833804dc22cf4f->leave($__internal_827fee14036de68d1a42df1d0344772e874f18b9518fb64205833804dc22cf4f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7572bb98d021d08e0dd52cbf18c52f443d33bc4a50bae1e66b0172e030810dc9 = $this->env->getExtension("native_profiler");
        $__internal_7572bb98d021d08e0dd52cbf18c52f443d33bc4a50bae1e66b0172e030810dc9->enter($__internal_7572bb98d021d08e0dd52cbf18c52f443d33bc4a50bae1e66b0172e030810dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
<div ng-app=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\" ng-controller=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\"> 
    <table class=\"alexander table table-striped dataTable ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\">
        <thead>
            <tr>
                <td  ng-repeat=\"field in fields\" ng-bind-html=\"deliberatelyTrustDangerousSnippet(field.content)\">
                    [[ field.content ]]
                </td>
            </tr> 
            <tr>
                <td ng-repeat=\"field in fields\">[[ field.name ]]</td>
            </tr>                
        </thead> 
        <tbody>
        </tbody>
    </table>
</div>
";
        
        $__internal_7572bb98d021d08e0dd52cbf18c52f443d33bc4a50bae1e66b0172e030810dc9->leave($__internal_7572bb98d021d08e0dd52cbf18c52f443d33bc4a50bae1e66b0172e030810dc9_prof);

    }

    public function getTemplateName()
    {
        return "elements/datatable.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  37 => 2,  23 => 1,);
    }
}
/* {% block body %} */
/* <div ng-app="{{app}}" ng-controller="{{ctrl}}"> */
/*     <table class="alexander table table-striped dataTable {{ctrl}}">*/
/*         <thead>*/
/*             <tr>*/
/*                 <td  ng-repeat="field in fields" ng-bind-html="deliberatelyTrustDangerousSnippet(field.content)">*/
/*                     [[ field.content ]]*/
/*                 </td>*/
/*             </tr> */
/*             <tr>*/
/*                 <td ng-repeat="field in fields">[[ field.name ]]</td>*/
/*             </tr>                */
/*         </thead> */
/*         <tbody>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* {% endblock %}*/
