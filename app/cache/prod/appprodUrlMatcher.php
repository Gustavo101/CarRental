<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::indexAction',  '_route' => 'homepage',);
        }

        // vehicle
        if (rtrim($pathinfo, '/') === '/vehicle') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vehicle');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::indexAction',  '_route' => 'vehicle',);
        }

        // vehicle_show
        if (0 === strpos($pathinfo, '/vehicle') && preg_match('#^/vehicle/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::showAction',)), array('_route' => 'vehicle_show'));
        }

        // vehicle_new
        if ($pathinfo === '/vehicle/new') {
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::newAction',  '_route' => 'vehicle_new',);
        }

        // vehicle_create
        if ($pathinfo === '/vehicle/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vehicle_create;
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::createAction',  '_route' => 'vehicle_create',);
        }
        not_vehicle_create:

        // vehicle_edit
        if (0 === strpos($pathinfo, '/vehicle') && preg_match('#^/vehicle/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::editAction',)), array('_route' => 'vehicle_edit'));
        }

        // vehicle_update
        if (0 === strpos($pathinfo, '/vehicle') && preg_match('#^/vehicle/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vehicle_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::updateAction',)), array('_route' => 'vehicle_update'));
        }
        not_vehicle_update:

        // vehicle_delete
        if (0 === strpos($pathinfo, '/vehicle') && preg_match('#^/vehicle/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_vehicle_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::deleteAction',)), array('_route' => 'vehicle_delete'));
        }
        not_vehicle_delete:

        // customer
        if (rtrim($pathinfo, '/') === '/customer') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'customer');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::indexAction',  '_route' => 'customer',);
        }

        // customer_show
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::showAction',)), array('_route' => 'customer_show'));
        }

        // customer_new
        if ($pathinfo === '/customer/new') {
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::newAction',  '_route' => 'customer_new',);
        }

        // customer_create
        if ($pathinfo === '/customer/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_create;
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::createAction',  '_route' => 'customer_create',);
        }
        not_customer_create:

        // customer_edit
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::editAction',)), array('_route' => 'customer_edit'));
        }

        // customer_update
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::updateAction',)), array('_route' => 'customer_update'));
        }
        not_customer_update:

        // customer_delete
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_customer_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::deleteAction',)), array('_route' => 'customer_delete'));
        }
        not_customer_delete:

        // manufacturer
        if (rtrim($pathinfo, '/') === '/manufacturer') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'manufacturer');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::indexAction',  '_route' => 'manufacturer',);
        }

        // manufacturer_show
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::showAction',)), array('_route' => 'manufacturer_show'));
        }

        // manufacturer_new
        if ($pathinfo === '/manufacturer/new') {
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::newAction',  '_route' => 'manufacturer_new',);
        }

        // manufacturer_create
        if ($pathinfo === '/manufacturer/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manufacturer_create;
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::createAction',  '_route' => 'manufacturer_create',);
        }
        not_manufacturer_create:

        // manufacturer_edit
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::editAction',)), array('_route' => 'manufacturer_edit'));
        }

        // manufacturer_update
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manufacturer_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::updateAction',)), array('_route' => 'manufacturer_update'));
        }
        not_manufacturer_update:

        // manufacturer_delete
        if (0 === strpos($pathinfo, '/manufacturer') && preg_match('#^/manufacturer/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manufacturer_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::deleteAction',)), array('_route' => 'manufacturer_delete'));
        }
        not_manufacturer_delete:

        // model
        if (rtrim($pathinfo, '/') === '/model') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'model');
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::indexAction',  '_route' => 'model',);
        }

        // model_show
        if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::showAction',)), array('_route' => 'model_show'));
        }

        // model_new
        if ($pathinfo === '/model/new') {
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::newAction',  '_route' => 'model_new',);
        }

        // model_create
        if ($pathinfo === '/model/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_model_create;
            }
            return array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::createAction',  '_route' => 'model_create',);
        }
        not_model_create:

        // model_edit
        if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::editAction',)), array('_route' => 'model_edit'));
        }

        // model_update
        if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_model_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::updateAction',)), array('_route' => 'model_update'));
        }
        not_model_update:

        // model_delete
        if (0 === strpos($pathinfo, '/model') && preg_match('#^/model/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_model_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::deleteAction',)), array('_route' => 'model_delete'));
        }
        not_model_delete:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            // sonata_admin_retrieve_form_element
            if ($pathinfo === '/admin/core/get-form-field-element') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
            }

            // sonata_admin_append_form_element
            if ($pathinfo === '/admin/core/append-form-field-element') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
            }

            // sonata_admin_short_object_information
            if ($pathinfo === '/admin/core/get-short-object-description') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
            }

            // admin_bundle_carrental_renting_list
            if ($pathinfo === '/admin/bundle/carrental/renting/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_list',  '_route' => 'admin_bundle_carrental_renting_list',);
            }

            // admin_bundle_carrental_renting_create
            if ($pathinfo === '/admin/bundle/carrental/renting/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_create',  '_route' => 'admin_bundle_carrental_renting_create',);
            }

            // admin_bundle_carrental_renting_batch
            if ($pathinfo === '/admin/bundle/carrental/renting/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_batch',  '_route' => 'admin_bundle_carrental_renting_batch',);
            }

            // admin_bundle_carrental_renting_edit
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/renting') && preg_match('#^/admin/bundle/carrental/renting/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_edit',)), array('_route' => 'admin_bundle_carrental_renting_edit'));
            }

            // admin_bundle_carrental_renting_delete
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/renting') && preg_match('#^/admin/bundle/carrental/renting/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_delete',)), array('_route' => 'admin_bundle_carrental_renting_delete'));
            }

            // admin_bundle_carrental_renting_show
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/renting') && preg_match('#^/admin/bundle/carrental/renting/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_show',)), array('_route' => 'admin_bundle_carrental_renting_show'));
            }

            // admin_bundle_carrental_payment_list
            if ($pathinfo === '/admin/bundle/carrental/payment/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.paymeny',  '_sonata_name' => 'admin_bundle_carrental_payment_list',  '_route' => 'admin_bundle_carrental_payment_list',);
            }

            // admin_bundle_carrental_payment_create
            if ($pathinfo === '/admin/bundle/carrental/payment/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.paymeny',  '_sonata_name' => 'admin_bundle_carrental_payment_create',  '_route' => 'admin_bundle_carrental_payment_create',);
            }

            // admin_bundle_carrental_payment_batch
            if ($pathinfo === '/admin/bundle/carrental/payment/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.paymeny',  '_sonata_name' => 'admin_bundle_carrental_payment_batch',  '_route' => 'admin_bundle_carrental_payment_batch',);
            }

            // admin_bundle_carrental_payment_edit
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/payment') && preg_match('#^/admin/bundle/carrental/payment/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.paymeny',  '_sonata_name' => 'admin_bundle_carrental_payment_edit',)), array('_route' => 'admin_bundle_carrental_payment_edit'));
            }

            // admin_bundle_carrental_payment_delete
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/payment') && preg_match('#^/admin/bundle/carrental/payment/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.paymeny',  '_sonata_name' => 'admin_bundle_carrental_payment_delete',)), array('_route' => 'admin_bundle_carrental_payment_delete'));
            }

            // admin_bundle_carrental_payment_show
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/payment') && preg_match('#^/admin/bundle/carrental/payment/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.paymeny',  '_sonata_name' => 'admin_bundle_carrental_payment_show',)), array('_route' => 'admin_bundle_carrental_payment_show'));
            }

            // admin_bundle_carrental_vehicle_list
            if ($pathinfo === '/admin/bundle/carrental/vehicle/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_list',  '_route' => 'admin_bundle_carrental_vehicle_list',);
            }

            // admin_bundle_carrental_vehicle_create
            if ($pathinfo === '/admin/bundle/carrental/vehicle/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_create',  '_route' => 'admin_bundle_carrental_vehicle_create',);
            }

            // admin_bundle_carrental_vehicle_batch
            if ($pathinfo === '/admin/bundle/carrental/vehicle/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_batch',  '_route' => 'admin_bundle_carrental_vehicle_batch',);
            }

            // admin_bundle_carrental_vehicle_edit
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/vehicle') && preg_match('#^/admin/bundle/carrental/vehicle/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_edit',)), array('_route' => 'admin_bundle_carrental_vehicle_edit'));
            }

            // admin_bundle_carrental_vehicle_delete
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/vehicle') && preg_match('#^/admin/bundle/carrental/vehicle/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_delete',)), array('_route' => 'admin_bundle_carrental_vehicle_delete'));
            }

            // admin_bundle_carrental_vehicle_show
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/vehicle') && preg_match('#^/admin/bundle/carrental/vehicle/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_show',)), array('_route' => 'admin_bundle_carrental_vehicle_show'));
            }

            // admin_bundle_carrental_manufacturer_list
            if ($pathinfo === '/admin/bundle/carrental/manufacturer/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_list',  '_route' => 'admin_bundle_carrental_manufacturer_list',);
            }

            // admin_bundle_carrental_manufacturer_create
            if ($pathinfo === '/admin/bundle/carrental/manufacturer/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_create',  '_route' => 'admin_bundle_carrental_manufacturer_create',);
            }

            // admin_bundle_carrental_manufacturer_batch
            if ($pathinfo === '/admin/bundle/carrental/manufacturer/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_batch',  '_route' => 'admin_bundle_carrental_manufacturer_batch',);
            }

            // admin_bundle_carrental_manufacturer_edit
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/manufacturer') && preg_match('#^/admin/bundle/carrental/manufacturer/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_edit',)), array('_route' => 'admin_bundle_carrental_manufacturer_edit'));
            }

            // admin_bundle_carrental_manufacturer_delete
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/manufacturer') && preg_match('#^/admin/bundle/carrental/manufacturer/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_delete',)), array('_route' => 'admin_bundle_carrental_manufacturer_delete'));
            }

            // admin_bundle_carrental_manufacturer_show
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/manufacturer') && preg_match('#^/admin/bundle/carrental/manufacturer/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_show',)), array('_route' => 'admin_bundle_carrental_manufacturer_show'));
            }

            // admin_bundle_carrental_model_list
            if ($pathinfo === '/admin/bundle/carrental/model/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_list',  '_route' => 'admin_bundle_carrental_model_list',);
            }

            // admin_bundle_carrental_model_create
            if ($pathinfo === '/admin/bundle/carrental/model/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_create',  '_route' => 'admin_bundle_carrental_model_create',);
            }

            // admin_bundle_carrental_model_batch
            if ($pathinfo === '/admin/bundle/carrental/model/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_batch',  '_route' => 'admin_bundle_carrental_model_batch',);
            }

            // admin_bundle_carrental_model_edit
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/model') && preg_match('#^/admin/bundle/carrental/model/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_edit',)), array('_route' => 'admin_bundle_carrental_model_edit'));
            }

            // admin_bundle_carrental_model_delete
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/model') && preg_match('#^/admin/bundle/carrental/model/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_delete',)), array('_route' => 'admin_bundle_carrental_model_delete'));
            }

            // admin_bundle_carrental_model_show
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/model') && preg_match('#^/admin/bundle/carrental/model/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_show',)), array('_route' => 'admin_bundle_carrental_model_show'));
            }

            // admin_bundle_carrental_fuel_list
            if ($pathinfo === '/admin/bundle/carrental/fuel/list') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_list',  '_route' => 'admin_bundle_carrental_fuel_list',);
            }

            // admin_bundle_carrental_fuel_create
            if ($pathinfo === '/admin/bundle/carrental/fuel/create') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_create',  '_route' => 'admin_bundle_carrental_fuel_create',);
            }

            // admin_bundle_carrental_fuel_batch
            if ($pathinfo === '/admin/bundle/carrental/fuel/batch') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_batch',  '_route' => 'admin_bundle_carrental_fuel_batch',);
            }

            // admin_bundle_carrental_fuel_edit
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/fuel') && preg_match('#^/admin/bundle/carrental/fuel/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_edit',)), array('_route' => 'admin_bundle_carrental_fuel_edit'));
            }

            // admin_bundle_carrental_fuel_delete
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/fuel') && preg_match('#^/admin/bundle/carrental/fuel/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_delete',)), array('_route' => 'admin_bundle_carrental_fuel_delete'));
            }

            // admin_bundle_carrental_fuel_show
            if (0 === strpos($pathinfo, '/admin/bundle/carrental/fuel') && preg_match('#^/admin/bundle/carrental/fuel/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_show',)), array('_route' => 'admin_bundle_carrental_fuel_show'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}