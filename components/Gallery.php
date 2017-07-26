<?php namespace Inerba\MiniGallery\Components;

use Cms\Classes\ComponentBase;
use Inerba\MiniGallery\Models\Gallery as GalleryModel;

class Gallery extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Gallery',
            'description' => 'Mostra una galleria di immagini'
        ];
    }

    public function defineProperties()
    {
        return [
            'galleryItem' => [
                'title'       => 'Gallery',
                'description' => 'Seleziona la gallery da mostrare',
                'type'        => 'dropdown',
                'default'     => '',
            ],
            'thumbWidth' => [
                'title'             => 'Thumb width px',
                'type'              => 'string',
                'default'           => '100',
                'group'             => 'Thumbnails',
            ],
            'thumbHeight' => [
                'title'             => 'Thumb height px',
                'type'              => 'string',
                'default'           => '100',
                'group'             => 'Thumbnails',
            ],
            'thumbMode' => [
                'title'             => 'Thumb crop',
                'type'              => 'string',
                'default'           => 'crop',
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
