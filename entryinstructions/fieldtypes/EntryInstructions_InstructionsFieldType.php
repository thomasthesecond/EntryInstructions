<?php
namespace Craft;

class EntryInstructions_InstructionsFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('Instructions');
    }

    public function getInputHtml($name, $value)
    {
        return craft()->templates->render('entryinstructions/_instructions/layout');
        // return craft()->templates->render('entryinstructions/_instructions/layout', array(
        //     'name'  => $name,
        //     'value' => $value
        // ));
    }
}
