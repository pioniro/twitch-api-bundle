<?php
namespace Pioniro\TwitchApiBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;

class TwitchApiExtension extends \Symfony\Component\HttpKernel\DependencyInjection\Extension
{

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');
        $clientConfig = $config['client'];
        $container->setParameter('twitch_api.client.id', $clientConfig['id']);
        $container->setParameter('twitch_api.client.secret', $clientConfig['secret']);
        $container->setParameter('twitch_api.client.redirect_uri', $clientConfig['redirect_uri']);
        $container->setParameter('twitch_api.client.api_version', $clientConfig['api_version']);
        $container->setParameter('twitch_api.client.scope', $clientConfig['scope']);
    }
}