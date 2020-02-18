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
	
	public function boot(Twig $twig, Dispatcher $eventDispatcher, ConfigRepository $config)
    	{
		
	$enabledOverrides = explode(", ", $config->get("BrandcrockSampleTheme.templates.override"));
        $eventDispatcher->listen('IO.init.templates', function(Partial $partial)
        {
	  $partial->set('footer', 'Ceres::PageDesign.Partials.Footer');
	  if (in_array("footer", $enabledOverrides) || in_array("all", $enabledOverrides))
            {
                $partial->set('footer', 'BrandcrockSampleTheme::PageDesign.Partials.Footer');
		 $this->getLogger(__METHOD__)->error('IFF', $config->get("BrandcrockSampleTheme.templates.override"));
            }
        },0);
	return false;
    }
}
