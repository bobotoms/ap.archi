<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // back_office_homepage
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'back_office_homepage');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
                }

                if (0 === strpos($pathinfo, '/admin/admin')) {
                    // sonata_admin_redirect
                    if (rtrim($pathinfo, '/') === '/admin/admin') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                        }

                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                    }

                    // sonata_admin_dashboard
                    if ($pathinfo === '/admin/admin/dashboard') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                    }

                    if (0 === strpos($pathinfo, '/admin/admin/core')) {
                        // sonata_admin_retrieve_form_element
                        if ($pathinfo === '/admin/admin/core/get-form-field-element') {
                            return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                        }

                        // sonata_admin_append_form_element
                        if ($pathinfo === '/admin/admin/core/append-form-field-element') {
                            return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                        }

                        // sonata_admin_short_object_information
                        if (0 === strpos($pathinfo, '/admin/admin/core/get-short-object-description') && preg_match('#^/admin/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                        }

                        // sonata_admin_set_object_field_value
                        if ($pathinfo === '/admin/admin/core/set-object-field-value') {
                            return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                        }

                    }

                    // sonata_admin_search
                    if ($pathinfo === '/admin/admin/search') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ($pathinfo === '/admin/admin/core/get-autocomplete-items') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // back_admin
                if ($pathinfo === '/admin/back_admin') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'back_admin',);
                }

                // prod_search
                if (0 === strpos($pathinfo, '/admin/prod_search') && preg_match('#^/admin/prod_search/(?P<production>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prod_search')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::productionSearchAction',));
                }

                // marker_search
                if (0 === strpos($pathinfo, '/admin/marker_search') && preg_match('#^/admin/marker_search/(?P<markers>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marker_search')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::markerSearchAction',));
                }

                // nameiti_search
                if (0 === strpos($pathinfo, '/admin/nameiti_search') && preg_match('#^/admin/nameiti_search/(?P<idIti>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nameiti_search')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::nameItiSearchAction',));
                }

                if (0 === strpos($pathinfo, '/admin/option_')) {
                    // option_search
                    if (0 === strpos($pathinfo, '/admin/option_search') && preg_match('#^/admin/option_search/(?P<optionNb>[^/]++)/(?P<optionVal>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'option_search')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::optionSearchAction',));
                    }

                    // option_check
                    if (0 === strpos($pathinfo, '/admin/option_check') && preg_match('#^/admin/option_check/(?P<idOption>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'option_check')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::optionCheckAction',));
                    }

                }

            }

            // front_office_homepage
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_office_homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/sonata/cache')) {
            // sonata_cache_esi
            if (0 === strpos($pathinfo, '/sonata/cache/esi') && preg_match('#^/sonata/cache/esi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_esi')), array (  '_controller' => 'sonata.cache.esi:cacheAction',));
            }

            // sonata_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/cache/ssi') && preg_match('#^/sonata/cache/ssi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_ssi')), array (  '_controller' => 'sonata.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/cache/js-')) {
                // sonata_cache_js_async
                if ($pathinfo === '/sonata/cache/js-async') {
                    return array (  '_controller' => 'sonata.cache.js_async:cacheAction',  '_route' => 'sonata_cache_js_async',);
                }

                // sonata_cache_js_sync
                if ($pathinfo === '/sonata/cache/js-sync') {
                    return array (  '_controller' => 'sonata.cache.js_sync:cacheAction',  '_route' => 'sonata_cache_js_sync',);
                }

            }

            // sonata_cache_apc
            if (0 === strpos($pathinfo, '/sonata/cache/apc') && preg_match('#^/sonata/cache/apc/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_apc')), array (  '_controller' => 'sonata.cache.apc:cacheAction',));
            }

            // sonata_cache_symfony
            if (0 === strpos($pathinfo, '/sonata/cache/symfony') && preg_match('#^/sonata/cache/symfony/(?P<token>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_symfony')), array (  '_controller' => 'sonata.cache.symfony:cacheAction',));
            }

        }

        if (0 === strpos($pathinfo, '/exceptions')) {
            // sonata_page_exceptions_list
            if ($pathinfo === '/exceptions/list') {
                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageController::exceptionsListAction',  '_route' => 'sonata_page_exceptions_list',);
            }

            // sonata_page_exceptions_edit
            if (0 === strpos($pathinfo, '/exceptions/edit') && preg_match('#^/exceptions/edit/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_exceptions_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\PageController::exceptionEditAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sonata/page/cache')) {
            // sonata_page_cache_esi
            if (0 === strpos($pathinfo, '/sonata/page/cache/esi') && preg_match('#^/sonata/page/cache/esi/(?P<_token>[^/]++)/(?P<manager>[^/]++)/(?P<page_id>[^/]++)/(?P<block_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_cache_esi')), array (  '_controller' => 'sonata.page.cache.esi:cacheAction',));
            }

            // sonata_page_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/page/cache/ssi') && preg_match('#^/sonata/page/cache/ssi/(?P<_token>[^/]++)/(?P<manager>[^/]++)/(?P<page_id>[^/]++)/(?P<block_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_page_cache_ssi')), array (  '_controller' => 'sonata.page.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/page/cache/js-')) {
                // sonata_page_js_async_cache
                if ($pathinfo === '/sonata/page/cache/js-async') {
                    return array (  '_controller' => 'sonata.page.cache.js_async:cacheAction',  '_route' => 'sonata_page_js_async_cache',);
                }

                // sonata_page_js_sync_cache
                if ($pathinfo === '/sonata/page/cache/js-sync') {
                    return array (  '_controller' => 'sonata.page.cache.js_sync:cacheAction',  '_route' => 'sonata_page_js_sync_cache',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/backoffice')) {
                if (0 === strpos($pathinfo, '/admin/backoffice/first')) {
                    // admin_backoffice_first_list
                    if ($pathinfo === '/admin/backoffice/first/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.first',  '_sonata_name' => 'admin_backoffice_first_list',  '_route' => 'admin_backoffice_first_list',);
                    }

                    // admin_backoffice_first_create
                    if ($pathinfo === '/admin/backoffice/first/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.first',  '_sonata_name' => 'admin_backoffice_first_create',  '_route' => 'admin_backoffice_first_create',);
                    }

                    // admin_backoffice_first_batch
                    if ($pathinfo === '/admin/backoffice/first/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.first',  '_sonata_name' => 'admin_backoffice_first_batch',  '_route' => 'admin_backoffice_first_batch',);
                    }

                    // admin_backoffice_first_edit
                    if (preg_match('#^/admin/backoffice/first/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_first_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.first',  '_sonata_name' => 'admin_backoffice_first_edit',));
                    }

                    // admin_backoffice_first_delete
                    if (preg_match('#^/admin/backoffice/first/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_first_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.first',  '_sonata_name' => 'admin_backoffice_first_delete',));
                    }

                    // admin_backoffice_first_show
                    if (preg_match('#^/admin/backoffice/first/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_first_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.first',  '_sonata_name' => 'admin_backoffice_first_show',));
                    }

                    // admin_backoffice_first_export
                    if ($pathinfo === '/admin/backoffice/first/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.first',  '_sonata_name' => 'admin_backoffice_first_export',  '_route' => 'admin_backoffice_first_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/second')) {
                    // admin_backoffice_second_list
                    if ($pathinfo === '/admin/backoffice/second/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.second',  '_sonata_name' => 'admin_backoffice_second_list',  '_route' => 'admin_backoffice_second_list',);
                    }

                    // admin_backoffice_second_create
                    if ($pathinfo === '/admin/backoffice/second/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.second',  '_sonata_name' => 'admin_backoffice_second_create',  '_route' => 'admin_backoffice_second_create',);
                    }

                    // admin_backoffice_second_batch
                    if ($pathinfo === '/admin/backoffice/second/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.second',  '_sonata_name' => 'admin_backoffice_second_batch',  '_route' => 'admin_backoffice_second_batch',);
                    }

                    // admin_backoffice_second_edit
                    if (preg_match('#^/admin/backoffice/second/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_second_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.second',  '_sonata_name' => 'admin_backoffice_second_edit',));
                    }

                    // admin_backoffice_second_delete
                    if (preg_match('#^/admin/backoffice/second/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_second_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.second',  '_sonata_name' => 'admin_backoffice_second_delete',));
                    }

                    // admin_backoffice_second_show
                    if (preg_match('#^/admin/backoffice/second/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_second_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.second',  '_sonata_name' => 'admin_backoffice_second_show',));
                    }

                    // admin_backoffice_second_export
                    if ($pathinfo === '/admin/backoffice/second/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.second',  '_sonata_name' => 'admin_backoffice_second_export',  '_route' => 'admin_backoffice_second_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/third')) {
                    // admin_backoffice_third_list
                    if ($pathinfo === '/admin/backoffice/third/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.third',  '_sonata_name' => 'admin_backoffice_third_list',  '_route' => 'admin_backoffice_third_list',);
                    }

                    // admin_backoffice_third_create
                    if ($pathinfo === '/admin/backoffice/third/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.third',  '_sonata_name' => 'admin_backoffice_third_create',  '_route' => 'admin_backoffice_third_create',);
                    }

                    // admin_backoffice_third_batch
                    if ($pathinfo === '/admin/backoffice/third/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.third',  '_sonata_name' => 'admin_backoffice_third_batch',  '_route' => 'admin_backoffice_third_batch',);
                    }

                    // admin_backoffice_third_edit
                    if (preg_match('#^/admin/backoffice/third/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_third_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.third',  '_sonata_name' => 'admin_backoffice_third_edit',));
                    }

                    // admin_backoffice_third_delete
                    if (preg_match('#^/admin/backoffice/third/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_third_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.third',  '_sonata_name' => 'admin_backoffice_third_delete',));
                    }

                    // admin_backoffice_third_show
                    if (preg_match('#^/admin/backoffice/third/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_third_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.third',  '_sonata_name' => 'admin_backoffice_third_show',));
                    }

                    // admin_backoffice_third_export
                    if ($pathinfo === '/admin/backoffice/third/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.third',  '_sonata_name' => 'admin_backoffice_third_export',  '_route' => 'admin_backoffice_third_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/fourth')) {
                    // admin_backoffice_fourth_list
                    if ($pathinfo === '/admin/backoffice/fourth/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.fourth',  '_sonata_name' => 'admin_backoffice_fourth_list',  '_route' => 'admin_backoffice_fourth_list',);
                    }

                    // admin_backoffice_fourth_create
                    if ($pathinfo === '/admin/backoffice/fourth/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.fourth',  '_sonata_name' => 'admin_backoffice_fourth_create',  '_route' => 'admin_backoffice_fourth_create',);
                    }

                    // admin_backoffice_fourth_batch
                    if ($pathinfo === '/admin/backoffice/fourth/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.fourth',  '_sonata_name' => 'admin_backoffice_fourth_batch',  '_route' => 'admin_backoffice_fourth_batch',);
                    }

                    // admin_backoffice_fourth_edit
                    if (preg_match('#^/admin/backoffice/fourth/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_fourth_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.fourth',  '_sonata_name' => 'admin_backoffice_fourth_edit',));
                    }

                    // admin_backoffice_fourth_delete
                    if (preg_match('#^/admin/backoffice/fourth/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_fourth_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.fourth',  '_sonata_name' => 'admin_backoffice_fourth_delete',));
                    }

                    // admin_backoffice_fourth_show
                    if (preg_match('#^/admin/backoffice/fourth/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_fourth_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.fourth',  '_sonata_name' => 'admin_backoffice_fourth_show',));
                    }

                    // admin_backoffice_fourth_export
                    if ($pathinfo === '/admin/backoffice/fourth/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.fourth',  '_sonata_name' => 'admin_backoffice_fourth_export',  '_route' => 'admin_backoffice_fourth_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/slide')) {
                    // admin_backoffice_slide_list
                    if ($pathinfo === '/admin/backoffice/slide/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.slide',  '_sonata_name' => 'admin_backoffice_slide_list',  '_route' => 'admin_backoffice_slide_list',);
                    }

                    // admin_backoffice_slide_create
                    if ($pathinfo === '/admin/backoffice/slide/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.slide',  '_sonata_name' => 'admin_backoffice_slide_create',  '_route' => 'admin_backoffice_slide_create',);
                    }

                    // admin_backoffice_slide_batch
                    if ($pathinfo === '/admin/backoffice/slide/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.slide',  '_sonata_name' => 'admin_backoffice_slide_batch',  '_route' => 'admin_backoffice_slide_batch',);
                    }

                    // admin_backoffice_slide_edit
                    if (preg_match('#^/admin/backoffice/slide/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_slide_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.slide',  '_sonata_name' => 'admin_backoffice_slide_edit',));
                    }

                    // admin_backoffice_slide_delete
                    if (preg_match('#^/admin/backoffice/slide/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_slide_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.slide',  '_sonata_name' => 'admin_backoffice_slide_delete',));
                    }

                    // admin_backoffice_slide_show
                    if (preg_match('#^/admin/backoffice/slide/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_slide_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.slide',  '_sonata_name' => 'admin_backoffice_slide_show',));
                    }

                    // admin_backoffice_slide_export
                    if ($pathinfo === '/admin/backoffice/slide/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.slide',  '_sonata_name' => 'admin_backoffice_slide_export',  '_route' => 'admin_backoffice_slide_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/backoffice/slider')) {
                        // admin_backoffice_slider_list
                        if ($pathinfo === '/admin/backoffice/slider/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.slider',  '_sonata_name' => 'admin_backoffice_slider_list',  '_route' => 'admin_backoffice_slider_list',);
                        }

                        // admin_backoffice_slider_create
                        if ($pathinfo === '/admin/backoffice/slider/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.slider',  '_sonata_name' => 'admin_backoffice_slider_create',  '_route' => 'admin_backoffice_slider_create',);
                        }

                        // admin_backoffice_slider_batch
                        if ($pathinfo === '/admin/backoffice/slider/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.slider',  '_sonata_name' => 'admin_backoffice_slider_batch',  '_route' => 'admin_backoffice_slider_batch',);
                        }

                        // admin_backoffice_slider_edit
                        if (preg_match('#^/admin/backoffice/slider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_slider_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.slider',  '_sonata_name' => 'admin_backoffice_slider_edit',));
                        }

                        // admin_backoffice_slider_delete
                        if (preg_match('#^/admin/backoffice/slider/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_slider_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.slider',  '_sonata_name' => 'admin_backoffice_slider_delete',));
                        }

                        // admin_backoffice_slider_show
                        if (preg_match('#^/admin/backoffice/slider/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_slider_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.slider',  '_sonata_name' => 'admin_backoffice_slider_show',));
                        }

                        // admin_backoffice_slider_export
                        if ($pathinfo === '/admin/backoffice/slider/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.slider',  '_sonata_name' => 'admin_backoffice_slider_export',  '_route' => 'admin_backoffice_slider_export',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/page')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/page/page')) {
                        // admin_sonata_page_page_list
                        if ($pathinfo === '/admin/sonata/page/page/list') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_list',  '_route' => 'admin_sonata_page_page_list',);
                        }

                        // admin_sonata_page_page_create
                        if ($pathinfo === '/admin/sonata/page/page/create') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_create',  '_route' => 'admin_sonata_page_page_create',);
                        }

                        // admin_sonata_page_page_batch
                        if ($pathinfo === '/admin/sonata/page/page/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_batch',  '_route' => 'admin_sonata_page_page_batch',);
                        }

                        // admin_sonata_page_page_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_edit')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_edit',));
                        }

                        // admin_sonata_page_page_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_delete')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_delete',));
                        }

                        // admin_sonata_page_page_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_show')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_show',));
                        }

                        // admin_sonata_page_page_export
                        if ($pathinfo === '/admin/sonata/page/page/export') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_export',  '_route' => 'admin_sonata_page_page_export',);
                        }

                        // admin_sonata_page_page_block_list
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/list$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_list')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_list',));
                        }

                        // admin_sonata_page_page_block_create
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/create$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_create')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_create',));
                        }

                        // admin_sonata_page_page_block_batch
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/batch$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_batch')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_batch',));
                        }

                        // admin_sonata_page_page_block_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_edit')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_edit',));
                        }

                        // admin_sonata_page_page_block_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_delete')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_delete',));
                        }

                        // admin_sonata_page_page_block_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_show')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_show',));
                        }

                        // admin_sonata_page_page_block_export
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/export$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_export')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_export',));
                        }

                        // admin_sonata_page_page_block_view
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<childId>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_view')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_view',));
                        }

                        // admin_sonata_page_page_block_savePosition
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/save\\-position$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_savePosition')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::savePositionAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_savePosition',));
                        }

                        // admin_sonata_page_page_block_switchParent
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/switch\\-parent$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_switchParent')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::switchParentAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_switchParent',));
                        }

                        // admin_sonata_page_page_block_composePreview
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/block/(?P<block_id>[^/]++)/compose_preview$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_block_composePreview')), array (  'block_id' => NULL,  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::composePreviewAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_page_block_composePreview',));
                        }

                        // admin_sonata_page_page_snapshot_list
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/list$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_list')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_list',));
                        }

                        // admin_sonata_page_page_snapshot_create
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/create$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_create')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_create',));
                        }

                        // admin_sonata_page_page_snapshot_batch
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/batch$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_batch')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_batch',));
                        }

                        // admin_sonata_page_page_snapshot_edit
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_edit',));
                        }

                        // admin_sonata_page_page_snapshot_delete
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_delete',));
                        }

                        // admin_sonata_page_page_snapshot_show
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_show',));
                        }

                        // admin_sonata_page_page_snapshot_export
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/snapshot/export$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_snapshot_export')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.page|sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_page_snapshot_export',));
                        }

                        // admin_sonata_page_page_compose
                        if (preg_match('#^/admin/sonata/page/page/(?P<id>[^/]++)/compose$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_compose')), array (  'id' => NULL,  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::composeAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_compose',));
                        }

                        // admin_sonata_page_page_compose_container_show
                        if (0 === strpos($pathinfo, '/admin/sonata/page/page/compose/container') && preg_match('#^/admin/sonata/page/page/compose/container(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_page_compose_container_show')), array (  'id' => NULL,  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::composeContainerShowAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_compose_container_show',));
                        }

                        // admin_sonata_page_page_tree
                        if ($pathinfo === '/admin/sonata/page/page/tree') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\PageAdminController::treeAction',  '_sonata_admin' => 'sonata.page.admin.page',  '_sonata_name' => 'admin_sonata_page_page_tree',  '_route' => 'admin_sonata_page_page_tree',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/page/block')) {
                        // admin_sonata_page_block_list
                        if ($pathinfo === '/admin/sonata/page/block/list') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_list',  '_route' => 'admin_sonata_page_block_list',);
                        }

                        // admin_sonata_page_block_create
                        if ($pathinfo === '/admin/sonata/page/block/create') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_create',  '_route' => 'admin_sonata_page_block_create',);
                        }

                        // admin_sonata_page_block_batch
                        if ($pathinfo === '/admin/sonata/page/block/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_batch',  '_route' => 'admin_sonata_page_block_batch',);
                        }

                        // admin_sonata_page_block_edit
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_edit')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_edit',));
                        }

                        // admin_sonata_page_block_delete
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_delete')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_delete',));
                        }

                        // admin_sonata_page_block_show
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_show')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_show',));
                        }

                        // admin_sonata_page_block_export
                        if ($pathinfo === '/admin/sonata/page/block/export') {
                            return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_export',  '_route' => 'admin_sonata_page_block_export',);
                        }

                        // admin_sonata_page_block_view
                        if (preg_match('#^/admin/sonata/page/block/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_view')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_view',));
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/page/block/s')) {
                            // admin_sonata_page_block_savePosition
                            if ($pathinfo === '/admin/sonata/page/block/save-position') {
                                return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::savePositionAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_savePosition',  '_route' => 'admin_sonata_page_block_savePosition',);
                            }

                            // admin_sonata_page_block_switchParent
                            if ($pathinfo === '/admin/sonata/page/block/switch-parent') {
                                return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::switchParentAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_switchParent',  '_route' => 'admin_sonata_page_block_switchParent',);
                            }

                        }

                        // admin_sonata_page_block_composePreview
                        if (preg_match('#^/admin/sonata/page/block/(?P<block_id>[^/]++)/compose_preview$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block_composePreview')), array (  'block_id' => NULL,  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::composePreviewAction',  '_sonata_admin' => 'sonata.page.admin.block',  '_sonata_name' => 'admin_sonata_page_block_composePreview',));
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/page/block/shared')) {
                            // admin_sonata_page_block/shared_list
                            if ($pathinfo === '/admin/sonata/page/block/shared/list') {
                                return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_list',  '_route' => 'admin_sonata_page_block/shared_list',);
                            }

                            // admin_sonata_page_block/shared_create
                            if ($pathinfo === '/admin/sonata/page/block/shared/create') {
                                return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_create',  '_route' => 'admin_sonata_page_block/shared_create',);
                            }

                            // admin_sonata_page_block/shared_batch
                            if ($pathinfo === '/admin/sonata/page/block/shared/batch') {
                                return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_batch',  '_route' => 'admin_sonata_page_block/shared_batch',);
                            }

                            // admin_sonata_page_block/shared_edit
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_edit')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_edit',));
                            }

                            // admin_sonata_page_block/shared_delete
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_delete')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_delete',));
                            }

                            // admin_sonata_page_block/shared_show
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_show')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_show',));
                            }

                            // admin_sonata_page_block/shared_export
                            if ($pathinfo === '/admin/sonata/page/block/shared/export') {
                                return array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_export',  '_route' => 'admin_sonata_page_block/shared_export',);
                            }

                            // admin_sonata_page_block/shared_view
                            if (preg_match('#^/admin/sonata/page/block/shared/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_block/shared_view')), array (  '_controller' => 'Application\\Sonata\\PageBundle\\Controller\\BlockAdminController::viewAction',  '_sonata_admin' => 'sonata.page.admin.shared_block',  '_sonata_name' => 'admin_sonata_page_block/shared_view',));
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/page/s')) {
                        if (0 === strpos($pathinfo, '/admin/sonata/page/snapshot')) {
                            // admin_sonata_page_snapshot_list
                            if ($pathinfo === '/admin/sonata/page/snapshot/list') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_list',  '_route' => 'admin_sonata_page_snapshot_list',);
                            }

                            // admin_sonata_page_snapshot_create
                            if ($pathinfo === '/admin/sonata/page/snapshot/create') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_create',  '_route' => 'admin_sonata_page_snapshot_create',);
                            }

                            // admin_sonata_page_snapshot_batch
                            if ($pathinfo === '/admin/sonata/page/snapshot/batch') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_batch',  '_route' => 'admin_sonata_page_snapshot_batch',);
                            }

                            // admin_sonata_page_snapshot_edit
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_edit',));
                            }

                            // admin_sonata_page_snapshot_delete
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_delete',));
                            }

                            // admin_sonata_page_snapshot_show
                            if (preg_match('#^/admin/sonata/page/snapshot/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_snapshot_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_show',));
                            }

                            // admin_sonata_page_snapshot_export
                            if ($pathinfo === '/admin/sonata/page/snapshot/export') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SnapshotAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.snapshot',  '_sonata_name' => 'admin_sonata_page_snapshot_export',  '_route' => 'admin_sonata_page_snapshot_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/page/site')) {
                            // admin_sonata_page_site_list
                            if ($pathinfo === '/admin/sonata/page/site/list') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::listAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_list',  '_route' => 'admin_sonata_page_site_list',);
                            }

                            // admin_sonata_page_site_create
                            if ($pathinfo === '/admin/sonata/page/site/create') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::createAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_create',  '_route' => 'admin_sonata_page_site_create',);
                            }

                            // admin_sonata_page_site_batch
                            if ($pathinfo === '/admin/sonata/page/site/batch') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::batchAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_batch',  '_route' => 'admin_sonata_page_site_batch',);
                            }

                            // admin_sonata_page_site_edit
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_edit')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::editAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_edit',));
                            }

                            // admin_sonata_page_site_delete
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_delete')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::deleteAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_delete',));
                            }

                            // admin_sonata_page_site_show
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_show')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::showAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_show',));
                            }

                            // admin_sonata_page_site_export
                            if ($pathinfo === '/admin/sonata/page/site/export') {
                                return array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::exportAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_export',  '_route' => 'admin_sonata_page_site_export',);
                            }

                            // admin_sonata_page_site_snapshots
                            if (preg_match('#^/admin/sonata/page/site/(?P<id>[^/]++)/snapshots$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_page_site_snapshots')), array (  '_controller' => 'Sonata\\PageBundle\\Controller\\SiteAdminController::snapshotsAction',  '_sonata_admin' => 'sonata.page.admin.site',  '_sonata_name' => 'admin_sonata_page_site_snapshots',));
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                        // admin_sonata_media_media_list
                        if ($pathinfo === '/admin/sonata/media/media/list') {
                            return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                        }

                        // admin_sonata_media_media_create
                        if ($pathinfo === '/admin/sonata/media/media/create') {
                            return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                        }

                        // admin_sonata_media_media_batch
                        if ($pathinfo === '/admin/sonata/media/media/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                        }

                        // admin_sonata_media_media_edit
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                        }

                        // admin_sonata_media_media_delete
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                        }

                        // admin_sonata_media_media_show
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                        }

                        // admin_sonata_media_media_export
                        if ($pathinfo === '/admin/sonata/media/media/export') {
                            return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/media/ckeditor_')) {
                            // admin_sonata_media_media_ckeditor_browser
                            if ($pathinfo === '/admin/sonata/media/media/ckeditor_browser') {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::browserAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_ckeditor_browser',  '_route' => 'admin_sonata_media_media_ckeditor_browser',);
                            }

                            // admin_sonata_media_media_ckeditor_upload
                            if ($pathinfo === '/admin/sonata/media/media/ckeditor_upload') {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::uploadAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_ckeditor_upload',  '_route' => 'admin_sonata_media_media_ckeditor_upload',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                        // admin_sonata_media_gallery_list
                        if ($pathinfo === '/admin/sonata/media/gallery/list') {
                            return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                        }

                        // admin_sonata_media_gallery_create
                        if ($pathinfo === '/admin/sonata/media/gallery/create') {
                            return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                        }

                        // admin_sonata_media_gallery_batch
                        if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                        }

                        // admin_sonata_media_gallery_edit
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                        }

                        // admin_sonata_media_gallery_delete
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                        }

                        // admin_sonata_media_gallery_show
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                        }

                        // admin_sonata_media_gallery_export
                        if ($pathinfo === '/admin/sonata/media/gallery/export') {
                            return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                            // admin_sonata_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                            }

                            // admin_sonata_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                            }

                            // admin_sonata_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                            }

                            // admin_sonata_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                            }

                            // admin_sonata_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                            }

                            // admin_sonata_media_galleryhasmedia_show
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                            }

                            // admin_sonata_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Application\\Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sonata_user_admin_security_check;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }
                    not_sonata_user_admin_security_check:

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/resetting')) {
                // sonata_user_admin_resetting_request
                if ($pathinfo === '/admin/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_admin_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction',  '_route' => 'sonata_user_admin_resetting_request',);
                }
                not_sonata_user_admin_resetting_request:

                // sonata_user_admin_resetting_send_email
                if ($pathinfo === '/admin/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_admin_resetting_send_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction',  '_route' => 'sonata_user_admin_resetting_send_email',);
                }
                not_sonata_user_admin_resetting_send_email:

                // sonata_user_admin_resetting_check_email
                if ($pathinfo === '/admin/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_admin_resetting_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction',  '_route' => 'sonata_user_admin_resetting_check_email',);
                }
                not_sonata_user_admin_resetting_check_email:

                // sonata_user_admin_resetting_reset
                if (0 === strpos($pathinfo, '/admin/resetting/reset') && preg_match('#^/admin/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sonata_user_admin_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_admin_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction',));
                }
                not_sonata_user_admin_resetting_reset:

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
