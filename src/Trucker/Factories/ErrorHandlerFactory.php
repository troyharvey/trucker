<?php

/**
 * This file is part of Trucker
 *
 * (c) Brian Webb <bwebb@indatus.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Trucker\Factories;

use Illuminate\Container\Container;
use Trucker\Framework\FactoryDriver;
use Trucker\Facades\Config;

class ErrorHandlerFactory extends FactoryDriver
{
    /**
     * Function to return a string representaion of the namespace 
     * that all classes built by the factory should be contained within
     * 
     * @return string - namespace string
     */
    public function getDriverNamespace()
    {
        return "\Trucker\Responses\ErrorHandlers";
    }


    /**
     * Function to return the interface that the driver's produced
     * by the factory must implement
     * 
     * @return string
     */
    public function getDriverInterface()
    {
        return "\Trucker\Responses\ErrorHandlers\ErrorHandlerInterface";
    }


    /**
     * Function to return a string that should be suffixed
     * to the studly-cased driver name of all the drivers
     * that the factory can return 
     * 
     * @return string
     */
    public function getDriverNameSuffix()
    {
        return "ErrorHandler";
    }


    /**
     * Function to return a string that should be prefixed
     * to the studly-cased driver name of all the drivers
     * that the factory can return
     * 
     * @return string
     */
    public function getDriverNamePrefix()
    {
        return "";
    }

    /**
     * Function to return an array of arguments that should be
     * passed to the constructor of a new driver instance
     * 
     * @return array
     */
    public function getDriverArgumentsArray()
    {
        return [$this->app];
    }

    /**
     * Function to return the string representation of the driver 
     * itslef based on a value fetched from the config file.  This
     * function will itself access the config, and return the driver
     * setting
     * 
     * @return string
     */
    public function getDriverConfigValue()
    {
        return Config::get('error_handler.driver');
    }
}
