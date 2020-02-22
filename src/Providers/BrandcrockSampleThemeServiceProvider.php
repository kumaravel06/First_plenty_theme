<?php
 
namespace BrandcrockSampleTheme\Providers;
 
use Plenty\Plugin\ServiceProvider;
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Log\Loggable;
use Plenty\Plugin\ConfigRepository;
use IO\Helper\TemplateContainer;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use use IO\Helper\TemplateContainer;
 
class BrandcrockSampleThemeServiceProvider extends ServiceProvider
{
 use Loggable;
	
	/**
	 * Register the service provider.
	 */
	public function register()
	{
         	$eventDispatcher->listen('IO.tpl.basket', function(TemplateContainer $container, $templateData)
		{
		    $container->setTemplate('BrandcrockSampleTheme::content.BrandcrockSampleThemeHeader');
		    return false;
		}, 0);
	}
	
	
}
