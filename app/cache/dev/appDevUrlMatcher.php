<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // serialkenbugtracker_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'serialkenbugtracker_home');
            }

            return array (  '_controller' => 'Serialken\\BugTrackerBundle\\Controller\\BugTrackerController::homeAction',  '_route' => 'serialkenbugtracker_home',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/se')) {
                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/admin/serialken')) {
                    if (0 === strpos($pathinfo, '/admin/serialken/user/user')) {
                        // admin_serialken_user_user_list
                        if ($pathinfo === '/admin/serialken/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_serialken_user_user_list',  '_route' => 'admin_serialken_user_user_list',);
                        }

                        // admin_serialken_user_user_create
                        if ($pathinfo === '/admin/serialken/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_serialken_user_user_create',  '_route' => 'admin_serialken_user_user_create',);
                        }

                        // admin_serialken_user_user_batch
                        if ($pathinfo === '/admin/serialken/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_serialken_user_user_batch',  '_route' => 'admin_serialken_user_user_batch',);
                        }

                        // admin_serialken_user_user_edit
                        if (preg_match('#^/admin/serialken/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_serialken_user_user_edit',));
                        }

                        // admin_serialken_user_user_delete
                        if (preg_match('#^/admin/serialken/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_serialken_user_user_delete',));
                        }

                        // admin_serialken_user_user_show
                        if (preg_match('#^/admin/serialken/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_serialken_user_user_show',));
                        }

                        // admin_serialken_user_user_export
                        if ($pathinfo === '/admin/serialken/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_serialken_user_user_export',  '_route' => 'admin_serialken_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/serialken/bugtracker')) {
                        if (0 === strpos($pathinfo, '/admin/serialken/bugtracker/project')) {
                            // admin_serialken_bugtracker_project_list
                            if ($pathinfo === '/admin/serialken/bugtracker/project/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_serialken_bugtracker_project_list',  '_route' => 'admin_serialken_bugtracker_project_list',);
                            }

                            // admin_serialken_bugtracker_project_create
                            if ($pathinfo === '/admin/serialken/bugtracker/project/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_serialken_bugtracker_project_create',  '_route' => 'admin_serialken_bugtracker_project_create',);
                            }

                            // admin_serialken_bugtracker_project_batch
                            if ($pathinfo === '/admin/serialken/bugtracker/project/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_serialken_bugtracker_project_batch',  '_route' => 'admin_serialken_bugtracker_project_batch',);
                            }

                            // admin_serialken_bugtracker_project_edit
                            if (preg_match('#^/admin/serialken/bugtracker/project/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_project_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_serialken_bugtracker_project_edit',));
                            }

                            // admin_serialken_bugtracker_project_delete
                            if (preg_match('#^/admin/serialken/bugtracker/project/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_project_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_serialken_bugtracker_project_delete',));
                            }

                            // admin_serialken_bugtracker_project_show
                            if (preg_match('#^/admin/serialken/bugtracker/project/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_project_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_serialken_bugtracker_project_show',));
                            }

                            // admin_serialken_bugtracker_project_export
                            if ($pathinfo === '/admin/serialken/bugtracker/project/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.project',  '_sonata_name' => 'admin_serialken_bugtracker_project_export',  '_route' => 'admin_serialken_bugtracker_project_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/serialken/bugtracker/application')) {
                            // admin_serialken_bugtracker_application_list
                            if ($pathinfo === '/admin/serialken/bugtracker/application/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.application',  '_sonata_name' => 'admin_serialken_bugtracker_application_list',  '_route' => 'admin_serialken_bugtracker_application_list',);
                            }

                            // admin_serialken_bugtracker_application_create
                            if ($pathinfo === '/admin/serialken/bugtracker/application/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.application',  '_sonata_name' => 'admin_serialken_bugtracker_application_create',  '_route' => 'admin_serialken_bugtracker_application_create',);
                            }

                            // admin_serialken_bugtracker_application_batch
                            if ($pathinfo === '/admin/serialken/bugtracker/application/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.application',  '_sonata_name' => 'admin_serialken_bugtracker_application_batch',  '_route' => 'admin_serialken_bugtracker_application_batch',);
                            }

                            // admin_serialken_bugtracker_application_edit
                            if (preg_match('#^/admin/serialken/bugtracker/application/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_application_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.application',  '_sonata_name' => 'admin_serialken_bugtracker_application_edit',));
                            }

                            // admin_serialken_bugtracker_application_delete
                            if (preg_match('#^/admin/serialken/bugtracker/application/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_application_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.application',  '_sonata_name' => 'admin_serialken_bugtracker_application_delete',));
                            }

                            // admin_serialken_bugtracker_application_show
                            if (preg_match('#^/admin/serialken/bugtracker/application/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_application_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.application',  '_sonata_name' => 'admin_serialken_bugtracker_application_show',));
                            }

                            // admin_serialken_bugtracker_application_export
                            if ($pathinfo === '/admin/serialken/bugtracker/application/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.application',  '_sonata_name' => 'admin_serialken_bugtracker_application_export',  '_route' => 'admin_serialken_bugtracker_application_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/serialken/bugtracker/comments')) {
                            // admin_serialken_bugtracker_comments_list
                            if ($pathinfo === '/admin/serialken/bugtracker/comments/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.comments',  '_sonata_name' => 'admin_serialken_bugtracker_comments_list',  '_route' => 'admin_serialken_bugtracker_comments_list',);
                            }

                            // admin_serialken_bugtracker_comments_create
                            if ($pathinfo === '/admin/serialken/bugtracker/comments/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.comments',  '_sonata_name' => 'admin_serialken_bugtracker_comments_create',  '_route' => 'admin_serialken_bugtracker_comments_create',);
                            }

                            // admin_serialken_bugtracker_comments_batch
                            if ($pathinfo === '/admin/serialken/bugtracker/comments/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.comments',  '_sonata_name' => 'admin_serialken_bugtracker_comments_batch',  '_route' => 'admin_serialken_bugtracker_comments_batch',);
                            }

                            // admin_serialken_bugtracker_comments_edit
                            if (preg_match('#^/admin/serialken/bugtracker/comments/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_comments_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.comments',  '_sonata_name' => 'admin_serialken_bugtracker_comments_edit',));
                            }

                            // admin_serialken_bugtracker_comments_delete
                            if (preg_match('#^/admin/serialken/bugtracker/comments/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_comments_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.comments',  '_sonata_name' => 'admin_serialken_bugtracker_comments_delete',));
                            }

                            // admin_serialken_bugtracker_comments_show
                            if (preg_match('#^/admin/serialken/bugtracker/comments/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_comments_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.comments',  '_sonata_name' => 'admin_serialken_bugtracker_comments_show',));
                            }

                            // admin_serialken_bugtracker_comments_export
                            if ($pathinfo === '/admin/serialken/bugtracker/comments/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.comments',  '_sonata_name' => 'admin_serialken_bugtracker_comments_export',  '_route' => 'admin_serialken_bugtracker_comments_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/serialken/bugtracker/priority')) {
                            // admin_serialken_bugtracker_priority_list
                            if ($pathinfo === '/admin/serialken/bugtracker/priority/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.priority',  '_sonata_name' => 'admin_serialken_bugtracker_priority_list',  '_route' => 'admin_serialken_bugtracker_priority_list',);
                            }

                            // admin_serialken_bugtracker_priority_create
                            if ($pathinfo === '/admin/serialken/bugtracker/priority/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.priority',  '_sonata_name' => 'admin_serialken_bugtracker_priority_create',  '_route' => 'admin_serialken_bugtracker_priority_create',);
                            }

                            // admin_serialken_bugtracker_priority_batch
                            if ($pathinfo === '/admin/serialken/bugtracker/priority/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.priority',  '_sonata_name' => 'admin_serialken_bugtracker_priority_batch',  '_route' => 'admin_serialken_bugtracker_priority_batch',);
                            }

                            // admin_serialken_bugtracker_priority_edit
                            if (preg_match('#^/admin/serialken/bugtracker/priority/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_priority_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.priority',  '_sonata_name' => 'admin_serialken_bugtracker_priority_edit',));
                            }

                            // admin_serialken_bugtracker_priority_delete
                            if (preg_match('#^/admin/serialken/bugtracker/priority/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_priority_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.priority',  '_sonata_name' => 'admin_serialken_bugtracker_priority_delete',));
                            }

                            // admin_serialken_bugtracker_priority_show
                            if (preg_match('#^/admin/serialken/bugtracker/priority/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_priority_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.priority',  '_sonata_name' => 'admin_serialken_bugtracker_priority_show',));
                            }

                            // admin_serialken_bugtracker_priority_export
                            if ($pathinfo === '/admin/serialken/bugtracker/priority/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.priority',  '_sonata_name' => 'admin_serialken_bugtracker_priority_export',  '_route' => 'admin_serialken_bugtracker_priority_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/serialken/bugtracker/workflow')) {
                            // admin_serialken_bugtracker_workflow_list
                            if ($pathinfo === '/admin/serialken/bugtracker/workflow/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.workflow',  '_sonata_name' => 'admin_serialken_bugtracker_workflow_list',  '_route' => 'admin_serialken_bugtracker_workflow_list',);
                            }

                            // admin_serialken_bugtracker_workflow_create
                            if ($pathinfo === '/admin/serialken/bugtracker/workflow/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.workflow',  '_sonata_name' => 'admin_serialken_bugtracker_workflow_create',  '_route' => 'admin_serialken_bugtracker_workflow_create',);
                            }

                            // admin_serialken_bugtracker_workflow_batch
                            if ($pathinfo === '/admin/serialken/bugtracker/workflow/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.workflow',  '_sonata_name' => 'admin_serialken_bugtracker_workflow_batch',  '_route' => 'admin_serialken_bugtracker_workflow_batch',);
                            }

                            // admin_serialken_bugtracker_workflow_edit
                            if (preg_match('#^/admin/serialken/bugtracker/workflow/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_workflow_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.workflow',  '_sonata_name' => 'admin_serialken_bugtracker_workflow_edit',));
                            }

                            // admin_serialken_bugtracker_workflow_delete
                            if (preg_match('#^/admin/serialken/bugtracker/workflow/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_workflow_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.workflow',  '_sonata_name' => 'admin_serialken_bugtracker_workflow_delete',));
                            }

                            // admin_serialken_bugtracker_workflow_show
                            if (preg_match('#^/admin/serialken/bugtracker/workflow/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_workflow_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.workflow',  '_sonata_name' => 'admin_serialken_bugtracker_workflow_show',));
                            }

                            // admin_serialken_bugtracker_workflow_export
                            if ($pathinfo === '/admin/serialken/bugtracker/workflow/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.workflow',  '_sonata_name' => 'admin_serialken_bugtracker_workflow_export',  '_route' => 'admin_serialken_bugtracker_workflow_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/serialken/bugtracker/state')) {
                            // admin_serialken_bugtracker_state_list
                            if ($pathinfo === '/admin/serialken/bugtracker/state/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.state',  '_sonata_name' => 'admin_serialken_bugtracker_state_list',  '_route' => 'admin_serialken_bugtracker_state_list',);
                            }

                            // admin_serialken_bugtracker_state_create
                            if ($pathinfo === '/admin/serialken/bugtracker/state/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.state',  '_sonata_name' => 'admin_serialken_bugtracker_state_create',  '_route' => 'admin_serialken_bugtracker_state_create',);
                            }

                            // admin_serialken_bugtracker_state_batch
                            if ($pathinfo === '/admin/serialken/bugtracker/state/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.state',  '_sonata_name' => 'admin_serialken_bugtracker_state_batch',  '_route' => 'admin_serialken_bugtracker_state_batch',);
                            }

                            // admin_serialken_bugtracker_state_edit
                            if (preg_match('#^/admin/serialken/bugtracker/state/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_state_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.state',  '_sonata_name' => 'admin_serialken_bugtracker_state_edit',));
                            }

                            // admin_serialken_bugtracker_state_delete
                            if (preg_match('#^/admin/serialken/bugtracker/state/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_state_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.state',  '_sonata_name' => 'admin_serialken_bugtracker_state_delete',));
                            }

                            // admin_serialken_bugtracker_state_show
                            if (preg_match('#^/admin/serialken/bugtracker/state/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_state_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.state',  '_sonata_name' => 'admin_serialken_bugtracker_state_show',));
                            }

                            // admin_serialken_bugtracker_state_export
                            if ($pathinfo === '/admin/serialken/bugtracker/state/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.state',  '_sonata_name' => 'admin_serialken_bugtracker_state_export',  '_route' => 'admin_serialken_bugtracker_state_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/serialken/bugtracker/stateworkflow')) {
                                // admin_serialken_bugtracker_stateworkflow_list
                                if ($pathinfo === '/admin/serialken/bugtracker/stateworkflow/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.stateworkflow',  '_sonata_name' => 'admin_serialken_bugtracker_stateworkflow_list',  '_route' => 'admin_serialken_bugtracker_stateworkflow_list',);
                                }

                                // admin_serialken_bugtracker_stateworkflow_create
                                if ($pathinfo === '/admin/serialken/bugtracker/stateworkflow/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.stateworkflow',  '_sonata_name' => 'admin_serialken_bugtracker_stateworkflow_create',  '_route' => 'admin_serialken_bugtracker_stateworkflow_create',);
                                }

                                // admin_serialken_bugtracker_stateworkflow_batch
                                if ($pathinfo === '/admin/serialken/bugtracker/stateworkflow/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.stateworkflow',  '_sonata_name' => 'admin_serialken_bugtracker_stateworkflow_batch',  '_route' => 'admin_serialken_bugtracker_stateworkflow_batch',);
                                }

                                // admin_serialken_bugtracker_stateworkflow_edit
                                if (preg_match('#^/admin/serialken/bugtracker/stateworkflow/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_stateworkflow_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.stateworkflow',  '_sonata_name' => 'admin_serialken_bugtracker_stateworkflow_edit',));
                                }

                                // admin_serialken_bugtracker_stateworkflow_delete
                                if (preg_match('#^/admin/serialken/bugtracker/stateworkflow/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_stateworkflow_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.stateworkflow',  '_sonata_name' => 'admin_serialken_bugtracker_stateworkflow_delete',));
                                }

                                // admin_serialken_bugtracker_stateworkflow_show
                                if (preg_match('#^/admin/serialken/bugtracker/stateworkflow/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_bugtracker_stateworkflow_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.stateworkflow',  '_sonata_name' => 'admin_serialken_bugtracker_stateworkflow_show',));
                                }

                                // admin_serialken_bugtracker_stateworkflow_export
                                if ($pathinfo === '/admin/serialken/bugtracker/stateworkflow/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.stateworkflow',  '_sonata_name' => 'admin_serialken_bugtracker_stateworkflow_export',  '_route' => 'admin_serialken_bugtracker_stateworkflow_export',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/serialken/media')) {
                        if (0 === strpos($pathinfo, '/admin/serialken/media/media')) {
                            // admin_serialken_media_media_list
                            if ($pathinfo === '/admin/serialken/media/media/list') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_serialken_media_media_list',  '_route' => 'admin_serialken_media_media_list',);
                            }

                            // admin_serialken_media_media_create
                            if ($pathinfo === '/admin/serialken/media/media/create') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_serialken_media_media_create',  '_route' => 'admin_serialken_media_media_create',);
                            }

                            // admin_serialken_media_media_batch
                            if ($pathinfo === '/admin/serialken/media/media/batch') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_serialken_media_media_batch',  '_route' => 'admin_serialken_media_media_batch',);
                            }

                            // admin_serialken_media_media_edit
                            if (preg_match('#^/admin/serialken/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_serialken_media_media_edit',));
                            }

                            // admin_serialken_media_media_delete
                            if (preg_match('#^/admin/serialken/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_serialken_media_media_delete',));
                            }

                            // admin_serialken_media_media_show
                            if (preg_match('#^/admin/serialken/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_serialken_media_media_show',));
                            }

                            // admin_serialken_media_media_export
                            if ($pathinfo === '/admin/serialken/media/media/export') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_serialken_media_media_export',  '_route' => 'admin_serialken_media_media_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/serialken/media/gallery')) {
                            // admin_serialken_media_gallery_list
                            if ($pathinfo === '/admin/serialken/media/gallery/list') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_serialken_media_gallery_list',  '_route' => 'admin_serialken_media_gallery_list',);
                            }

                            // admin_serialken_media_gallery_create
                            if ($pathinfo === '/admin/serialken/media/gallery/create') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_serialken_media_gallery_create',  '_route' => 'admin_serialken_media_gallery_create',);
                            }

                            // admin_serialken_media_gallery_batch
                            if ($pathinfo === '/admin/serialken/media/gallery/batch') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_serialken_media_gallery_batch',  '_route' => 'admin_serialken_media_gallery_batch',);
                            }

                            // admin_serialken_media_gallery_edit
                            if (preg_match('#^/admin/serialken/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_serialken_media_gallery_edit',));
                            }

                            // admin_serialken_media_gallery_delete
                            if (preg_match('#^/admin/serialken/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_serialken_media_gallery_delete',));
                            }

                            // admin_serialken_media_gallery_show
                            if (preg_match('#^/admin/serialken/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_serialken_media_gallery_show',));
                            }

                            // admin_serialken_media_gallery_export
                            if ($pathinfo === '/admin/serialken/media/gallery/export') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_serialken_media_gallery_export',  '_route' => 'admin_serialken_media_gallery_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/serialken/media/galleryhasmedia')) {
                                // admin_serialken_media_galleryhasmedia_list
                                if ($pathinfo === '/admin/serialken/media/galleryhasmedia/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_serialken_media_galleryhasmedia_list',  '_route' => 'admin_serialken_media_galleryhasmedia_list',);
                                }

                                // admin_serialken_media_galleryhasmedia_create
                                if ($pathinfo === '/admin/serialken/media/galleryhasmedia/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_serialken_media_galleryhasmedia_create',  '_route' => 'admin_serialken_media_galleryhasmedia_create',);
                                }

                                // admin_serialken_media_galleryhasmedia_batch
                                if ($pathinfo === '/admin/serialken/media/galleryhasmedia/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_serialken_media_galleryhasmedia_batch',  '_route' => 'admin_serialken_media_galleryhasmedia_batch',);
                                }

                                // admin_serialken_media_galleryhasmedia_edit
                                if (preg_match('#^/admin/serialken/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_serialken_media_galleryhasmedia_edit',));
                                }

                                // admin_serialken_media_galleryhasmedia_delete
                                if (preg_match('#^/admin/serialken/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_serialken_media_galleryhasmedia_delete',));
                                }

                                // admin_serialken_media_galleryhasmedia_show
                                if (preg_match('#^/admin/serialken/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serialken_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_serialken_media_galleryhasmedia_show',));
                                }

                                // admin_serialken_media_galleryhasmedia_export
                                if ($pathinfo === '/admin/serialken/media/galleryhasmedia/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_serialken_media_galleryhasmedia_export',  '_route' => 'admin_serialken_media_galleryhasmedia_export',);
                                }

                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/browse')) {
            // sizannia_editor_index
            if (rtrim($pathinfo, '/') === '/browse') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sizannia_editor_index');
                }

                return array (  '_controller' => 'Sizannia\\EditorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sizannia_editor_index',);
            }

            // sizannia_editor_index_tmp
            if ($pathinfo === '/browse/ckfinder.html') {
                return array (  '_controller' => 'Sizannia\\EditorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sizannia_editor_index_tmp',);
            }

        }

        // sizannia_editor_init
        if (0 === strpos($pathinfo, '/connector') && preg_match('#^/connector/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sizannia_editor_init')), array (  '_controller' => 'Sizannia\\EditorBundle\\Controller\\DefaultController::initAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
