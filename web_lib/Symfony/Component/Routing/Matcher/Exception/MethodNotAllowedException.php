<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Matcher\Exception;

/**
 * The resource was found but the request method is not allowed.
 *
 * This exception should trigger an HTTP 405 response in your application code.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class MethodNotAllowedException extends \RuntimeException implements Exception
{
    protected $allowedMethods;

    public function __construct(array $allowedMethods, $message = null, $code = 0, \Exception $previous = null)
    {
        $this->allowedMethods = $allowedMethods;

        parent::__construct($message, $code, $previous);
    }

    public function getAllowedMethods()
    {
        return $this->allowedMethods;
    }
}
