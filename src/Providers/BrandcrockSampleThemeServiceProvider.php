<?php
 
namespace BrandcrockSampleTheme\Providers;
 
use Plenty\Plugin\ServiceProvider;
use IO\Extensions\Functions\Partial;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
 
class BrandcrockSampleThemeServiceProvider extends ServiceProvider
{
 
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
          $partial->set('header', 'BrandcrockSampleTheme::PageDesign.Partials.Header.Header');
	  
	  
        },0);
	return false;
    }
}
