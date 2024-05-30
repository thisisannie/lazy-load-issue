<?php

namespace {

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

    use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [
            'Thumbnail' => Image::class,
        ];

        /**
         * @var array
         */
        private static array $owns = [
            'Thumbnail',
        ];

        /**
         * {@inheritDoc}
         */
        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            
            $fields->addFieldsToTab(
                'Root.Main',
                [
                    UploadField::create('Thumbnail'),
                ]
            );
    
            return $fields;
        }
        
    }
}
