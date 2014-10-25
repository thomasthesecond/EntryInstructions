<?php
namespace Craft;

class EntryInstructions_InstructionsFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('Instructions');
    }

    public function getInputHtml()
    {
        return craft()->templates->render('entryinstructions/_instructions/layout');
    }
}
