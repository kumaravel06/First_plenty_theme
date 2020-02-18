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
 
	}
	public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
        {
	  $this->getLoggr(__METHOD__)->error('test', 'enter');
	  $partial->set('footer', 'BrandcrockSampleTheme::content.BrandcrockSampleThemeFooter');
		 $this->getLoggr(__METHOD__)->error('No test', 'No enter');
          $partial->set('header', 'BrandcrockSampleTheme::PageDesign.Partials.Header.Header');
	  
	  
        },0);
	return false;
    }
}
