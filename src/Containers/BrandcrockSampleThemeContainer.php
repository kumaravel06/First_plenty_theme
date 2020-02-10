<?php
 
namespace BrandcrockSampleTheme\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class BrandcrockSampleThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('BrandcrockSampleTheme::content.Theme');
    }
}
