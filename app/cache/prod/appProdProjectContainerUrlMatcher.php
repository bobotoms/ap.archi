<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/gmap/map')) {
            // g_map_map
            if ($pathinfo === '/gmap/map') {
                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\MapController::mapAction',  '_route' => 'g_map_map',);
            }

            // g_map_iti
            if ($pathinfo === '/gmap/mapIti') {
                return array (  '_controller' => 'FrontOfficeBundle\\Controller\\MapController::itiAction',  '_route' => 'g_map_iti',);
            }

        }

        // map_monde_mapmonde
        if ($pathinfo === '/mapmonde/map') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\MapMondeController::mapmondeAction',  '_route' => 'map_monde_mapmonde',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            // list
            if (preg_match('#^/api/(?P<cle>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ViewApiController::listAction',));
            }

            // detail
            if (preg_match('#^/api/(?P<cle>[^/]++)/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ViewApiController::detailAction',));
            }

            // prix
            if (preg_match('#^/api/(?P<cle>[^/]++)/prix/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prix')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ViewApiController::prixAction',));
            }

            // prixDetail
            if (preg_match('#^/api/(?P<cle>[^/]++)/prix/detail/(?P<price>[^/]++)/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prixDetail')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ViewApiController::prixDetailAction',));
            }

            // presta
            if (preg_match('#^/api/(?P<cle>[^/]++)/presta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presta')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ViewApiController::prestaAction',));
            }

        }

        // accommodation
        if (0 === strpos($pathinfo, '/hebergement') && preg_match('#^/hebergement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accommodation')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\AccommodationController::indexAction',));
        }

        // devis
        if ($pathinfo === '/devis') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\QuotationController::indexAction',  '_route' => 'devis',);
        }

        if (0 === strpos($pathinfo, '/zone')) {
            // area
            if (preg_match('#^/zone/(?P<areaId>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<pageForm>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'area')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\AreaController::detailsAction',  'page' => 1,  'pageForm' => 1,));
            }

            // area_form
            if (preg_match('#^/zone/(?P<areaId>[^/]++)/(?P<pageForm>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'area_form')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\AreaController::areaFormAction',));
            }

        }

        // country
        if (0 === strpos($pathinfo, '/pays') && preg_match('#^/pays/(?P<countryId>[^/]++)(?:/(?P<page>[^/]++)(?:/(?P<pageForm>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'country')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\CountryController::detailsAction',  'page' => 1,  'pageForm' => 1,));
        }

        // country_form
        if (0 === strpos($pathinfo, '/zone') && preg_match('#^/zone/(?P<countryId>[^/]++)/(?P<pageForm>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'country_form')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\CountryController::countryFormAction',));
        }

        // spot
        if (0 === strpos($pathinfo, '/spot') && preg_match('#^/spot/(?P<spotId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'spot')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\SpotController::detailsAction',));
        }

        if (0 === strpos($pathinfo, '/espece')) {
            // speciesList
            if (0 === strpos($pathinfo, '/especes') && preg_match('#^/especes(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'speciesList')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\SpeciesController::indexAction',  'page' => 1,));
            }

            // species
            if (preg_match('#^/espece/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'species')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\SpeciesController::detailsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sejour')) {
            // travels
            if (0 === strpos($pathinfo, '/sejours') && preg_match('#^/sejours(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'travels')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\TravelController::indexAction',  'page' => 1,));
            }

            // travel
            if (preg_match('#^/sejour/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'travel')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\TravelController::detailsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/croisiere')) {
            // cruises
            if (0 === strpos($pathinfo, '/croisieres') && preg_match('#^/croisieres(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cruises')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\CruiseController::indexAction',  'page' => 1,));
            }

            // cruise
            if (preg_match('#^/croisiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cruise')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\CruiseController::detailsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/safari')) {
            // safaris
            if (0 === strpos($pathinfo, '/safaris') && preg_match('#^/safaris(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'safaris')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\SafariController::indexAction',  'page' => 1,));
            }

            // safari
            if (preg_match('#^/safari/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'safari')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\SafariController::detailsAction',));
            }

        }

        // whereToGo
        if ($pathinfo === '/oupartir') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\WhereToGoController::indexAction',  '_route' => 'whereToGo',);
        }

        // faq
        if ($pathinfo === '/faq') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\FaqController::indexAction',  '_route' => 'faq',);
        }

        // team
        if ($pathinfo === '/equipe') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\TeamController::indexAction',  '_route' => 'team',);
        }

        if (0 === strpos($pathinfo, '/produit')) {
            // products
            if (0 === strpos($pathinfo, '/produits') && preg_match('#^/produits(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ProductController::indexAction',  'page' => 1,));
            }

            // product
            if (preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\ProductController::detailsAction',));
            }

        }

        // ajax_filters
        if ($pathinfo === '/ajaxfilters') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\ProductController::ajaxFiltersAction',  '_route' => 'ajax_filters',);
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\TestController::indexAction',  '_route' => 'test',);
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
                if (0 === strpos($pathinfo, '/admin/backoffice/ma')) {
                    if (0 === strpos($pathinfo, '/admin/backoffice/map')) {
                        // admin_backoffice_map_list
                        if ($pathinfo === '/admin/backoffice/map/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.map',  '_sonata_name' => 'admin_backoffice_map_list',  '_route' => 'admin_backoffice_map_list',);
                        }

                        // admin_backoffice_map_create
                        if ($pathinfo === '/admin/backoffice/map/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.map',  '_sonata_name' => 'admin_backoffice_map_create',  '_route' => 'admin_backoffice_map_create',);
                        }

                        // admin_backoffice_map_batch
                        if ($pathinfo === '/admin/backoffice/map/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.map',  '_sonata_name' => 'admin_backoffice_map_batch',  '_route' => 'admin_backoffice_map_batch',);
                        }

                        // admin_backoffice_map_edit
                        if (preg_match('#^/admin/backoffice/map/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_map_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.map',  '_sonata_name' => 'admin_backoffice_map_edit',));
                        }

                        // admin_backoffice_map_delete
                        if (preg_match('#^/admin/backoffice/map/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_map_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.map',  '_sonata_name' => 'admin_backoffice_map_delete',));
                        }

                        // admin_backoffice_map_show
                        if (preg_match('#^/admin/backoffice/map/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_map_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.map',  '_sonata_name' => 'admin_backoffice_map_show',));
                        }

                        // admin_backoffice_map_export
                        if ($pathinfo === '/admin/backoffice/map/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.map',  '_sonata_name' => 'admin_backoffice_map_export',  '_route' => 'admin_backoffice_map_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/backoffice/marker')) {
                        // admin_backoffice_marker_list
                        if ($pathinfo === '/admin/backoffice/marker/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.marker',  '_sonata_name' => 'admin_backoffice_marker_list',  '_route' => 'admin_backoffice_marker_list',);
                        }

                        // admin_backoffice_marker_create
                        if ($pathinfo === '/admin/backoffice/marker/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.marker',  '_sonata_name' => 'admin_backoffice_marker_create',  '_route' => 'admin_backoffice_marker_create',);
                        }

                        // admin_backoffice_marker_batch
                        if ($pathinfo === '/admin/backoffice/marker/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.marker',  '_sonata_name' => 'admin_backoffice_marker_batch',  '_route' => 'admin_backoffice_marker_batch',);
                        }

                        // admin_backoffice_marker_edit
                        if (preg_match('#^/admin/backoffice/marker/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_marker_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.marker',  '_sonata_name' => 'admin_backoffice_marker_edit',));
                        }

                        // admin_backoffice_marker_delete
                        if (preg_match('#^/admin/backoffice/marker/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_marker_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.marker',  '_sonata_name' => 'admin_backoffice_marker_delete',));
                        }

                        // admin_backoffice_marker_show
                        if (preg_match('#^/admin/backoffice/marker/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_marker_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.marker',  '_sonata_name' => 'admin_backoffice_marker_show',));
                        }

                        // admin_backoffice_marker_export
                        if ($pathinfo === '/admin/backoffice/marker/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.marker',  '_sonata_name' => 'admin_backoffice_marker_export',  '_route' => 'admin_backoffice_marker_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/namemaptype')) {
                    // admin_backoffice_namemaptype_list
                    if ($pathinfo === '/admin/backoffice/namemaptype/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.namemaptype',  '_sonata_name' => 'admin_backoffice_namemaptype_list',  '_route' => 'admin_backoffice_namemaptype_list',);
                    }

                    // admin_backoffice_namemaptype_create
                    if ($pathinfo === '/admin/backoffice/namemaptype/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.namemaptype',  '_sonata_name' => 'admin_backoffice_namemaptype_create',  '_route' => 'admin_backoffice_namemaptype_create',);
                    }

                    // admin_backoffice_namemaptype_batch
                    if ($pathinfo === '/admin/backoffice/namemaptype/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.namemaptype',  '_sonata_name' => 'admin_backoffice_namemaptype_batch',  '_route' => 'admin_backoffice_namemaptype_batch',);
                    }

                    // admin_backoffice_namemaptype_edit
                    if (preg_match('#^/admin/backoffice/namemaptype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_namemaptype_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.namemaptype',  '_sonata_name' => 'admin_backoffice_namemaptype_edit',));
                    }

                    // admin_backoffice_namemaptype_delete
                    if (preg_match('#^/admin/backoffice/namemaptype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_namemaptype_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.namemaptype',  '_sonata_name' => 'admin_backoffice_namemaptype_delete',));
                    }

                    // admin_backoffice_namemaptype_show
                    if (preg_match('#^/admin/backoffice/namemaptype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_namemaptype_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.namemaptype',  '_sonata_name' => 'admin_backoffice_namemaptype_show',));
                    }

                    // admin_backoffice_namemaptype_export
                    if ($pathinfo === '/admin/backoffice/namemaptype/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.namemaptype',  '_sonata_name' => 'admin_backoffice_namemaptype_export',  '_route' => 'admin_backoffice_namemaptype_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/destination')) {
                    // admin_backoffice_destination_list
                    if ($pathinfo === '/admin/backoffice/destination/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.destination',  '_sonata_name' => 'admin_backoffice_destination_list',  '_route' => 'admin_backoffice_destination_list',);
                    }

                    // admin_backoffice_destination_create
                    if ($pathinfo === '/admin/backoffice/destination/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.destination',  '_sonata_name' => 'admin_backoffice_destination_create',  '_route' => 'admin_backoffice_destination_create',);
                    }

                    // admin_backoffice_destination_batch
                    if ($pathinfo === '/admin/backoffice/destination/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.destination',  '_sonata_name' => 'admin_backoffice_destination_batch',  '_route' => 'admin_backoffice_destination_batch',);
                    }

                    // admin_backoffice_destination_edit
                    if (preg_match('#^/admin/backoffice/destination/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_destination_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.destination',  '_sonata_name' => 'admin_backoffice_destination_edit',));
                    }

                    // admin_backoffice_destination_delete
                    if (preg_match('#^/admin/backoffice/destination/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_destination_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.destination',  '_sonata_name' => 'admin_backoffice_destination_delete',));
                    }

                    // admin_backoffice_destination_show
                    if (preg_match('#^/admin/backoffice/destination/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_destination_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.destination',  '_sonata_name' => 'admin_backoffice_destination_show',));
                    }

                    // admin_backoffice_destination_export
                    if ($pathinfo === '/admin/backoffice/destination/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.destination',  '_sonata_name' => 'admin_backoffice_destination_export',  '_route' => 'admin_backoffice_destination_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/subdestination')) {
                    // admin_backoffice_subdestination_list
                    if ($pathinfo === '/admin/backoffice/subdestination/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.subdestination',  '_sonata_name' => 'admin_backoffice_subdestination_list',  '_route' => 'admin_backoffice_subdestination_list',);
                    }

                    // admin_backoffice_subdestination_create
                    if ($pathinfo === '/admin/backoffice/subdestination/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.subdestination',  '_sonata_name' => 'admin_backoffice_subdestination_create',  '_route' => 'admin_backoffice_subdestination_create',);
                    }

                    // admin_backoffice_subdestination_batch
                    if ($pathinfo === '/admin/backoffice/subdestination/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.subdestination',  '_sonata_name' => 'admin_backoffice_subdestination_batch',  '_route' => 'admin_backoffice_subdestination_batch',);
                    }

                    // admin_backoffice_subdestination_edit
                    if (preg_match('#^/admin/backoffice/subdestination/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_subdestination_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.subdestination',  '_sonata_name' => 'admin_backoffice_subdestination_edit',));
                    }

                    // admin_backoffice_subdestination_delete
                    if (preg_match('#^/admin/backoffice/subdestination/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_subdestination_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.subdestination',  '_sonata_name' => 'admin_backoffice_subdestination_delete',));
                    }

                    // admin_backoffice_subdestination_show
                    if (preg_match('#^/admin/backoffice/subdestination/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_subdestination_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.subdestination',  '_sonata_name' => 'admin_backoffice_subdestination_show',));
                    }

                    // admin_backoffice_subdestination_export
                    if ($pathinfo === '/admin/backoffice/subdestination/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.subdestination',  '_sonata_name' => 'admin_backoffice_subdestination_export',  '_route' => 'admin_backoffice_subdestination_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/area')) {
                    // admin_backoffice_area_list
                    if ($pathinfo === '/admin/backoffice/area/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.area',  '_sonata_name' => 'admin_backoffice_area_list',  '_route' => 'admin_backoffice_area_list',);
                    }

                    // admin_backoffice_area_create
                    if ($pathinfo === '/admin/backoffice/area/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.area',  '_sonata_name' => 'admin_backoffice_area_create',  '_route' => 'admin_backoffice_area_create',);
                    }

                    // admin_backoffice_area_batch
                    if ($pathinfo === '/admin/backoffice/area/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.area',  '_sonata_name' => 'admin_backoffice_area_batch',  '_route' => 'admin_backoffice_area_batch',);
                    }

                    // admin_backoffice_area_edit
                    if (preg_match('#^/admin/backoffice/area/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_area_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.area',  '_sonata_name' => 'admin_backoffice_area_edit',));
                    }

                    // admin_backoffice_area_delete
                    if (preg_match('#^/admin/backoffice/area/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_area_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.area',  '_sonata_name' => 'admin_backoffice_area_delete',));
                    }

                    // admin_backoffice_area_show
                    if (preg_match('#^/admin/backoffice/area/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_area_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.area',  '_sonata_name' => 'admin_backoffice_area_show',));
                    }

                    // admin_backoffice_area_export
                    if ($pathinfo === '/admin/backoffice/area/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.area',  '_sonata_name' => 'admin_backoffice_area_export',  '_route' => 'admin_backoffice_area_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/country')) {
                    // admin_backoffice_country_list
                    if ($pathinfo === '/admin/backoffice/country/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.country',  '_sonata_name' => 'admin_backoffice_country_list',  '_route' => 'admin_backoffice_country_list',);
                    }

                    // admin_backoffice_country_create
                    if ($pathinfo === '/admin/backoffice/country/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.country',  '_sonata_name' => 'admin_backoffice_country_create',  '_route' => 'admin_backoffice_country_create',);
                    }

                    // admin_backoffice_country_batch
                    if ($pathinfo === '/admin/backoffice/country/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.country',  '_sonata_name' => 'admin_backoffice_country_batch',  '_route' => 'admin_backoffice_country_batch',);
                    }

                    // admin_backoffice_country_edit
                    if (preg_match('#^/admin/backoffice/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_country_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.country',  '_sonata_name' => 'admin_backoffice_country_edit',));
                    }

                    // admin_backoffice_country_delete
                    if (preg_match('#^/admin/backoffice/country/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_country_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.country',  '_sonata_name' => 'admin_backoffice_country_delete',));
                    }

                    // admin_backoffice_country_show
                    if (preg_match('#^/admin/backoffice/country/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_country_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.country',  '_sonata_name' => 'admin_backoffice_country_show',));
                    }

                    // admin_backoffice_country_export
                    if ($pathinfo === '/admin/backoffice/country/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.country',  '_sonata_name' => 'admin_backoffice_country_export',  '_route' => 'admin_backoffice_country_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/s')) {
                    if (0 === strpos($pathinfo, '/admin/backoffice/spot')) {
                        // admin_backoffice_spot_list
                        if ($pathinfo === '/admin/backoffice/spot/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.spot',  '_sonata_name' => 'admin_backoffice_spot_list',  '_route' => 'admin_backoffice_spot_list',);
                        }

                        // admin_backoffice_spot_create
                        if ($pathinfo === '/admin/backoffice/spot/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.spot',  '_sonata_name' => 'admin_backoffice_spot_create',  '_route' => 'admin_backoffice_spot_create',);
                        }

                        // admin_backoffice_spot_batch
                        if ($pathinfo === '/admin/backoffice/spot/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.spot',  '_sonata_name' => 'admin_backoffice_spot_batch',  '_route' => 'admin_backoffice_spot_batch',);
                        }

                        // admin_backoffice_spot_edit
                        if (preg_match('#^/admin/backoffice/spot/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_spot_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.spot',  '_sonata_name' => 'admin_backoffice_spot_edit',));
                        }

                        // admin_backoffice_spot_delete
                        if (preg_match('#^/admin/backoffice/spot/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_spot_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.spot',  '_sonata_name' => 'admin_backoffice_spot_delete',));
                        }

                        // admin_backoffice_spot_show
                        if (preg_match('#^/admin/backoffice/spot/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_spot_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.spot',  '_sonata_name' => 'admin_backoffice_spot_show',));
                        }

                        // admin_backoffice_spot_export
                        if ($pathinfo === '/admin/backoffice/spot/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.spot',  '_sonata_name' => 'admin_backoffice_spot_export',  '_route' => 'admin_backoffice_spot_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/backoffice/site')) {
                        // admin_backoffice_site_list
                        if ($pathinfo === '/admin/backoffice/site/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.site',  '_sonata_name' => 'admin_backoffice_site_list',  '_route' => 'admin_backoffice_site_list',);
                        }

                        // admin_backoffice_site_create
                        if ($pathinfo === '/admin/backoffice/site/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.site',  '_sonata_name' => 'admin_backoffice_site_create',  '_route' => 'admin_backoffice_site_create',);
                        }

                        // admin_backoffice_site_batch
                        if ($pathinfo === '/admin/backoffice/site/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.site',  '_sonata_name' => 'admin_backoffice_site_batch',  '_route' => 'admin_backoffice_site_batch',);
                        }

                        // admin_backoffice_site_edit
                        if (preg_match('#^/admin/backoffice/site/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_site_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.site',  '_sonata_name' => 'admin_backoffice_site_edit',));
                        }

                        // admin_backoffice_site_delete
                        if (preg_match('#^/admin/backoffice/site/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_site_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.site',  '_sonata_name' => 'admin_backoffice_site_delete',));
                        }

                        // admin_backoffice_site_show
                        if (preg_match('#^/admin/backoffice/site/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_site_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.site',  '_sonata_name' => 'admin_backoffice_site_show',));
                        }

                        // admin_backoffice_site_export
                        if ($pathinfo === '/admin/backoffice/site/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.site',  '_sonata_name' => 'admin_backoffice_site_export',  '_route' => 'admin_backoffice_site_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/backoffice/species')) {
                        // admin_backoffice_species_list
                        if ($pathinfo === '/admin/backoffice/species/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.species',  '_sonata_name' => 'admin_backoffice_species_list',  '_route' => 'admin_backoffice_species_list',);
                        }

                        // admin_backoffice_species_create
                        if ($pathinfo === '/admin/backoffice/species/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.species',  '_sonata_name' => 'admin_backoffice_species_create',  '_route' => 'admin_backoffice_species_create',);
                        }

                        // admin_backoffice_species_batch
                        if ($pathinfo === '/admin/backoffice/species/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.species',  '_sonata_name' => 'admin_backoffice_species_batch',  '_route' => 'admin_backoffice_species_batch',);
                        }

                        // admin_backoffice_species_edit
                        if (preg_match('#^/admin/backoffice/species/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_species_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.species',  '_sonata_name' => 'admin_backoffice_species_edit',));
                        }

                        // admin_backoffice_species_delete
                        if (preg_match('#^/admin/backoffice/species/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_species_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.species',  '_sonata_name' => 'admin_backoffice_species_delete',));
                        }

                        // admin_backoffice_species_show
                        if (preg_match('#^/admin/backoffice/species/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_species_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.species',  '_sonata_name' => 'admin_backoffice_species_show',));
                        }

                        // admin_backoffice_species_export
                        if ($pathinfo === '/admin/backoffice/species/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.species',  '_sonata_name' => 'admin_backoffice_species_export',  '_route' => 'admin_backoffice_species_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/divingcenter')) {
                    // admin_backoffice_divingcenter_list
                    if ($pathinfo === '/admin/backoffice/divingcenter/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.divingcenter',  '_sonata_name' => 'admin_backoffice_divingcenter_list',  '_route' => 'admin_backoffice_divingcenter_list',);
                    }

                    // admin_backoffice_divingcenter_create
                    if ($pathinfo === '/admin/backoffice/divingcenter/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.divingcenter',  '_sonata_name' => 'admin_backoffice_divingcenter_create',  '_route' => 'admin_backoffice_divingcenter_create',);
                    }

                    // admin_backoffice_divingcenter_batch
                    if ($pathinfo === '/admin/backoffice/divingcenter/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.divingcenter',  '_sonata_name' => 'admin_backoffice_divingcenter_batch',  '_route' => 'admin_backoffice_divingcenter_batch',);
                    }

                    // admin_backoffice_divingcenter_edit
                    if (preg_match('#^/admin/backoffice/divingcenter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_divingcenter_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.divingcenter',  '_sonata_name' => 'admin_backoffice_divingcenter_edit',));
                    }

                    // admin_backoffice_divingcenter_delete
                    if (preg_match('#^/admin/backoffice/divingcenter/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_divingcenter_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.divingcenter',  '_sonata_name' => 'admin_backoffice_divingcenter_delete',));
                    }

                    // admin_backoffice_divingcenter_show
                    if (preg_match('#^/admin/backoffice/divingcenter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_divingcenter_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.divingcenter',  '_sonata_name' => 'admin_backoffice_divingcenter_show',));
                    }

                    // admin_backoffice_divingcenter_export
                    if ($pathinfo === '/admin/backoffice/divingcenter/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.divingcenter',  '_sonata_name' => 'admin_backoffice_divingcenter_export',  '_route' => 'admin_backoffice_divingcenter_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/backoffice/divingcenteroption')) {
                        // admin_backoffice_divingcenteroption_list
                        if ($pathinfo === '/admin/backoffice/divingcenteroption/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.divingcenteroption',  '_sonata_name' => 'admin_backoffice_divingcenteroption_list',  '_route' => 'admin_backoffice_divingcenteroption_list',);
                        }

                        // admin_backoffice_divingcenteroption_create
                        if ($pathinfo === '/admin/backoffice/divingcenteroption/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.divingcenteroption',  '_sonata_name' => 'admin_backoffice_divingcenteroption_create',  '_route' => 'admin_backoffice_divingcenteroption_create',);
                        }

                        // admin_backoffice_divingcenteroption_batch
                        if ($pathinfo === '/admin/backoffice/divingcenteroption/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.divingcenteroption',  '_sonata_name' => 'admin_backoffice_divingcenteroption_batch',  '_route' => 'admin_backoffice_divingcenteroption_batch',);
                        }

                        // admin_backoffice_divingcenteroption_edit
                        if (preg_match('#^/admin/backoffice/divingcenteroption/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_divingcenteroption_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.divingcenteroption',  '_sonata_name' => 'admin_backoffice_divingcenteroption_edit',));
                        }

                        // admin_backoffice_divingcenteroption_delete
                        if (preg_match('#^/admin/backoffice/divingcenteroption/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_divingcenteroption_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.divingcenteroption',  '_sonata_name' => 'admin_backoffice_divingcenteroption_delete',));
                        }

                        // admin_backoffice_divingcenteroption_show
                        if (preg_match('#^/admin/backoffice/divingcenteroption/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_divingcenteroption_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.divingcenteroption',  '_sonata_name' => 'admin_backoffice_divingcenteroption_show',));
                        }

                        // admin_backoffice_divingcenteroption_export
                        if ($pathinfo === '/admin/backoffice/divingcenteroption/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.divingcenteroption',  '_sonata_name' => 'admin_backoffice_divingcenteroption_export',  '_route' => 'admin_backoffice_divingcenteroption_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/p')) {
                    if (0 === strpos($pathinfo, '/admin/backoffice/product')) {
                        // admin_backoffice_product_list
                        if ($pathinfo === '/admin/backoffice/product/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.product',  '_sonata_name' => 'admin_backoffice_product_list',  '_route' => 'admin_backoffice_product_list',);
                        }

                        // admin_backoffice_product_create
                        if ($pathinfo === '/admin/backoffice/product/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.product',  '_sonata_name' => 'admin_backoffice_product_create',  '_route' => 'admin_backoffice_product_create',);
                        }

                        // admin_backoffice_product_batch
                        if ($pathinfo === '/admin/backoffice/product/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.product',  '_sonata_name' => 'admin_backoffice_product_batch',  '_route' => 'admin_backoffice_product_batch',);
                        }

                        // admin_backoffice_product_edit
                        if (preg_match('#^/admin/backoffice/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_product_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.product',  '_sonata_name' => 'admin_backoffice_product_edit',));
                        }

                        // admin_backoffice_product_delete
                        if (preg_match('#^/admin/backoffice/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_product_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.product',  '_sonata_name' => 'admin_backoffice_product_delete',));
                        }

                        // admin_backoffice_product_show
                        if (preg_match('#^/admin/backoffice/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_product_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.product',  '_sonata_name' => 'admin_backoffice_product_show',));
                        }

                        // admin_backoffice_product_export
                        if ($pathinfo === '/admin/backoffice/product/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.product',  '_sonata_name' => 'admin_backoffice_product_export',  '_route' => 'admin_backoffice_product_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/backoffice/package')) {
                        // admin_backoffice_package_list
                        if ($pathinfo === '/admin/backoffice/package/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.package',  '_sonata_name' => 'admin_backoffice_package_list',  '_route' => 'admin_backoffice_package_list',);
                        }

                        // admin_backoffice_package_create
                        if ($pathinfo === '/admin/backoffice/package/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.package',  '_sonata_name' => 'admin_backoffice_package_create',  '_route' => 'admin_backoffice_package_create',);
                        }

                        // admin_backoffice_package_batch
                        if ($pathinfo === '/admin/backoffice/package/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.package',  '_sonata_name' => 'admin_backoffice_package_batch',  '_route' => 'admin_backoffice_package_batch',);
                        }

                        // admin_backoffice_package_edit
                        if (preg_match('#^/admin/backoffice/package/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_package_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.package',  '_sonata_name' => 'admin_backoffice_package_edit',));
                        }

                        // admin_backoffice_package_delete
                        if (preg_match('#^/admin/backoffice/package/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_package_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.package',  '_sonata_name' => 'admin_backoffice_package_delete',));
                        }

                        // admin_backoffice_package_show
                        if (preg_match('#^/admin/backoffice/package/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_package_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.package',  '_sonata_name' => 'admin_backoffice_package_show',));
                        }

                        // admin_backoffice_package_export
                        if ($pathinfo === '/admin/backoffice/package/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.package',  '_sonata_name' => 'admin_backoffice_package_export',  '_route' => 'admin_backoffice_package_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/backoffice/provider')) {
                        // admin_backoffice_provider_list
                        if ($pathinfo === '/admin/backoffice/provider/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.provider',  '_sonata_name' => 'admin_backoffice_provider_list',  '_route' => 'admin_backoffice_provider_list',);
                        }

                        // admin_backoffice_provider_create
                        if ($pathinfo === '/admin/backoffice/provider/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.provider',  '_sonata_name' => 'admin_backoffice_provider_create',  '_route' => 'admin_backoffice_provider_create',);
                        }

                        // admin_backoffice_provider_batch
                        if ($pathinfo === '/admin/backoffice/provider/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.provider',  '_sonata_name' => 'admin_backoffice_provider_batch',  '_route' => 'admin_backoffice_provider_batch',);
                        }

                        // admin_backoffice_provider_edit
                        if (preg_match('#^/admin/backoffice/provider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_provider_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.provider',  '_sonata_name' => 'admin_backoffice_provider_edit',));
                        }

                        // admin_backoffice_provider_delete
                        if (preg_match('#^/admin/backoffice/provider/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_provider_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.provider',  '_sonata_name' => 'admin_backoffice_provider_delete',));
                        }

                        // admin_backoffice_provider_show
                        if (preg_match('#^/admin/backoffice/provider/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_provider_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.provider',  '_sonata_name' => 'admin_backoffice_provider_show',));
                        }

                        // admin_backoffice_provider_export
                        if ($pathinfo === '/admin/backoffice/provider/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.provider',  '_sonata_name' => 'admin_backoffice_provider_export',  '_route' => 'admin_backoffice_provider_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/desire')) {
                    // admin_backoffice_desire_list
                    if ($pathinfo === '/admin/backoffice/desire/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.desire',  '_sonata_name' => 'admin_backoffice_desire_list',  '_route' => 'admin_backoffice_desire_list',);
                    }

                    // admin_backoffice_desire_create
                    if ($pathinfo === '/admin/backoffice/desire/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.desire',  '_sonata_name' => 'admin_backoffice_desire_create',  '_route' => 'admin_backoffice_desire_create',);
                    }

                    // admin_backoffice_desire_batch
                    if ($pathinfo === '/admin/backoffice/desire/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.desire',  '_sonata_name' => 'admin_backoffice_desire_batch',  '_route' => 'admin_backoffice_desire_batch',);
                    }

                    // admin_backoffice_desire_edit
                    if (preg_match('#^/admin/backoffice/desire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_desire_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.desire',  '_sonata_name' => 'admin_backoffice_desire_edit',));
                    }

                    // admin_backoffice_desire_delete
                    if (preg_match('#^/admin/backoffice/desire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_desire_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.desire',  '_sonata_name' => 'admin_backoffice_desire_delete',));
                    }

                    // admin_backoffice_desire_show
                    if (preg_match('#^/admin/backoffice/desire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_desire_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.desire',  '_sonata_name' => 'admin_backoffice_desire_show',));
                    }

                    // admin_backoffice_desire_export
                    if ($pathinfo === '/admin/backoffice/desire/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.desire',  '_sonata_name' => 'admin_backoffice_desire_export',  '_route' => 'admin_backoffice_desire_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/fee')) {
                    // admin_backoffice_fee_list
                    if ($pathinfo === '/admin/backoffice/fee/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.fee',  '_sonata_name' => 'admin_backoffice_fee_list',  '_route' => 'admin_backoffice_fee_list',);
                    }

                    // admin_backoffice_fee_create
                    if ($pathinfo === '/admin/backoffice/fee/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.fee',  '_sonata_name' => 'admin_backoffice_fee_create',  '_route' => 'admin_backoffice_fee_create',);
                    }

                    // admin_backoffice_fee_batch
                    if ($pathinfo === '/admin/backoffice/fee/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.fee',  '_sonata_name' => 'admin_backoffice_fee_batch',  '_route' => 'admin_backoffice_fee_batch',);
                    }

                    // admin_backoffice_fee_edit
                    if (preg_match('#^/admin/backoffice/fee/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_fee_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.fee',  '_sonata_name' => 'admin_backoffice_fee_edit',));
                    }

                    // admin_backoffice_fee_delete
                    if (preg_match('#^/admin/backoffice/fee/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_fee_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.fee',  '_sonata_name' => 'admin_backoffice_fee_delete',));
                    }

                    // admin_backoffice_fee_show
                    if (preg_match('#^/admin/backoffice/fee/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_fee_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.fee',  '_sonata_name' => 'admin_backoffice_fee_show',));
                    }

                    // admin_backoffice_fee_export
                    if ($pathinfo === '/admin/backoffice/fee/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.fee',  '_sonata_name' => 'admin_backoffice_fee_export',  '_route' => 'admin_backoffice_fee_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/option')) {
                    // admin_backoffice_option_list
                    if ($pathinfo === '/admin/backoffice/option/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.option',  '_sonata_name' => 'admin_backoffice_option_list',  '_route' => 'admin_backoffice_option_list',);
                    }

                    // admin_backoffice_option_create
                    if ($pathinfo === '/admin/backoffice/option/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.option',  '_sonata_name' => 'admin_backoffice_option_create',  '_route' => 'admin_backoffice_option_create',);
                    }

                    // admin_backoffice_option_batch
                    if ($pathinfo === '/admin/backoffice/option/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.option',  '_sonata_name' => 'admin_backoffice_option_batch',  '_route' => 'admin_backoffice_option_batch',);
                    }

                    // admin_backoffice_option_edit
                    if (preg_match('#^/admin/backoffice/option/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_option_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.option',  '_sonata_name' => 'admin_backoffice_option_edit',));
                    }

                    // admin_backoffice_option_delete
                    if (preg_match('#^/admin/backoffice/option/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_option_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.option',  '_sonata_name' => 'admin_backoffice_option_delete',));
                    }

                    // admin_backoffice_option_show
                    if (preg_match('#^/admin/backoffice/option/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_option_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.option',  '_sonata_name' => 'admin_backoffice_option_show',));
                    }

                    // admin_backoffice_option_export
                    if ($pathinfo === '/admin/backoffice/option/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.option',  '_sonata_name' => 'admin_backoffice_option_export',  '_route' => 'admin_backoffice_option_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/includedoption')) {
                    // admin_backoffice_includedoption_list
                    if ($pathinfo === '/admin/backoffice/includedoption/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.includedoption',  '_sonata_name' => 'admin_backoffice_includedoption_list',  '_route' => 'admin_backoffice_includedoption_list',);
                    }

                    // admin_backoffice_includedoption_create
                    if ($pathinfo === '/admin/backoffice/includedoption/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.includedoption',  '_sonata_name' => 'admin_backoffice_includedoption_create',  '_route' => 'admin_backoffice_includedoption_create',);
                    }

                    // admin_backoffice_includedoption_batch
                    if ($pathinfo === '/admin/backoffice/includedoption/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.includedoption',  '_sonata_name' => 'admin_backoffice_includedoption_batch',  '_route' => 'admin_backoffice_includedoption_batch',);
                    }

                    // admin_backoffice_includedoption_edit
                    if (preg_match('#^/admin/backoffice/includedoption/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_includedoption_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.includedoption',  '_sonata_name' => 'admin_backoffice_includedoption_edit',));
                    }

                    // admin_backoffice_includedoption_delete
                    if (preg_match('#^/admin/backoffice/includedoption/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_includedoption_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.includedoption',  '_sonata_name' => 'admin_backoffice_includedoption_delete',));
                    }

                    // admin_backoffice_includedoption_show
                    if (preg_match('#^/admin/backoffice/includedoption/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_includedoption_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.includedoption',  '_sonata_name' => 'admin_backoffice_includedoption_show',));
                    }

                    // admin_backoffice_includedoption_export
                    if ($pathinfo === '/admin/backoffice/includedoption/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.includedoption',  '_sonata_name' => 'admin_backoffice_includedoption_export',  '_route' => 'admin_backoffice_includedoption_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/accommodation')) {
                    // admin_backoffice_accommodation_list
                    if ($pathinfo === '/admin/backoffice/accommodation/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.accommodation',  '_sonata_name' => 'admin_backoffice_accommodation_list',  '_route' => 'admin_backoffice_accommodation_list',);
                    }

                    // admin_backoffice_accommodation_create
                    if ($pathinfo === '/admin/backoffice/accommodation/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.accommodation',  '_sonata_name' => 'admin_backoffice_accommodation_create',  '_route' => 'admin_backoffice_accommodation_create',);
                    }

                    // admin_backoffice_accommodation_batch
                    if ($pathinfo === '/admin/backoffice/accommodation/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.accommodation',  '_sonata_name' => 'admin_backoffice_accommodation_batch',  '_route' => 'admin_backoffice_accommodation_batch',);
                    }

                    // admin_backoffice_accommodation_edit
                    if (preg_match('#^/admin/backoffice/accommodation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_accommodation_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.accommodation',  '_sonata_name' => 'admin_backoffice_accommodation_edit',));
                    }

                    // admin_backoffice_accommodation_delete
                    if (preg_match('#^/admin/backoffice/accommodation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_accommodation_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.accommodation',  '_sonata_name' => 'admin_backoffice_accommodation_delete',));
                    }

                    // admin_backoffice_accommodation_show
                    if (preg_match('#^/admin/backoffice/accommodation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_accommodation_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.accommodation',  '_sonata_name' => 'admin_backoffice_accommodation_show',));
                    }

                    // admin_backoffice_accommodation_export
                    if ($pathinfo === '/admin/backoffice/accommodation/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.accommodation',  '_sonata_name' => 'admin_backoffice_accommodation_export',  '_route' => 'admin_backoffice_accommodation_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/backoffice/accommodationopt')) {
                        // admin_backoffice_accommodationopt_list
                        if ($pathinfo === '/admin/backoffice/accommodationopt/list') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.accommodationopt',  '_sonata_name' => 'admin_backoffice_accommodationopt_list',  '_route' => 'admin_backoffice_accommodationopt_list',);
                        }

                        // admin_backoffice_accommodationopt_create
                        if ($pathinfo === '/admin/backoffice/accommodationopt/create') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.accommodationopt',  '_sonata_name' => 'admin_backoffice_accommodationopt_create',  '_route' => 'admin_backoffice_accommodationopt_create',);
                        }

                        // admin_backoffice_accommodationopt_batch
                        if ($pathinfo === '/admin/backoffice/accommodationopt/batch') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.accommodationopt',  '_sonata_name' => 'admin_backoffice_accommodationopt_batch',  '_route' => 'admin_backoffice_accommodationopt_batch',);
                        }

                        // admin_backoffice_accommodationopt_edit
                        if (preg_match('#^/admin/backoffice/accommodationopt/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_accommodationopt_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.accommodationopt',  '_sonata_name' => 'admin_backoffice_accommodationopt_edit',));
                        }

                        // admin_backoffice_accommodationopt_delete
                        if (preg_match('#^/admin/backoffice/accommodationopt/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_accommodationopt_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.accommodationopt',  '_sonata_name' => 'admin_backoffice_accommodationopt_delete',));
                        }

                        // admin_backoffice_accommodationopt_show
                        if (preg_match('#^/admin/backoffice/accommodationopt/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_accommodationopt_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.accommodationopt',  '_sonata_name' => 'admin_backoffice_accommodationopt_show',));
                        }

                        // admin_backoffice_accommodationopt_export
                        if ($pathinfo === '/admin/backoffice/accommodationopt/export') {
                            return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.accommodationopt',  '_sonata_name' => 'admin_backoffice_accommodationopt_export',  '_route' => 'admin_backoffice_accommodationopt_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/boat')) {
                    // admin_backoffice_boat_list
                    if ($pathinfo === '/admin/backoffice/boat/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.boat',  '_sonata_name' => 'admin_backoffice_boat_list',  '_route' => 'admin_backoffice_boat_list',);
                    }

                    // admin_backoffice_boat_create
                    if ($pathinfo === '/admin/backoffice/boat/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.boat',  '_sonata_name' => 'admin_backoffice_boat_create',  '_route' => 'admin_backoffice_boat_create',);
                    }

                    // admin_backoffice_boat_batch
                    if ($pathinfo === '/admin/backoffice/boat/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.boat',  '_sonata_name' => 'admin_backoffice_boat_batch',  '_route' => 'admin_backoffice_boat_batch',);
                    }

                    // admin_backoffice_boat_edit
                    if (preg_match('#^/admin/backoffice/boat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_boat_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.boat',  '_sonata_name' => 'admin_backoffice_boat_edit',));
                    }

                    // admin_backoffice_boat_delete
                    if (preg_match('#^/admin/backoffice/boat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_boat_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.boat',  '_sonata_name' => 'admin_backoffice_boat_delete',));
                    }

                    // admin_backoffice_boat_show
                    if (preg_match('#^/admin/backoffice/boat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_boat_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.boat',  '_sonata_name' => 'admin_backoffice_boat_show',));
                    }

                    // admin_backoffice_boat_export
                    if ($pathinfo === '/admin/backoffice/boat/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.boat',  '_sonata_name' => 'admin_backoffice_boat_export',  '_route' => 'admin_backoffice_boat_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/team')) {
                    // admin_backoffice_team_list
                    if ($pathinfo === '/admin/backoffice/team/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.team',  '_sonata_name' => 'admin_backoffice_team_list',  '_route' => 'admin_backoffice_team_list',);
                    }

                    // admin_backoffice_team_create
                    if ($pathinfo === '/admin/backoffice/team/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.team',  '_sonata_name' => 'admin_backoffice_team_create',  '_route' => 'admin_backoffice_team_create',);
                    }

                    // admin_backoffice_team_batch
                    if ($pathinfo === '/admin/backoffice/team/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.team',  '_sonata_name' => 'admin_backoffice_team_batch',  '_route' => 'admin_backoffice_team_batch',);
                    }

                    // admin_backoffice_team_edit
                    if (preg_match('#^/admin/backoffice/team/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_team_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.team',  '_sonata_name' => 'admin_backoffice_team_edit',));
                    }

                    // admin_backoffice_team_delete
                    if (preg_match('#^/admin/backoffice/team/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_team_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.team',  '_sonata_name' => 'admin_backoffice_team_delete',));
                    }

                    // admin_backoffice_team_show
                    if (preg_match('#^/admin/backoffice/team/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_team_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.team',  '_sonata_name' => 'admin_backoffice_team_show',));
                    }

                    // admin_backoffice_team_export
                    if ($pathinfo === '/admin/backoffice/team/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.team',  '_sonata_name' => 'admin_backoffice_team_export',  '_route' => 'admin_backoffice_team_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/office')) {
                    // admin_backoffice_office_list
                    if ($pathinfo === '/admin/backoffice/office/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.office',  '_sonata_name' => 'admin_backoffice_office_list',  '_route' => 'admin_backoffice_office_list',);
                    }

                    // admin_backoffice_office_create
                    if ($pathinfo === '/admin/backoffice/office/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.office',  '_sonata_name' => 'admin_backoffice_office_create',  '_route' => 'admin_backoffice_office_create',);
                    }

                    // admin_backoffice_office_batch
                    if ($pathinfo === '/admin/backoffice/office/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.office',  '_sonata_name' => 'admin_backoffice_office_batch',  '_route' => 'admin_backoffice_office_batch',);
                    }

                    // admin_backoffice_office_edit
                    if (preg_match('#^/admin/backoffice/office/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_office_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.office',  '_sonata_name' => 'admin_backoffice_office_edit',));
                    }

                    // admin_backoffice_office_delete
                    if (preg_match('#^/admin/backoffice/office/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_office_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.office',  '_sonata_name' => 'admin_backoffice_office_delete',));
                    }

                    // admin_backoffice_office_show
                    if (preg_match('#^/admin/backoffice/office/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_office_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.office',  '_sonata_name' => 'admin_backoffice_office_show',));
                    }

                    // admin_backoffice_office_export
                    if ($pathinfo === '/admin/backoffice/office/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.office',  '_sonata_name' => 'admin_backoffice_office_export',  '_route' => 'admin_backoffice_office_export',);
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

                if (0 === strpos($pathinfo, '/admin/backoffice/praticalinformation')) {
                    // admin_backoffice_praticalinformation_list
                    if ($pathinfo === '/admin/backoffice/praticalinformation/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.praticalinformation',  '_sonata_name' => 'admin_backoffice_praticalinformation_list',  '_route' => 'admin_backoffice_praticalinformation_list',);
                    }

                    // admin_backoffice_praticalinformation_create
                    if ($pathinfo === '/admin/backoffice/praticalinformation/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.praticalinformation',  '_sonata_name' => 'admin_backoffice_praticalinformation_create',  '_route' => 'admin_backoffice_praticalinformation_create',);
                    }

                    // admin_backoffice_praticalinformation_batch
                    if ($pathinfo === '/admin/backoffice/praticalinformation/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.praticalinformation',  '_sonata_name' => 'admin_backoffice_praticalinformation_batch',  '_route' => 'admin_backoffice_praticalinformation_batch',);
                    }

                    // admin_backoffice_praticalinformation_edit
                    if (preg_match('#^/admin/backoffice/praticalinformation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_praticalinformation_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.praticalinformation',  '_sonata_name' => 'admin_backoffice_praticalinformation_edit',));
                    }

                    // admin_backoffice_praticalinformation_delete
                    if (preg_match('#^/admin/backoffice/praticalinformation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_praticalinformation_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.praticalinformation',  '_sonata_name' => 'admin_backoffice_praticalinformation_delete',));
                    }

                    // admin_backoffice_praticalinformation_show
                    if (preg_match('#^/admin/backoffice/praticalinformation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_praticalinformation_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.praticalinformation',  '_sonata_name' => 'admin_backoffice_praticalinformation_show',));
                    }

                    // admin_backoffice_praticalinformation_export
                    if ($pathinfo === '/admin/backoffice/praticalinformation/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.praticalinformation',  '_sonata_name' => 'admin_backoffice_praticalinformation_export',  '_route' => 'admin_backoffice_praticalinformation_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/quotation')) {
                    // admin_backoffice_quotation_list
                    if ($pathinfo === '/admin/backoffice/quotation/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.quotation',  '_sonata_name' => 'admin_backoffice_quotation_list',  '_route' => 'admin_backoffice_quotation_list',);
                    }

                    // admin_backoffice_quotation_create
                    if ($pathinfo === '/admin/backoffice/quotation/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.quotation',  '_sonata_name' => 'admin_backoffice_quotation_create',  '_route' => 'admin_backoffice_quotation_create',);
                    }

                    // admin_backoffice_quotation_batch
                    if ($pathinfo === '/admin/backoffice/quotation/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.quotation',  '_sonata_name' => 'admin_backoffice_quotation_batch',  '_route' => 'admin_backoffice_quotation_batch',);
                    }

                    // admin_backoffice_quotation_edit
                    if (preg_match('#^/admin/backoffice/quotation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_quotation_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.quotation',  '_sonata_name' => 'admin_backoffice_quotation_edit',));
                    }

                    // admin_backoffice_quotation_delete
                    if (preg_match('#^/admin/backoffice/quotation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_quotation_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.quotation',  '_sonata_name' => 'admin_backoffice_quotation_delete',));
                    }

                    // admin_backoffice_quotation_show
                    if (preg_match('#^/admin/backoffice/quotation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_quotation_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.quotation',  '_sonata_name' => 'admin_backoffice_quotation_show',));
                    }

                    // admin_backoffice_quotation_export
                    if ($pathinfo === '/admin/backoffice/quotation/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.quotation',  '_sonata_name' => 'admin_backoffice_quotation_export',  '_route' => 'admin_backoffice_quotation_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/wunderground')) {
                    // admin_backoffice_wunderground_list
                    if ($pathinfo === '/admin/backoffice/wunderground/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.wunderground',  '_sonata_name' => 'admin_backoffice_wunderground_list',  '_route' => 'admin_backoffice_wunderground_list',);
                    }

                    // admin_backoffice_wunderground_create
                    if ($pathinfo === '/admin/backoffice/wunderground/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.wunderground',  '_sonata_name' => 'admin_backoffice_wunderground_create',  '_route' => 'admin_backoffice_wunderground_create',);
                    }

                    // admin_backoffice_wunderground_batch
                    if ($pathinfo === '/admin/backoffice/wunderground/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.wunderground',  '_sonata_name' => 'admin_backoffice_wunderground_batch',  '_route' => 'admin_backoffice_wunderground_batch',);
                    }

                    // admin_backoffice_wunderground_edit
                    if (preg_match('#^/admin/backoffice/wunderground/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_wunderground_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.wunderground',  '_sonata_name' => 'admin_backoffice_wunderground_edit',));
                    }

                    // admin_backoffice_wunderground_delete
                    if (preg_match('#^/admin/backoffice/wunderground/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_wunderground_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.wunderground',  '_sonata_name' => 'admin_backoffice_wunderground_delete',));
                    }

                    // admin_backoffice_wunderground_show
                    if (preg_match('#^/admin/backoffice/wunderground/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_wunderground_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.wunderground',  '_sonata_name' => 'admin_backoffice_wunderground_show',));
                    }

                    // admin_backoffice_wunderground_export
                    if ($pathinfo === '/admin/backoffice/wunderground/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.wunderground',  '_sonata_name' => 'admin_backoffice_wunderground_export',  '_route' => 'admin_backoffice_wunderground_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/speciesinfo')) {
                    // admin_backoffice_speciesinfo_list
                    if ($pathinfo === '/admin/backoffice/speciesinfo/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.speciesinfo',  '_sonata_name' => 'admin_backoffice_speciesinfo_list',  '_route' => 'admin_backoffice_speciesinfo_list',);
                    }

                    // admin_backoffice_speciesinfo_create
                    if ($pathinfo === '/admin/backoffice/speciesinfo/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.speciesinfo',  '_sonata_name' => 'admin_backoffice_speciesinfo_create',  '_route' => 'admin_backoffice_speciesinfo_create',);
                    }

                    // admin_backoffice_speciesinfo_batch
                    if ($pathinfo === '/admin/backoffice/speciesinfo/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.speciesinfo',  '_sonata_name' => 'admin_backoffice_speciesinfo_batch',  '_route' => 'admin_backoffice_speciesinfo_batch',);
                    }

                    // admin_backoffice_speciesinfo_edit
                    if (preg_match('#^/admin/backoffice/speciesinfo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_speciesinfo_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.speciesinfo',  '_sonata_name' => 'admin_backoffice_speciesinfo_edit',));
                    }

                    // admin_backoffice_speciesinfo_delete
                    if (preg_match('#^/admin/backoffice/speciesinfo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_speciesinfo_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.speciesinfo',  '_sonata_name' => 'admin_backoffice_speciesinfo_delete',));
                    }

                    // admin_backoffice_speciesinfo_show
                    if (preg_match('#^/admin/backoffice/speciesinfo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_speciesinfo_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.speciesinfo',  '_sonata_name' => 'admin_backoffice_speciesinfo_show',));
                    }

                    // admin_backoffice_speciesinfo_export
                    if ($pathinfo === '/admin/backoffice/speciesinfo/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.speciesinfo',  '_sonata_name' => 'admin_backoffice_speciesinfo_export',  '_route' => 'admin_backoffice_speciesinfo_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/info')) {
                    // admin_backoffice_info_list
                    if ($pathinfo === '/admin/backoffice/info/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.info',  '_sonata_name' => 'admin_backoffice_info_list',  '_route' => 'admin_backoffice_info_list',);
                    }

                    // admin_backoffice_info_create
                    if ($pathinfo === '/admin/backoffice/info/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.info',  '_sonata_name' => 'admin_backoffice_info_create',  '_route' => 'admin_backoffice_info_create',);
                    }

                    // admin_backoffice_info_batch
                    if ($pathinfo === '/admin/backoffice/info/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.info',  '_sonata_name' => 'admin_backoffice_info_batch',  '_route' => 'admin_backoffice_info_batch',);
                    }

                    // admin_backoffice_info_edit
                    if (preg_match('#^/admin/backoffice/info/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_info_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.info',  '_sonata_name' => 'admin_backoffice_info_edit',));
                    }

                    // admin_backoffice_info_delete
                    if (preg_match('#^/admin/backoffice/info/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_info_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.info',  '_sonata_name' => 'admin_backoffice_info_delete',));
                    }

                    // admin_backoffice_info_show
                    if (preg_match('#^/admin/backoffice/info/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_info_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.info',  '_sonata_name' => 'admin_backoffice_info_show',));
                    }

                    // admin_backoffice_info_export
                    if ($pathinfo === '/admin/backoffice/info/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.info',  '_sonata_name' => 'admin_backoffice_info_export',  '_route' => 'admin_backoffice_info_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/dateprice')) {
                    // admin_backoffice_dateprice_list
                    if ($pathinfo === '/admin/backoffice/dateprice/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.dateprice',  '_sonata_name' => 'admin_backoffice_dateprice_list',  '_route' => 'admin_backoffice_dateprice_list',);
                    }

                    // admin_backoffice_dateprice_create
                    if ($pathinfo === '/admin/backoffice/dateprice/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.dateprice',  '_sonata_name' => 'admin_backoffice_dateprice_create',  '_route' => 'admin_backoffice_dateprice_create',);
                    }

                    // admin_backoffice_dateprice_batch
                    if ($pathinfo === '/admin/backoffice/dateprice/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.dateprice',  '_sonata_name' => 'admin_backoffice_dateprice_batch',  '_route' => 'admin_backoffice_dateprice_batch',);
                    }

                    // admin_backoffice_dateprice_edit
                    if (preg_match('#^/admin/backoffice/dateprice/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_dateprice_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.dateprice',  '_sonata_name' => 'admin_backoffice_dateprice_edit',));
                    }

                    // admin_backoffice_dateprice_delete
                    if (preg_match('#^/admin/backoffice/dateprice/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_dateprice_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.dateprice',  '_sonata_name' => 'admin_backoffice_dateprice_delete',));
                    }

                    // admin_backoffice_dateprice_show
                    if (preg_match('#^/admin/backoffice/dateprice/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_dateprice_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.dateprice',  '_sonata_name' => 'admin_backoffice_dateprice_show',));
                    }

                    // admin_backoffice_dateprice_export
                    if ($pathinfo === '/admin/backoffice/dateprice/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.dateprice',  '_sonata_name' => 'admin_backoffice_dateprice_export',  '_route' => 'admin_backoffice_dateprice_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/insurance')) {
                    // admin_backoffice_insurance_list
                    if ($pathinfo === '/admin/backoffice/insurance/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.insurance',  '_sonata_name' => 'admin_backoffice_insurance_list',  '_route' => 'admin_backoffice_insurance_list',);
                    }

                    // admin_backoffice_insurance_create
                    if ($pathinfo === '/admin/backoffice/insurance/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.insurance',  '_sonata_name' => 'admin_backoffice_insurance_create',  '_route' => 'admin_backoffice_insurance_create',);
                    }

                    // admin_backoffice_insurance_batch
                    if ($pathinfo === '/admin/backoffice/insurance/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.insurance',  '_sonata_name' => 'admin_backoffice_insurance_batch',  '_route' => 'admin_backoffice_insurance_batch',);
                    }

                    // admin_backoffice_insurance_edit
                    if (preg_match('#^/admin/backoffice/insurance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_insurance_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.insurance',  '_sonata_name' => 'admin_backoffice_insurance_edit',));
                    }

                    // admin_backoffice_insurance_delete
                    if (preg_match('#^/admin/backoffice/insurance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_insurance_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.insurance',  '_sonata_name' => 'admin_backoffice_insurance_delete',));
                    }

                    // admin_backoffice_insurance_show
                    if (preg_match('#^/admin/backoffice/insurance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_insurance_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.insurance',  '_sonata_name' => 'admin_backoffice_insurance_show',));
                    }

                    // admin_backoffice_insurance_export
                    if ($pathinfo === '/admin/backoffice/insurance/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.insurance',  '_sonata_name' => 'admin_backoffice_insurance_export',  '_route' => 'admin_backoffice_insurance_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/theme')) {
                    // admin_backoffice_theme_list
                    if ($pathinfo === '/admin/backoffice/theme/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.theme',  '_sonata_name' => 'admin_backoffice_theme_list',  '_route' => 'admin_backoffice_theme_list',);
                    }

                    // admin_backoffice_theme_create
                    if ($pathinfo === '/admin/backoffice/theme/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.theme',  '_sonata_name' => 'admin_backoffice_theme_create',  '_route' => 'admin_backoffice_theme_create',);
                    }

                    // admin_backoffice_theme_batch
                    if ($pathinfo === '/admin/backoffice/theme/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.theme',  '_sonata_name' => 'admin_backoffice_theme_batch',  '_route' => 'admin_backoffice_theme_batch',);
                    }

                    // admin_backoffice_theme_edit
                    if (preg_match('#^/admin/backoffice/theme/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_theme_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.theme',  '_sonata_name' => 'admin_backoffice_theme_edit',));
                    }

                    // admin_backoffice_theme_delete
                    if (preg_match('#^/admin/backoffice/theme/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_theme_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.theme',  '_sonata_name' => 'admin_backoffice_theme_delete',));
                    }

                    // admin_backoffice_theme_show
                    if (preg_match('#^/admin/backoffice/theme/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_theme_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.theme',  '_sonata_name' => 'admin_backoffice_theme_show',));
                    }

                    // admin_backoffice_theme_export
                    if ($pathinfo === '/admin/backoffice/theme/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.theme',  '_sonata_name' => 'admin_backoffice_theme_export',  '_route' => 'admin_backoffice_theme_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/backoffice/faq')) {
                    // admin_backoffice_faq_list
                    if ($pathinfo === '/admin/backoffice/faq/list') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_backoffice_faq_list',  '_route' => 'admin_backoffice_faq_list',);
                    }

                    // admin_backoffice_faq_create
                    if ($pathinfo === '/admin/backoffice/faq/create') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_backoffice_faq_create',  '_route' => 'admin_backoffice_faq_create',);
                    }

                    // admin_backoffice_faq_batch
                    if ($pathinfo === '/admin/backoffice/faq/batch') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_backoffice_faq_batch',  '_route' => 'admin_backoffice_faq_batch',);
                    }

                    // admin_backoffice_faq_edit
                    if (preg_match('#^/admin/backoffice/faq/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_faq_edit')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_backoffice_faq_edit',));
                    }

                    // admin_backoffice_faq_delete
                    if (preg_match('#^/admin/backoffice/faq/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_faq_delete')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_backoffice_faq_delete',));
                    }

                    // admin_backoffice_faq_show
                    if (preg_match('#^/admin/backoffice/faq/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_backoffice_faq_show')), array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_backoffice_faq_show',));
                    }

                    // admin_backoffice_faq_export
                    if ($pathinfo === '/admin/backoffice/faq/export') {
                        return array (  '_controller' => 'Application\\Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.faq',  '_sonata_name' => 'admin_backoffice_faq_export',  '_route' => 'admin_backoffice_faq_export',);
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
