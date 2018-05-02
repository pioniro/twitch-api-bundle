<?php
namespace Pioniro\TwitchApiBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('twitch_api');
        $rootNode
            ->children()
                ->arrayNode('client')
                    ->children()
                        ->scalarNode('id')
                            ->defaultNull()
                            ->info('Set Twitch client id')
                        ->end()
                        ->scalarNode('secret')
                            ->defaultNull()
                            ->info('Set Twitch client secret')
                        ->end()
                        ->scalarNode('redirect_uri')
                            ->defaultNull()
                            ->info('Set Redirect uri')
                        ->end()
                        ->scalarNode('api_version')
                            ->defaultNull()
                            ->info('Set API version')
                        ->end()
                        ->scalarNode('scope')
                            ->defaultNull()
                            ->info('Set scope')
                        ->end()
                    ->end()
                ->end()
            ->end();
        return $treeBuilder;
    }
}