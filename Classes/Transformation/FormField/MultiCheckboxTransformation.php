<?php
declare(strict_types = 1);
namespace Bitmotion\Mautic\Transformation\FormField;

use Bitmotion\Mautic\Transformation\FormField\Prototype\ListTransformationPrototype;

/**
 * {
 *   "id": 212,
 *   "label": "Checkboxgruppe",
 *   "showLabel": true,
 *   "alias": "checkboxgruppe",
 *   "type": "checkboxgrp",
 *   "defaultValue": null,
 *   "isRequired": false,
 *   "validationMessage": null,
 *   "helpMessage": null,
 *   "order": 5,
 *   "properties": {
 *     "syncList": 0,
 *     "optionlist": {
 *       "list": [
 *         {
 *           "label": "label",
 *           "value": 1
 *         }
 *       ]
 *     },
 *     "labelAttributes": null
 *   },
 *   "labelAttributes": null,
 *   "inputAttributes": null,
 *   "containerAttributes": null,
 *   "leadField": null,
 *   "saveResult": true,
 *   "isAutoFill": false
 * }
 */
class MultiCheckboxTransformation extends ListTransformationPrototype
{
    /**
     * @var string
     */
    protected $type = 'checkboxgrp';

    /**
     * @var string
     */
    protected $listIdentifier = 'optionlist';

    /**
     * @var int
     */
    protected $multiple = 0;

    /**
     * @var bool
     */
    protected $updateCustomFieldsProperties = true;
}