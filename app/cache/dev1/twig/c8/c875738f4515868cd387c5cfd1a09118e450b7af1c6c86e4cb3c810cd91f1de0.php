<?php

/* ::base.html.twig */
class __TwigTemplate_caa3cd015614f20097109a69554be99c21493d4740ebdafa24bf6666f4ce649a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abd10123f2075e01fa6c072372f0b544fcdc8144e92ae85abbce1a3df7e58ea7 = $this->env->getExtension("native_profiler");
        $__internal_abd10123f2075e01fa6c072372f0b544fcdc8144e92ae85abbce1a3df7e58ea7->enter($__internal_abd10123f2075e01fa6c072372f0b544fcdc8144e92ae85abbce1a3df7e58ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title></title>

        <!-- BEGIN META -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"keywords\" content=\"your,keywords\">
        <meta name=\"description\" content=\"Short explanation about this website\">
        <!-- END META -->
        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/bootstrap.cs"), "html", null, true);
        echo "s\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/materialadmin.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/libs/DataTables/jquery.dataTables.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        

    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type=\"text/javascript\" src=\"//assets/js/libs/utils/html5shiv.js?1403934957\"></script>
    <script type=\"text/javascript\" src=\"//assets/js/libs/utils/respond.min.js?1403934956\"></script>
    <![endif]-->
</head>
<body class=\"menubar-hoverable header-fixed \">

    <!-- BEGIN HEADER-->
    <header id=\"header\" >
        <div class=\"headerbar\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"headerbar-left\">
                <ul class=\"header-nav header-nav-options\">
                    <li class=\"header-nav-brand\" >
                        <div class=\"brand-holder\">
                            <a href=\"/\" >
                                <!--span class=\"text-lg text-bold text-primary\">MATERIAL ADMIN</span-->
                                <img style=\"height: 50px;\" src=\"/assets/img/logo.png\"/>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class=\"btn btn-icon-toggle menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"headerbar-right\">

                <ul class=\"header-nav header-nav-profile\">
                    <li class=\"dropdown\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle ink-reaction\" data-toggle=\"dropdown\">
                            <img src=\"/assets/img/avatar1.jpg?1403934956\" alt=\"\" />
                            <span class=\"profile-info\">
                                
                            </span>
                        </a>
                        <ul class=\"dropdown-menu animation-dock\">
                            <li class=\"dropdown-header\">Config</li>
                            <li><a href=\"/settings\"><i class=\"fa fa-fw fa-cogs\"></i> Settings</a></li>
                            <li><a href=\"/site/logout\"><i class=\"fa fa-fw fa-power-off text-danger\"></i> Logout</a></li>
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                </ul><!--end .header-nav-profile -->
                <ul class=\"header-nav header-nav-toggle\">
                    <li>
                        <a class=\"btn btn-icon-toggle btn-default\" id=\"offcanvaschat\" href=\"#offcanvas-chat\" data-toggle=\"offcanvas\" data-backdrop=\"false\">
                            <i class=\"fa fa-wechat\"></i>
                        </a>
                    </li>
                </ul><!--end .header-nav-toggle -->
            </div><!--end #header-navbar-collapse -->
        </div>
    </header>
    <!-- END HEADER-->

    <!-- BEGIN BASE-->
    <div id=\"base\">

        <!-- BEGIN OFFCANVAS LEFT -->
        <div class=\"offcanvas\">
        </div><!--end .offcanvas-->
        <!-- END OFFCANVAS LEFT -->

        <!-- BEGIN CONTENT-->
        <div id=\"content\">
            <section>
                <div class=\"section-body\">
                    <div class=\"row\">

                        <!-- BEGIN ALERT - REVENUE -->
                        <div class=\"col-md-12 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-head style-primary-light\">
                                    <header>
                                        <i class=\"fa fa-fw fa-tag\"></i>

                                    </header>
                                </div>
                                <div class=\"card-body\">
                                ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->


                </div><!--end .row -->

            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->

    <!-- BEGIN MENUBAR-->
    <div id=\"menubar\" class=\"menubar-inverse \">
        <div class=\"menubar-fixed-panel\">
            <div>
                <a class=\"btn btn-icon-toggle btn-default menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                    <i class=\"fa fa-bars\"></i>
                </a>
            </div>
            <div class=\"expanded\">
                <a href=\"/\">
                    <span class=\"text-lg text-bold text-primary \">MATERIAL&nbsp;ADMIN</span>
                </a>
            </div>
        </div>
        <div class=\"menubar-scroll-panel\">

            <!-- BEGIN MAIN MENU -->
            <ul id=\"main-menu\" class=\"gui-controls\">


                <li>
                    <a href=\"/\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-home\"></i></div>
                        <span class=\"title\">Αρχική</span>
                    </a>
                </li>
                <li>
                    <a href=\"/users/user\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-person\"></i></div>
                        <span class=\"title\">Χρήστες</span>
                    </a>
                </li>   
                <li>
                    <a href=\"/product/product\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"fa fa-gear\"></i></div>
                        <span class=\"title\">Είδη</span>
                    </a>
                </li>                          
                <li>
                    <a href=\"/supplier/supplier\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-computer\"></i></div>
                        <span class=\"title\">Προμηθευτές</span>
                    </a>
                </li>    
                <li>
                    <a href=\"/customer/customer\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-people\"></i></div>
                        <span class=\"title\">Πελάτες</span>
                    </a>
                </li>  
                <li>
                    <a href=\"/route/route\" class=\"\">
                        <div class=\"gui-icon\"><i class=\"fa fa-truck\"></i></div>
                        <span class=\"title\">Δρομολόγια</span>
                    </a>
                </li>                            

                <li class=\"gui-folder\">
                    <a>
                        <div class=\"gui-icon\"><i class=\"fa fa-database\"></i></div>
                        <span class=\"title\">EDI</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Eltreka</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"/edi/eltreka\"><span class=\"title\">Part Master</span></a></li>
                                <li><a href=\"/edi/eltreka/order\" ><span class=\"title\">Orders</span></a></li>
                                <li><a href=\"\" ><span class=\"title\">Insert contact</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        
                        <li class=\"gui-folder\">
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">Vicar</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href=\"\" ><span class=\"title\">Search</span></a></li>
                                <li><a href=\"\" ><span class=\"title\">Contact card</span></a></li>
                                <li><a href=\"\" ><span class=\"title\">Insert contact</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->

                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->

                <li class=\"gui-folder\">
                    <a class=\"\">
                        <div class=\"gui-icon\"><i class=\"md md-shopping-cart\"></i></div>
                        <span class=\"title\">Παραγγελίες</span>
                    </a>

                    <!--start submenu -->
                    <ul>
                        <li><a href=\"/order/order\" ><span class=\"title\">Λίστα Παραγγελιών</span></a></li>
                        <li><a href=\"/order/order/edit\" ><span class=\"title\">Νέα Πραγγελία</span></a></li>  
                        <li><a href=\"/order/order/noorder\" ><span class=\"title\">Νέα Προσφορά</span></a></li>  
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <li class=\"gui-folder\">
                    <a href=\"#\">
                        <div class=\"gui-icon\"><i class=\"md md-assessment\"></i></div>
                        <span class=\"title\">Στατιστικά</span>
                    </a>
                    <ul>
                        <li><a href=\"/report/report/sales\" ><span class=\"title\">Πωλήσεις</span></a></li>
                        <li><a href=\"/report/report/search\" ><span class=\"title\">Αναζητήσεις</span></a></li>  
                    </ul><!--end /submenu -->                           
                </li>
            </ul><!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class=\"menubar-foot-panel\">
                <small class=\"no-linebreak hidden-folded\">
                    <span class=\"opacity-75\">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                </small>
            </div>
        </div><!--end .menubar-scroll-panel-->
    </div><!--end #menubar-->
    <!-- END MENUBAR -->

    <button class=\"btn btn-default-bright btn-raised\" data-toggle=\"modal\" style=\"display:none;\" id=\"loadingmodal\" data-target=\"#loading\">loading</button>
    <div class=\"modal fade\" id=\"loading\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"formModalLabel\" aria-hidden=\"true\">
        <div style=\"width:1000px\" class=\"modal-dialog\">
            <div  style=\"width:1000px\"  class=\"modal-content\">
                <div class=\"modal-body\">
                    <h2>Please Wait</h2>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>      
    <button class=\"btn btn-default-bright btn-raised\" data-toggle=\"modal\" style=\"display:none;\" id=\"binfomodal\" data-target=\"#infomodal\">loading</button>
    <div class=\"modal fade\" id=\"infomodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"formModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <!-- END OFFCANVAS RIGHT -->

</div><!--end #base-->
<!-- END BASE -->        
<!-- BEGIN JAVASCRIPT -->

";
        // line 274
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cfbef00_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_jquery-1.11.2.min_1.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_jquery-migrate-1.2.1.min_2.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_bootstrap.min_3.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_spin.min_4.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_5_App_1.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_5_AppCard_2.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_5_AppForm_3.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_5_AppNavSearch_4.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_5_AppNavigation_5.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_9") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_5_AppOffcanvas_6.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_10") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_5_AppVendor_7.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_11") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_jquery.autosize.min_6.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_12") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_jquery.nanoscroller.min_7.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_13") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_jquery.dataTables.min_8.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_14") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_api-check_9.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_15") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular_10.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_16") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular-ui-bootstrap_11.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_17") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular-ui-bootstrap-tpls_12.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_18") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular-sanitize_13.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_19") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular-formly_14.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_20") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular-animate_15.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_21") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular-messages_16.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_22") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular-formly-templates-bootstrap_17.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_23") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_angular-base64_18.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_24") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_19_alexDataTable_1.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_25") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_19_alexTabs_2.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_26") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_20_order_1.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "cfbef00_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00_27") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00_part_21_eltrekaediorder_1.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "cfbef00"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cfbef00") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/cfbef00.js");
            // line 297
            echo "
