<?php
 
namespace BrandcrockSampleTheme\Providers;
 
use Plenty\Plugin\ServiceProvider;
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Log\Loggable;
 
class BrandcrockSampleThemeServiceProvider extends ServiceProvider
{
 use Loggable;
	
	/**
	 * Register the service provider.
	 */
	public function register()
	{
         $this->getLogger(__METHOD__)->error('PPPPPPPP', 'NNNNNNN');
	}
	
	public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
        {
	  $partial->set('footer', 'BrandcrockSampleTheme::content.BrandcrockSampleThemeFooter');
		 $this->getLogger(__METHOD__)->error('Calling', 'RRRRRRRR');
        },0);
	return false;
    }
}
