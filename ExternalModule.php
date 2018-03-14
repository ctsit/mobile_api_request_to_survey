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

            global $user_firstname, $user_lastname, $user_email, $Proj;

            // Getting system settings
            $url = $this->getSystemSetting('mobile-api-request-to-survey-url');
            $text = $this->getSystemSetting('mobile-api-request-to-survey-text');
            $length = sizeof($this->getSystemSetting('mobile-api-request-to-survey-parameters'));
            $parameter_names = $this->getSystemSetting('mobile-api-request-to-survey-names');
            $parameter_values = $this->getSystemSetting('mobile-api-request-to-survey-values');

            $settings = [
                    "user_firstname"=> $user_firstname,
                    "user_lastname" => $user_lastname,
                    "user_email" => $user_email,
                    "project_id" => $project_id,
                    "USERID" => USERID,
            ];

            for($i = 0; $i < $length; $i++){
                if ($parameter_names[$i] and $parameter_values[$i]){
                    $url .= '&' . filter_var($parameter_names[$i],FILTER_SANITIZE_URL) . 
                    '=' . $settings[$parameter_values[$i]];
                }
            }

            if($url){
                // Creating url and text as js variables
                $this->sendVarToJS('mobileApiRequestToSurveyURL', $url);
                $this->sendVarToJS('mobileApiRequestToSurveyText', $text);
                // Include js
                $this->includeJs('js/addTextAndURL.js');
            }
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
