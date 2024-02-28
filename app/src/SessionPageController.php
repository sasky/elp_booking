<?php

namespace App\Page;

use SilverStripe\Control\HTTPRequest;
use SilverStripe\UserForms\Control\UserDefinedFormController;

class SessionPageController extends UserDefinedFormController
{
    // protected function init()
    // {

    //     die('HELLO FROM SESSION PAGE');
    // }
    // public function index(HTTPRequest $request = null)
    // {

    //     die('HELLO FROM SESSION PAGE');
    // }
    /**
     * Process the form that is submitted through the site
     *
     * {@see UserForm::validate()} for validation step prior to processing
     *
     * @param array $data
     * @param Form $form
     *
     * @return HTTPResponse
     */
    public function process($data, $form)
    {
        return parent::process($data, $form);
    }
}
