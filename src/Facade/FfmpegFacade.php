<?php namespace Linkthrow\Ffmpeg;

use Illuminate\Support\Facades\Facade;

class FfmpegFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ffmpeg';
    }
}
