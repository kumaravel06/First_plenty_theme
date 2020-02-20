<?php
 
namespace BrandcrockSampleTheme\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class BrandcrockSampleContainerFooter
{
    public function call(Twig $twig):string
    {
        return $twig->render('BrandcrockSampleTheme::content.Footer');
    }
}
