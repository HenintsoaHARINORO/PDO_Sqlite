<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'monolog.logger.markdown' shared service.

$this->services['monolog.logger.markdown'] = $instance = new \Symfony\Bridge\Monolog\Logger('markdown');

$instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
$instance->pushHandler(($this->privates['monolog.handler.markdown_logging'] ?? $this->load('getMonolog_Handler_MarkdownLoggingService.php')));
$instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

return $instance;