<?php
 
namespace BrandcrockSampleTheme\Providers;
 
use Plenty\Plugin\ServiceProvider;
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Log\Loggable;
use Plenty\Plugin\ConfigRepository;
use IO\Helper\TemplateContainer;
 
class BrandcrockSampleThemeServiceProvider extends ServiceProvider
{
 use Loggable;
	
	/**
	 * Register the service provider.
	 */
	public function register()
	{
         
	}
	
	public function boot(Twig $twig, Dispatcher $eventDispatcher)
    	{
		
	
       $eventDispatcher->listen('IO.tpl.basket', function(TemplateContainer $container, $templateData)
        {
	
		$container->setTemplate('BrandcrockSampleTheme::content.BrandcrockSampleThemeFooter');
                
		 $this->getLogger(__METHOD__)->error('says', 'enter');
 
        },0);
	return false;
    }
}
