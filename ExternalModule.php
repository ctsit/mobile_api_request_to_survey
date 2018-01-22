<?php
/**
 * @file
 * Provides ExternalModule class for Route Mobile Api Token Requests to Survey.
 */

namespace RouteMobileApiTokenRequestsToSurvey\ExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;
use Form;

/**
 * ExternalModule class for Route Mobile Api Token Requests to Survey.
 */
class ExternalModule extends AbstractExternalModule {

    /**
     * @inheritdoc
     */
    function redcap_every_page_top($project_id) {
    }
}
