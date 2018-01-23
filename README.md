# REDCap module: Mobile Api Request to Survey

A REDCap module to route mobile api token requests in the **REDCap Mobile App** page to a survey. It also provides the option of adding descriptive text to the same page.

## Prerequisites
- REDCap >= 8.0.0 (for versions < 8.0.0, [REDCap Modules](https://github.com/vanderbilt/redcap-external-modules) is required).

## Installation
- Clone this repo into `<redcap-root>/modules/mobile_api_request_to_survey_v<version_number>`.
- Go to **Control Center > External Modules** and enable Mobile Api Request to Survey.
- Still in **Control Center > External Modules** configure the module with a URL and an optional descriptive text. Lastly, activate this module for all projects.

## How to use
This module requires a URL to be provided as part of the system settings. In addition, you may include an optional descriptive text, which may include html formatting. Such text will appear on the 'REDCap Mobile App' page before the title 'What is the REDCap Mobile App?'.

An example of a configuration for the system settings is as follows:
	
	URL: 
    https://redcap.example.org/surveys/?s=DUPrXGmx3L

	Descriptive Text:
	<div class="p" style="font-weight:bold;font-size:14px;margin-top:15px;">Mobile Api Request to Survey</div>
    <div><p>The <b>REDCap Mobile App</b> is an application that gives you the capability to collect your REDCap data in an offline environment (without internet) and sync the data back to your project on the <b>REDCap</b> server when the device is connected to the internet. With <b>REDCap</b> and the <b>REDCap Mobile App</b>, users have new options for electronic data capture for studies that under previous circumstances would have dictated pen and paper due to poor or no internet connection on site.
	The App is only needed for collecting data offline. You <i>DO NOT</i> need to use the Mobile App to enter data into <b>REDCap</b> from a device. If you have an internet connection, you can simply use a browser to collect data through surveys or data entry forms by navigating to: <b><a href='https://redcap.example.org' target='_blank'>redcap.example.org</a></b>.</p></div>
