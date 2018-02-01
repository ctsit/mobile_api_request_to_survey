<?php
/**
 * @file
 * Provides ExternalModule class for Mobile Api Request to Survey.
 */

namespace MobileApiRequestToSurvey\ExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;
use Form;

/**
 * ExternalModule class for Mobile Api Request to Survey.
 */
class ExternalModule extends AbstractExternalModule {
    /**
     * @inheritdoc
     */
    function redcap_every_page_top($project_id) {
        if (PAGE == 'MobileApp/index.php' && $project_id) {

            // Getting system settings
            $url = $this->getSystemSetting('mobile-api-request-to-survey-url');
            $text = $this->getSystemSetting('mobile-api-request-to-survey-text');
            
            // Creating url and text as js variables
            $this->sendVarToJS('mobileApiRequestToSurveyURL', $url);
        	$this->sendVarToJS('mobileApiRequestToSurveyText', $text);

            // Including js file
            $this->includeJs('js/addTextAndURL.js');
        }
    }


    /**
     * Includes a local JS file.
     *
     * @param string $path
     *   The relative path to the js file.
     */
    protected function includeJs($path) {
        echo '<script src="' . $this->getUrl($path) . '"></script>';
    }


    /**
     * Sends a PHP variable over to JS.
     *
     * @param string $name
     *   Variable name
     * @param var $value
     *   Variable value
     */
    protected function sendVarToJS($name, $value) {
        echo '<script>var '. $name .' = ' . json_encode($value) . ';</script>';
    }
}
