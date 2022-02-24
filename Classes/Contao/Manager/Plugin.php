<?php declare(strict_types = 1);
/**
 * GENERATED WITH e@sySolutionsIT NlcNsRewrite
 * @package     Inserttags
 * @version     1.0.0
 * @since       24.02.2022 - 17:24
 * @license     EULA
 */
namespace Nlc\Inserttags\Classes\Contao\Manager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Nlc\Compatibilitylayer\NlcCompatibilitylayerBundle;
use Nlc\Inserttags\NlcInserttagsBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Class Plugin
 * @package Nlc\Inserttags\Classes\Contao\Manager
 */
class Plugin implements BundlePluginInterface/*, ConfigPluginInterface, RoutingPluginInterface*/
{
    protected $configPath = '@NlcInserttagsBundle/Resources/config';


    /**
     * @param  ParserInterface $parser
     * @return array
     */
    public function getBundles(ParserInterface $parser): array
    {
        $loadAfter = [ContaoCoreBundle::class, NlcCompatibilitylayerBundle::class];
        return [BundleConfig::create(NlcInserttagsBundle::class)->setLoadAfter($loadAfter)];
    }


    /**
     * @param  LoaderInterface $loader
     * @param  array           $config
     * @throws \Exception
     *
    public function registerContainerConfiguration(LoaderInterface $loader, array $config): void
    {
        $loader->load($this->configPath . "/controller.yml");
        $loader->load($this->configPath . "/listener.yml");
        $loader->load($this->configPath . "/services.yml");
    }/**/


    /**
     * @param  LoaderResolverInterface $resolver
     * @param  KernelInterface         $kernel
     * @return mixed
     * @throws \Exception
     *
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        #$file = $this->configPath . "/routing.yml";

        #return $resolver->resolve($file)->load($file);
    }/**/
}
