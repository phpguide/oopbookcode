<?php

/**
 * This example of autoloader translates a requested class name
 * into a file path according to PSR-0 standard and includes it.
 */


spl_autoload_register(function ($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    
    // If the class name contains at least one backslash
    // then it is part of a namespace. The part after the last backslash is the class name
    // and everything before the last backslash is the namespace
    
    if ($lastNsPos = strrpos($className, '\\')) 
    {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        
        // relpcace namespace separation into directory separation
        // ie \Bla\X\Y\Z becomes Bla/X/Y/Z directory
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    
    // Underscores in class name also translated into a new directory and '.php' is appended to it
    // Zend_Acl_Exception becomes Zend/Acl/Exception.php
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    // finally the class is included from the place it's supposed to be at
    require $fileName;
});