<?php namespace Inerba\MiniGallery;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
            'Inerba\MiniGallery\Components\Gallery' => 'Gallery',
        ];
    }

    /**
     * Register snippets with the RainLab.Pages plugin.
     *
     * @return array
     * @see https://octobercms.com/plugin/rainlab-pages
     */
    public function registerPageSnippets()
    {
        return [
            'Inerba\MiniGallery\Components\Gallery' => 'Gallery',
        ];
    }

    public function registerSettings()
    {
    }
}
