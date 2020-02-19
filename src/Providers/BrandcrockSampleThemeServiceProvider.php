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
 
class BrandcrockSampleThemeServiceProvider extends TemplateServiceProvider
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
		$this->overrideTemplate("Ceres::PageDesign.Partials.Footer","BrandcrockSampleTheme::content.BrandcrockSampleThemeFooter");
		$this->overrideTemplate("Ceres::PageDesign.Partials.Header","BrandcrockSampleTheme::PageDesign.Partials.Header");
        }
	
	
}
