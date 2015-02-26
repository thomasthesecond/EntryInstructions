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
        // Reformat the input name into something that looks more like an ID
        $id = craft()->templates->formatInputId($name);

        // Figure out what that ID is going to look like once it has been namespaced
        $namespacedId = craft()->templates->namespaceInputId($id);

        return craft()->templates->render('entryinstructions/_instructions/layout', array(
            'name'  => $name,
            'id'    => $id,
            'value' => $value
        ));
    }
}
