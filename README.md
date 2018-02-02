# REDCap module: Mobile Api Request to Survey

A REDCap module to route mobile api token requests in the **REDCap Mobile App** page to a survey. It also provides the option of adding descriptive text to the same page.

## Prerequisites
- REDCap >= 8.0.0 (for versions < 8.0.0, [REDCap Modules](https://github.com/vanderbilt/redcap-external-modules) is required).

## Installation
- Clone this repo into `<redcap-root>/modules/mobile_api_request_to_survey_v<version_number>`.
- Go to **Control Center > External Modules** and enable Mobile Api Request to Survey.
- Still in **Control Center > External Modules** configure the module with a URL and optionally, a descriptive text. You may also include parameter name-value pairs to be appended to the URL. Lastly, activate this module for all projects.


## How to use
This module requires a URL to be provided as part of the system settings. The following values may be selected to be appended to the URL: 
	
    user_firstname
    user_lastname
    email
    project_id
    username
    
To use the appended parameters, make sure the parameter names you chose coincide with the names of the fields in the target REDCap survey.

In addition, you may include an optional descriptive text, which may include html formatting. Such text will appear on the 'REDCap Mobile App' page before the title 'What is the REDCap Mobile App?'.

For example, using the configuration below:

![Example Configuration](example_configuration.png)

the rewritten target URL might look like this:

    https://redcap.org/surveys/?s=DUPrXGmx3L&Name=jdoe&Lastname=doe_lastname

and the text 'About the REDCap Mobile App' will be added on the 'REDCap Mobile App' before the title 'What is the REDCap Mobile App?'.

