<?php namespace Websemantics\EntityBuilderExtension\Parser;

use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;

/**
 * Class EntityLabelParser
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan Sagar <msagar@websemantics.ca>
 * @copyright 2012-2015 Web Semantics, Inc.
 * @package   Websemantics\EntityBuilderExtension
 */

class EntityLabelParser
{

    /**
     * Return the module name.
     *
     * @param  Module $module
     * @return string
     */
    public function parse(StreamInterface $stream)
    {
        return ucwords(str_replace('_',' ', $stream->getSlug()));
    }

}


