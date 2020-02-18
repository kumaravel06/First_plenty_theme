<?php
 
namespace BrandcrockSampleTheme\Providers;
 
use Plenty\Plugin\ServiceProvider;
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Log\Loggable;
use Plenty\Plugin\ConfigRepository;
 
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
		
	
        $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
        {
	
                $partial->set('footer', 'BrandcrockSampleTheme::content.BrandcrockSampleThemeFooter');
		 $this->getLogger(__METHOD__)->error('says', 'enter');
 
        },0);
	return false;
    }
}
