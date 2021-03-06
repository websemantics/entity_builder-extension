<?php namespace {{vendor|studly_case}}\{{module_slug|studly_case}}Module\{% if config.group == true %}{{namespace|studly_case}}\{% endif %}{{entity_name}}\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class {{entity_name}}TableBuilder
 *
{{config.docblock}}
 * @package   {{vendor|studly_case}}\{{module_slug|studly_case}}Module\{% if config.group == true %}{{namespace|studly_case}}\{% endif %}{{entity_name}}\Table
 */

class {{entity_name}}TableBuilder extends TableBuilder
{

  /**
   * The table views.
   *
  * @var array
   */
  protected $views = [];

  /**
   * The table filters.
   *
  * @var array
   */
  protected $filters = [];

  /**
   * The table columns.
   *
  * @var array
   */
  protected $columns = [];

  /**
   * The table buttons.
   *
  * @var array
   */
  protected $buttons = [
      'edit'
  ];

  /**
   * The table actions.
   *
  * @var array
   */
  protected $actions = [
      'delete'
  ];

  /**
   * The table options.
   *
   * @var array
   */
  protected $options = [];

  /**
   * The table assets.
   *
   * @var array
   */
  protected $assets = [];

}
