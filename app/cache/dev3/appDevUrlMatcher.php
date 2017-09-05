<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/7e890b3')) {
            // _assetic_7e890b3
            if ($pathinfo === '/js/7e890b3.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7e890b3',);
            }

            if (0 === strpos($pathinfo, '/js/7e890b3_')) {
                if (0 === strpos($pathinfo, '/js/7e890b3_jquery-')) {
                    // _assetic_7e890b3_0
                    if ($pathinfo === '/js/7e890b3_jquery-1.11.2.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7e890b3_0',);
                    }

                    // _assetic_7e890b3_1
                    if ($pathinfo === '/js/7e890b3_jquery-migrate-1.2.1.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7e890b3_1',);
                    }

                }

                // _assetic_7e890b3_2
                if ($pathinfo === '/js/7e890b3_bootstrap.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7e890b3_2',);
                }

                // _assetic_7e890b3_3
                if ($pathinfo === '/js/7e890b3_spin.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_7e890b3_3',);
                }

                if (0 === strpos($pathinfo, '/js/7e890b3_part_5_App')) {
                    // _assetic_7e890b3_4
                    if ($pathinfo === '/js/7e890b3_part_5_App_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_7e890b3_4',);
                    }

                    // _assetic_7e890b3_5
                    if ($pathinfo === '/js/7e890b3_part_5_App.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_7e890b3_5',);
                    }

                    // _assetic_7e890b3_6
                    if ($pathinfo === '/js/7e890b3_part_5_AppCard_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_7e890b3_6',);
                    }

                    // _assetic_7e890b3_7
                    if ($pathinfo === '/js/7e890b3_part_5_AppForm_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_7e890b3_7',);
                    }

                    if (0 === strpos($pathinfo, '/js/7e890b3_part_5_AppNav')) {
                        // _assetic_7e890b3_8
                        if ($pathinfo === '/js/7e890b3_part_5_AppNavSearch_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_7e890b3_8',);
                        }

                        // _assetic_7e890b3_9
                        if ($pathinfo === '/js/7e890b3_part_5_AppNavigation_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_7e890b3_9',);
                        }

                    }

                    // _assetic_7e890b3_10
                    if ($pathinfo === '/js/7e890b3_part_5_AppOffcanvas_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_7e890b3_10',);
                    }

                    // _assetic_7e890b3_11
                    if ($pathinfo === '/js/7e890b3_part_5_AppVendor_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_7e890b3_11',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/7e890b3_jquery.')) {
                    // _assetic_7e890b3_12
                    if ($pathinfo === '/js/7e890b3_jquery.autosize.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_7e890b3_12',);
                    }

                    // _assetic_7e890b3_13
                    if ($pathinfo === '/js/7e890b3_jquery.nanoscroller.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_7e890b3_13',);
                    }

                    // _assetic_7e890b3_14
                    if ($pathinfo === '/js/7e890b3_jquery.dataTables.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_7e890b3_14',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/7e890b3_a')) {
                    // _assetic_7e890b3_15
                    if ($pathinfo === '/js/7e890b3_api-check_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_7e890b3_15',);
                    }

                    if (0 === strpos($pathinfo, '/js/7e890b3_angular')) {
                        // _assetic_7e890b3_16
                        if ($pathinfo === '/js/7e890b3_angular_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_7e890b3_16',);
                        }

                        if (0 === strpos($pathinfo, '/js/7e890b3_angular-')) {
                            if (0 === strpos($pathinfo, '/js/7e890b3_angular-ui-bootstrap')) {
                                // _assetic_7e890b3_17
                                if ($pathinfo === '/js/7e890b3_angular-ui-bootstrap_11.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_7e890b3_17',);
                                }

                                // _assetic_7e890b3_18
                                if ($pathinfo === '/js/7e890b3_angular-ui-bootstrap-tpls_12.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_7e890b3_18',);
                                }

                            }

                            // _assetic_7e890b3_19
                            if ($pathinfo === '/js/7e890b3_angular-sanitize_13.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_7e890b3_19',);
                            }

                            // _assetic_7e890b3_20
                            if ($pathinfo === '/js/7e890b3_angular-formly_14.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_7e890b3_20',);
                            }

                            // _assetic_7e890b3_21
                            if ($pathinfo === '/js/7e890b3_angular-animate_15.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_7e890b3_21',);
                            }

                            // _assetic_7e890b3_22
                            if ($pathinfo === '/js/7e890b3_angular-messages_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_7e890b3_22',);
                            }

                            // _assetic_7e890b3_23
                            if ($pathinfo === '/js/7e890b3_angular-formly-templates-bootstrap_17.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_7e890b3_23',);
                            }

                            // _assetic_7e890b3_24
                            if ($pathinfo === '/js/7e890b3_angular-base64_18.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_7e890b3_24',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/7e890b3_part_19_alex')) {
                    // _assetic_7e890b3_25
                    if ($pathinfo === '/js/7e890b3_part_19_alexDataTable_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_7e890b3_25',);
                    }

                    // _assetic_7e890b3_26
                    if ($pathinfo === '/js/7e890b3_part_19_alexTabs_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e890b3',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_7e890b3_26',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // eav_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eav_default_index')), array (  '_controller' => 'EavBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/customers')) {
            // partsbox_customer_index
            if ($pathinfo === '/customers/customer') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\CustomerController::indexAction',  '_route' => 'partsbox_customer_index',);
            }

            // partsbox_customer_view
            if (0 === strpos($pathinfo, '/customers/view') && preg_match('#^/customers/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partsbox_customer_view')), array (  '_controller' => 'PartsboxBundle\\Controller\\CustomerController::viewAction',));
            }

            // partsbox_customer_savection
            if ($pathinfo === '/customers/save') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\CustomerController::savection',  '_route' => 'partsbox_customer_savection',);
            }

            if (0 === strpos($pathinfo, '/customers/get')) {
                // partsbox_customer_gettabs
                if ($pathinfo === '/customers/gettab') {
                    return array (  '_controller' => 'PartsboxBundle\\Controller\\CustomerController::gettabs',  '_route' => 'partsbox_customer_gettabs',);
                }

                // partsbox_customer_getdatatable
                if ($pathinfo === '/customers/getdatatable') {
                    return array (  '_controller' => 'PartsboxBundle\\Controller\\CustomerController::getdatatableAction',  '_route' => 'partsbox_customer_getdatatable',);
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'PartsboxBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/orders')) {
            // partsbox_order_index
            if ($pathinfo === '/orders/order') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\OrderController::indexAction',  '_route' => 'partsbox_order_index',);
            }

            // partsbox_order_getdatatable
            if ($pathinfo === '/orders/getdatatable') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\OrderController::getdatatableAction',  '_route' => 'partsbox_order_getdatatable',);
            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // partsbox_product_index
            if ($pathinfo === '/product/product') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\ProductController::indexAction',  '_route' => 'partsbox_product_index',);
            }

            // partsbox_product_view
            if (0 === strpos($pathinfo, '/product/view') && preg_match('#^/product/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partsbox_product_view')), array (  '_controller' => 'PartsboxBundle\\Controller\\ProductController::viewAction',));
            }

            // partsbox_product_savection
            if ($pathinfo === '/product/save') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\ProductController::savection',  '_route' => 'partsbox_product_savection',);
            }

            if (0 === strpos($pathinfo, '/product/get')) {
                // partsbox_product_gettabs
                if ($pathinfo === '/product/gettab') {
                    return array (  '_controller' => 'PartsboxBundle\\Controller\\ProductController::gettabs',  '_route' => 'partsbox_product_gettabs',);
                }

                // partsbox_product_getdatatable
                if ($pathinfo === '/product/getdatatable') {
                    return array (  '_controller' => 'PartsboxBundle\\Controller\\ProductController::getdatatableAction',  '_route' => 'partsbox_product_getdatatable',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/supplier')) {
            // partsbox_supplier_index
            if ($pathinfo === '/supplier/supplier') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\SupplierController::indexAction',  '_route' => 'partsbox_supplier_index',);
            }

            // partsbox_supplier_view
            if (0 === strpos($pathinfo, '/supplier/view') && preg_match('#^/supplier/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partsbox_supplier_view')), array (  '_controller' => 'PartsboxBundle\\Controller\\SupplierController::viewAction',));
            }

            // partsbox_supplier_savection
            if ($pathinfo === '/supplier/save') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\SupplierController::savection',  '_route' => 'partsbox_supplier_savection',);
            }

            if (0 === strpos($pathinfo, '/supplier/get')) {
                // partsbox_supplier_gettabs
                if ($pathinfo === '/supplier/gettab') {
                    return array (  '_controller' => 'PartsboxBundle\\Controller\\SupplierController::gettabs',  '_route' => 'partsbox_supplier_gettabs',);
                }

                // partsbox_supplier_getdatatable
                if ($pathinfo === '/supplier/getdatatable') {
                    return array (  '_controller' => 'PartsboxBundle\\Controller\\SupplierController::getdatatableAction',  '_route' => 'partsbox_supplier_getdatatable',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // partsbox_user_index
            if ($pathinfo === '/user/index') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\UserController::indexAction',  '_route' => 'partsbox_user_index',);
            }

            // partsbox_user_getusers
            if ($pathinfo === '/user/getusers') {
                return array (  '_controller' => 'PartsboxBundle\\Controller\\UserController::getusersAction',  '_route' => 'partsbox_user_getusers',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
