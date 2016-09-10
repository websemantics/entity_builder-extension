<?php namespace Websemantics\BuilderExtension\Console;

//   - Support for interactive user experience

/**
 * Class List.
 *
 * Create a Builder template.
 *
 * @link      http://websemantics.ca/ibuild
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, Phd. <adnan@websemantics.ca>
 * @copyright 2012-2016 Web Semantics, Inc.
 */

class MakeTemplates extends Registry
{
  /**
   * The console command signature.
   *
   * @var string
   */

  protected $signature = 'builder:make {template : template name}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Create an addon from a Builder template';

  /**
   * download and make an addon from a Builder template.
   */
  public function handle()
  {
    $this->logo();

    if($this->download($this->argument('template'))){
      $this->info('yayyyy');
    }
  }
}