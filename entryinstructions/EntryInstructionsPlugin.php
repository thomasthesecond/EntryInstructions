<?php
namespace Craft;

class EntryInstructionsPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Entry Instructions');
    }

    function getVersion()
    {
        return '1.1.0';
    }

    function getDeveloper()
    {
        return 'Thomas Cunningham';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/thomasthesecond/EntryInstructions';
    }
}
