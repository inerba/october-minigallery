<?php namespace Inerba\MiniGallery\Components;

use Cms\Classes\ComponentBase;
use Inerba\MiniGallery\Models\Gallery as GalleryModel;

class Gallery extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'inerba.minigallery::lang.component.name',
            'description' => 'inerba.minigallery::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'galleryItem' => [
                'title'       => 'inerba.minigallery::lang.component.properties.gallery_item.name',
                'description' => 'inerba.minigallery::lang.component.properties.gallery_item.description',
                'type'        => 'dropdown',
                'default'     => '',
            ],
            'thumbWidth' => [
                'title'             => 'inerba.minigallery::lang.component.properties.thumb_width.name',
                'type'              => 'string',
                'default'           => '100',
                'group'             => 'Thumbnails',
            ],
            'thumbHeight' => [
                'title'             => 'inerba.minigallery::lang.component.properties.thumb_height.name',
                'type'              => 'string',
                'default'           => '100',
                'group'             => 'Thumbnails',
            ],
            'thumbMode' => [
                'title'             => 'inerba.minigallery::lang.component.properties.thumb_mode.name',
                'description'       => 'inerba.minigallery::lang.component.properties.thumb_mode.description',
                'type'              => 'dropdown',
                'default'           => 'crop',
                'options'           => [
                                            'auto'=>'Automatico', 
                                            'exact'=>'Dimensioni esatte', 
                                            'crop'=>'Ritaglia', 
                                            'portrait'=>'Verticale', 
                                            'landscape'=>'orizzontale'
                                        ],
                'group'             => 'Thumbnails',
            ],
        ];
    }

    public function getGalleryItemOptions()
    {
        return GalleryModel::orderBy('created_at','desc')->lists('name', 'id');
    }

    public function onRun()
    {
        $id = $this->property('galleryItem');

        $thumbs = [
            'w' => $this->property('thumbWidth'),
            'h' => $this->property('thumbHeight'),
            'mode' => $this->property('thumbMode')
        ];

        $gallery = GalleryModel::Find($id);

        $this->gallery = $this->page['gallery'] = $gallery;
        $this->thumbs = $this->page['thumbs'] = $thumbs;
    }

}
