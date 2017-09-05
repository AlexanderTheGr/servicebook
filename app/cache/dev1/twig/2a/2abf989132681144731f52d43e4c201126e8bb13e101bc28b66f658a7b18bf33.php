<?php

/* elements/datatable.twig */
class __TwigTemplate_21bf934312a387bb1f988ead621ad3648830975717ecd2cf9e5fa9e9eba7fac9 extends Twig_Template
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
        $__internal_65b18b89d9c01cfb8a8c8ef529cd8e61bc0c44b0b49093b69f6fbaf35855519d = $this->env->getExtension("native_profiler");
        $__internal_65b18b89d9c01cfb8a8c8ef529cd8e61bc0c44b0b49093b69f6fbaf35855519d->enter($__internal_65b18b89d9c01cfb8a8c8ef529cd8e61bc0c44b0b49093b69f6fbaf35855519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elements/datatable.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_65b18b89d9c01cfb8a8c8ef529cd8e61bc0c44b0b49093b69f6fbaf35855519d->leave($__internal_65b18b89d9c01cfb8a8c8ef529cd8e61bc0c44b0b49093b69f6fbaf35855519d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_81f97aa2d47283fcb25c7e9d7d7df5d9420bd0f7b7016f5c31672b88e80efd5c = $this->env->getExtension("native_profiler");
        $__internal_81f97aa2d47283fcb25c7e9d7d7df5d9420bd0f7b7016f5c31672b88e80efd5c->enter($__internal_81f97aa2d47283fcb25c7e9d7d7df5d9420bd0f7b7016f5c31672b88e80efd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  
    <div ng-app=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\" ng-controller=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\"> 
        <div class=\"gui-controls\">
            <button class=\"addnew btn-primary btn ink-reaction btn btn-success btn_new btn_new_";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\">
                <div class=\"gui-icon\"><i class=\"md md-add\"></i></div>
                <span class=\"title\">Add New</span>   
            </button>   
        </div>  
        <table class=\"alexander table table-striped dataTable ";
        // line 9
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
        
        $__internal_81f97aa2d47283fcb25c7e9d7d7df5d9420bd0f7b7016f5c31672b88e80efd5c->leave($__internal_81f97aa2d47283fcb25c7e9d7d7df5d9420bd0f7b7016f5c31672b88e80efd5c_prof);

    }

    public function getTemplateName()
    {
        return "elements/datatable.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  44 => 4,  37 => 2,  23 => 1,);
    }
}
/* {% block body %}  */
/*     <div ng-app="{{app}}" ng-controller="{{ctrl}}"> */
/*         <div class="gui-controls">*/
/*             <button class="addnew btn-primary btn ink-reaction btn btn-success btn_new btn_new_{{ctrl}}">*/
/*                 <div class="gui-icon"><i class="md md-add"></i></div>*/
/*                 <span class="title">Add New</span>   */
/*             </button>   */
/*         </div>  */
/*         <table class="alexander table table-striped dataTable {{ctrl}}">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td  ng-repeat="field in fields" ng-bind-html="deliberatelyTrustDangerousSnippet(field.content)">*/
/*                         [[ field.content ]]*/
/*                     </td>*/
/*                 </tr> */
/*                 <tr>*/
/*                     <td ng-repeat="field in fields">[[ field.name ]]</td>*/
/*                 </tr>                */
/*             </thead> */
/*             <tbody>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
