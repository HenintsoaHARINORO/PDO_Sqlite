<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\MarkdownHelper' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/MarkdownHelper.php';

return $this->privates['App\\Service\\MarkdownHelper'] = new \App\Service\MarkdownHelper(($this->services['cache.app'] ?? $this->getCache_AppService()), ($this->services['markdown.parser'] ?? ($this->services['markdown.parser'] = new \Knp\Bundle\MarkdownBundle\Parser\Preset\Light())), ($this->services['monolog.logger.markdown'] ?? $this->load('getMonolog_Logger_MarkdownService.php')), true);
