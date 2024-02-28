<?php

namespace App\Page;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\NumericField;
use SilverStripe\UserForms\Model\UserDefinedForm;

class SessionPage extends UserDefinedForm
{
    private static $controller_name =  SessionPageController::class;

    private static $db = [
        'MaxAttendees' => 'Int',
        'FullSessionMessage' => 'HTMLText',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab(
            'Root.Main',
            NumericField::create('MaxAttendees', 'Max attendees'),
            'Content'
        );
        $fields->addFieldToTab(
            'Root.Main',
            HTMLEditorField::create('FullSessionMessage', 'Full session message')
                ->addExtraClass('stacked'),
            'Metadata'
        );
        return $fields;
    }

    public function getAttendeeCount(): int
    {
        return  max(0, $this->MaxAttendees - $this->Submissions()->count());
    }
}
