<?php

use SilverStripe\Control\Director;

if (!Director::isDev()) {
    // Director::forceSSL();
    Director::config()->set('alternate_base_url', 'https://elp-bookings-c35eo.ondigitalocean.app');
}