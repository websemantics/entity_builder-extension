<?php namespace {{vendor|studly_case}}\{{module_slug|studly_case}}Module\{% if config.group == true %}{{namespace|studly_case}}\{% endif %}{{entity_name}}\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class {{entity_name}}FormBuilder
 *
{{config.docblock}}
 * @package   {{vendor|studly_case}}\{{module_slug|studly_case}}Module\{% if config.group == true %}{{namespace|studly_case}}\{% endif %}{{entity_name}}\Form
 */

class {{entity_name}}FormBuilder extends FormBuilder
{

    /**
     * Fields to skip.
     *
     * @var array
     */
    protected $skips = [];

    /**
     * The form actions.
     *
     * @var array
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [];
}
