<?php

namespace ContainerWjwoEsW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DoMSJk9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DoMSJk9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DoMSJk9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\TaskController::delete' => ['privates', '.service_locator.TfvLzuL', 'get_ServiceLocator_TfvLzuLService', true],
            'App\\Controller\\TaskController::edit' => ['privates', '.service_locator.TfvLzuL', 'get_ServiceLocator_TfvLzuLService', true],
            'App\\Controller\\UserController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController::register' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\TaskController:delete' => ['privates', '.service_locator.TfvLzuL', 'get_ServiceLocator_TfvLzuLService', true],
            'App\\Controller\\TaskController:edit' => ['privates', '.service_locator.TfvLzuL', 'get_ServiceLocator_TfvLzuLService', true],
            'App\\Controller\\UserController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController:register' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\TaskController::delete' => '?',
            'App\\Controller\\TaskController::edit' => '?',
            'App\\Controller\\UserController::login' => '?',
            'App\\Controller\\UserController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\TaskController:delete' => '?',
            'App\\Controller\\TaskController:edit' => '?',
            'App\\Controller\\UserController:login' => '?',
            'App\\Controller\\UserController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
