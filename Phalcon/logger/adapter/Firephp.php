<?php

namespace Phalcon\Logger\Adapter;

/**
 * Phalcon\Logger\Adapter\Firephp
 * Sends logs to FirePHP
 * <code>
 * use Phalcon\Logger\Adapter\Firephp;
 * use Phalcon\Logger;
 * $logger = new Firephp("");
 * $logger->log(Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 * </code>
 */
class Firephp extends \Phalcon\Logger\Adapter implements \Phalcon\Logger\AdapterInterface
{

    static private $_initialized;


    static private $_index;


    /**
     * Returns the internal formatter
     *
     * @return \Phalcon\Logger\FormatterInterface 
     */
    public function getFormatter() {}

    /**
     * Writes the log to the stream itself
     *
     * @link http://www.firephp.org/Wiki/Reference/Protocol
     * @param string $message 
     * @param int $type 
     * @param int $time 
     * @param array $context 
     */
    public function logInternal($message, $type, $time, array $context) {}

    /**
     * Closes the logger
     *
     * @return bool 
     */
    public function close() {}

}