<script src=\"";
            // line 298
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 299
        echo " 


";
        // line 302
        $this->displayBlock('javascripts', $context, $blocks);
        // line 303
        echo "<!-- END JAVASCRIPT -->    
</body>
</html>
";
        
        $__internal_abd10123f2075e01fa6c072372f0b544fcdc8144e92ae85abbce1a3df7e58ea7->leave($__internal_abd10123f2075e01fa6c072372f0b544fcdc8144e92ae85abbce1a3df7e58ea7_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_feed3f3e0707440286f79b54373f22043735eb1d15570179de1785b621fd2506 = $this->env->getExtension("native_profiler");
        $__internal_feed3f3e0707440286f79b54373f22043735eb1d15570179de1785b621fd2506->enter($__internal_feed3f3e0707440286f79b54373f22043735eb1d15570179de1785b621fd2506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_feed3f3e0707440286f79b54373f22043735eb1d15570179de1785b621fd2506->leave($__internal_feed3f3e0707440286f79b54373f22043735eb1d15570179de1785b621fd2506_prof);

    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f246e79d665b56f613734d2138c5e962286ec27949ea294be0c29c487bea12e = $this->env->getExtension("native_profiler");
        $__internal_8f246e79d665b56f613734d2138c5e962286ec27949ea294be0c29c487bea12e->enter($__internal_8f246e79d665b56f613734d2138c5e962286ec27949ea294be0c29c487bea12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f246e79d665b56f613734d2138c5e962286ec27949ea294be0c29c487bea12e->leave($__internal_8f246e79d665b56f613734d2138c5e962286ec27949ea294be0c29c487bea12e_prof);

    }

    // line 302
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03be700b30d382c195908a104ad041cba2fcfdf9fcb7fc67598d677f5dad297a = $this->env->getExtension("native_profiler");
        $__internal_03be700b30d382c195908a104ad041cba2fcfdf9fcb7fc67598d677f5dad297a->enter($__internal_03be700b30d382c195908a104ad041cba2fcfdf9fcb7fc67598d677f5dad297a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_03be700b30d382c195908a104ad041cba2fcfdf9fcb7fc67598d677f5dad297a->leave($__internal_03be700b30d382c195908a104ad041cba2fcfdf9fcb7fc67598d677f5dad297a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 302,  618 => 108,  607 => 22,  597 => 303,  595 => 302,  590 => 299,  584 => 298,  581 => 297,  574 => 298,  571 => 297,  565 => 298,  562 => 297,  556 => 298,  553 => 297,  547 => 298,  544 => 297,  538 => 298,  535 => 297,  529 => 298,  526 => 297,  520 => 298,  517 => 297,  511 => 298,  508 => 297,  502 => 298,  499 => 297,  493 => 298,  490 => 297,  484 => 298,  481 => 297,  475 => 298,  472 => 297,  466 => 298,  463 => 297,  457 => 298,  454 => 297,  448 => 298,  445 => 297,  439 => 298,  436 => 297,  430 => 298,  427 => 297,  421 => 298,  418 => 297,  412 => 298,  409 => 297,  403 => 298,  400 => 297,  394 => 298,  391 => 297,  385 => 298,  382 => 297,  376 => 298,  373 => 297,  367 => 298,  364 => 297,  358 => 298,  355 => 297,  349 => 298,  346 => 297,  340 => 298,  337 => 297,  331 => 298,  328 => 297,  324 => 274,  157 => 109,  155 => 108,  68 => 23,  66 => 22,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <title></title>*/
/* */
/*         <!-- BEGIN META -->*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="keywords" content="your,keywords">*/
/*         <meta name="description" content="Short explanation about this website">*/
/*         <!-- END META -->*/
/*         <!-- BEGIN STYLESHEETS -->*/
/*         <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/bootstrap.cs') }}s" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/materialadmin.css') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/font-awesome.min.css') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/material-design-iconic-font.min.css') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme-4/libs/DataTables/jquery.dataTables.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main.css') }}">*/
/*         */
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- END STYLESHEETS -->*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type="text/javascript" src="//assets/js/libs/utils/html5shiv.js?1403934957"></script>*/
/*     <script type="text/javascript" src="//assets/js/libs/utils/respond.min.js?1403934956"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="menubar-hoverable header-fixed ">*/
/* */
/*     <!-- BEGIN HEADER-->*/
/*     <header id="header" >*/
/*         <div class="headerbar">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="headerbar-left">*/
/*                 <ul class="header-nav header-nav-options">*/
/*                     <li class="header-nav-brand" >*/
/*                         <div class="brand-holder">*/
/*                             <a href="/" >*/
/*                                 <!--span class="text-lg text-bold text-primary">MATERIAL ADMIN</span-->*/
/*                                 <img style="height: 50px;" src="/assets/img/logo.png"/>*/
/*                             </a>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">*/
/*                             <i class="fa fa-bars"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="headerbar-right">*/
/* */
/*                 <ul class="header-nav header-nav-profile">*/
/*                     <li class="dropdown">*/
/*                         <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">*/
/*                             <img src="/assets/img/avatar1.jpg?1403934956" alt="" />*/
/*                             <span class="profile-info">*/
/*                                 */
/*                             </span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu animation-dock">*/
/*                             <li class="dropdown-header">Config</li>*/
/*                             <li><a href="/settings"><i class="fa fa-fw fa-cogs"></i> Settings</a></li>*/
/*                             <li><a href="/site/logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>*/
/*                         </ul><!--end .dropdown-menu -->*/
/*                     </li><!--end .dropdown -->*/
/*                 </ul><!--end .header-nav-profile -->*/
/*                 <ul class="header-nav header-nav-toggle">*/
/*                     <li>*/
/*                         <a class="btn btn-icon-toggle btn-default" id="offcanvaschat" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">*/
/*                             <i class="fa fa-wechat"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul><!--end .header-nav-toggle -->*/
/*             </div><!--end #header-navbar-collapse -->*/
/*         </div>*/
/*     </header>*/
/*     <!-- END HEADER-->*/
/* */
/*     <!-- BEGIN BASE-->*/
/*     <div id="base">*/
/* */
/*         <!-- BEGIN OFFCANVAS LEFT -->*/
/*         <div class="offcanvas">*/
/*         </div><!--end .offcanvas-->*/
/*         <!-- END OFFCANVAS LEFT -->*/
/* */
/*         <!-- BEGIN CONTENT-->*/
/*         <div id="content">*/
/*             <section>*/
/*                 <div class="section-body">*/
/*                     <div class="row">*/
/* */
/*                         <!-- BEGIN ALERT - REVENUE -->*/
/*                         <div class="col-md-12 col-sm-6">*/
/*                             <div class="card">*/
/*                                 <div class="card-head style-primary-light">*/
/*                                     <header>*/
/*                                         <i class="fa fa-fw fa-tag"></i>*/
/* */
/*                                     </header>*/
/*                                 </div>*/
/*                                 <div class="card-body">*/
/*                                 {% block body %}{% endblock %}*/
/*                             </div><!--end .card-body -->*/
/*                         </div><!--end .card -->*/
/*                     </div><!--end .col -->*/
/* */
/* */
/*                 </div><!--end .row -->*/
/* */
/*             </div><!--end .section-body -->*/
/*         </section>*/
/*     </div><!--end #content-->*/
/*     <!-- END CONTENT -->*/
/* */
/*     <!-- BEGIN MENUBAR-->*/
/*     <div id="menubar" class="menubar-inverse ">*/
/*         <div class="menubar-fixed-panel">*/
/*             <div>*/
/*                 <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">*/
/*                     <i class="fa fa-bars"></i>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="expanded">*/
/*                 <a href="/">*/
/*                     <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="menubar-scroll-panel">*/
/* */
/*             <!-- BEGIN MAIN MENU -->*/
/*             <ul id="main-menu" class="gui-controls">*/
/* */
/* */
/*                 <li>*/
/*                     <a href="/" class="">*/
/*                         <div class="gui-icon"><i class="md md-home"></i></div>*/
/*                         <span class="title">Αρχική</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/users/user" class="">*/
/*                         <div class="gui-icon"><i class="md md-person"></i></div>*/
/*                         <span class="title">Χρήστες</span>*/
/*                     </a>*/
/*                 </li>   */
/*                 <li>*/
/*                     <a href="/product/product" class="">*/
/*                         <div class="gui-icon"><i class="fa fa-gear"></i></div>*/
/*                         <span class="title">Είδη</span>*/
/*                     </a>*/
/*                 </li>                          */
/*                 <li>*/
/*                     <a href="/supplier/supplier" class="">*/
/*                         <div class="gui-icon"><i class="md md-computer"></i></div>*/
/*                         <span class="title">Προμηθευτές</span>*/
/*                     </a>*/
/*                 </li>    */
/*                 <li>*/
/*                     <a href="/customer/customer" class="">*/
/*                         <div class="gui-icon"><i class="md md-people"></i></div>*/
/*                         <span class="title">Πελάτες</span>*/
/*                     </a>*/
/*                 </li>  */
/*                 <li>*/
/*                     <a href="/route/route" class="">*/
/*                         <div class="gui-icon"><i class="fa fa-truck"></i></div>*/
/*                         <span class="title">Δρομολόγια</span>*/
/*                     </a>*/
/*                 </li>                            */
/* */
/*                 <li class="gui-folder">*/
/*                     <a>*/
/*                         <div class="gui-icon"><i class="fa fa-database"></i></div>*/
/*                         <span class="title">EDI</span>*/
/*                     </a>*/
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Eltreka</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="/edi/eltreka"><span class="title">Part Master</span></a></li>*/
/*                                 <li><a href="/edi/eltreka/order" ><span class="title">Orders</span></a></li>*/
/*                                 <li><a href="" ><span class="title">Insert contact</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/*                         */
/*                         <li class="gui-folder">*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">Vicar</span>*/
/*                             </a>*/
/*                             <!--start submenu -->*/
/*                             <ul>*/
/*                                 <li><a href="" ><span class="title">Search</span></a></li>*/
/*                                 <li><a href="" ><span class="title">Contact card</span></a></li>*/
/*                                 <li><a href="" ><span class="title">Insert contact</span></a></li>*/
/*                             </ul><!--end /submenu -->*/
/*                         </li><!--end /menu-li -->*/
/* */
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/* */
/*                 <li class="gui-folder">*/
/*                     <a class="">*/
/*                         <div class="gui-icon"><i class="md md-shopping-cart"></i></div>*/
/*                         <span class="title">Παραγγελίες</span>*/
/*                     </a>*/
/* */
/*                     <!--start submenu -->*/
/*                     <ul>*/
/*                         <li><a href="/order/order" ><span class="title">Λίστα Παραγγελιών</span></a></li>*/
/*                         <li><a href="/order/order/edit" ><span class="title">Νέα Πραγγελία</span></a></li>  */
/*                         <li><a href="/order/order/noorder" ><span class="title">Νέα Προσφορά</span></a></li>  */
/*                     </ul><!--end /submenu -->*/
/*                 </li><!--end /menu-li -->*/
/*                 <li class="gui-folder">*/
/*                     <a href="#">*/
/*                         <div class="gui-icon"><i class="md md-assessment"></i></div>*/
/*                         <span class="title">Στατιστικά</span>*/
/*                     </a>*/
/*                     <ul>*/
/*                         <li><a href="/report/report/sales" ><span class="title">Πωλήσεις</span></a></li>*/
/*                         <li><a href="/report/report/search" ><span class="title">Αναζητήσεις</span></a></li>  */
/*                     </ul><!--end /submenu -->                           */
/*                 </li>*/
/*             </ul><!--end .main-menu -->*/
/*             <!-- END MAIN MENU -->*/
/* */
/*             <div class="menubar-foot-panel">*/
/*                 <small class="no-linebreak hidden-folded">*/
/*                     <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>*/
/*                 </small>*/
/*             </div>*/
/*         </div><!--end .menubar-scroll-panel-->*/
/*     </div><!--end #menubar-->*/
/*     <!-- END MENUBAR -->*/
/* */
/*     <button class="btn btn-default-bright btn-raised" data-toggle="modal" style="display:none;" id="loadingmodal" data-target="#loading">loading</button>*/
/*     <div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">*/
/*         <div style="width:1000px" class="modal-dialog">*/
/*             <div  style="width:1000px"  class="modal-content">*/
/*                 <div class="modal-body">*/
/*                     <h2>Please Wait</h2>*/
/*                 </div>*/
/*             </div><!-- /.modal-content -->*/
/*         </div><!-- /.modal-dialog -->*/
/*     </div>      */
/*     <button class="btn btn-default-bright btn-raised" data-toggle="modal" style="display:none;" id="binfomodal" data-target="#infomodal">loading</button>*/
/*     <div class="modal fade" id="infomodal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body">*/
/* */
/*                 </div>*/
/*             </div><!-- /.modal-content -->*/
/*         </div><!-- /.modal-dialog -->*/
/*     </div>*/
/* */
/*     <!-- END OFFCANVAS RIGHT -->*/
/* */
/* </div><!--end #base-->*/
/* <!-- END BASE -->        */
/* <!-- BEGIN JAVASCRIPT -->*/
/* */
/* {% javascripts*/
/*             'assets/js/libs/jquery/jquery-1.11.2.min.js'*/
/*             'assets/js/libs/jquery/jquery-migrate-1.2.1.min.js' */
/*             'assets/js/libs/bootstrap/bootstrap.min.js'*/
/*             'assets/js/libs/spin.js/spin.min.js'*/
/*             'assets/js/core/source/*'*/
/*             'assets/js/libs/autosize/jquery.autosize.min.js'*/
/*             'assets/js/libs/nanoscroller/jquery.nanoscroller.min.js'*/
/*             'assets/js/libs/DataTables/jquery.dataTables.min.js'*/
/*             'assets/js/libs/angular/api-check.js' */
/*             'assets/js/libs/angular/angular.js' */
/*             'assets/js/libs/angular/angular-ui-bootstrap.js' */
/*             'assets/js/libs/angular/angular-ui-bootstrap-tpls.js' */
/*             'assets/js/libs/angular/angular-sanitize.js' */
/*             'assets/js/libs/angular/angular-formly.js' */
/*             'assets/js/libs/angular/angular-animate.js' */
/*             'assets/js/libs/angular/angular-messages.js' */
/*             'assets/js/libs/angular/angular-formly-templates-bootstrap.js' */
/*             'assets/js/libs/angular/angular-base64.js' */
/*             'assets/js/libs/alexander/*' */
/*             'assets/js/libs/partsbox/*' */
/*             'assets/js/libs/eltrekaedi/*' */
/* %}*/
/* */
/* <script src="{{ asset_url }}"></script>*/
/* {% endjavascripts %} */
/* */
/* */
/* {% block javascripts %}{% endblock %}*/
/* <!-- END JAVASCRIPT -->    */
/* </body>*/
/* </html>*/
/* */
