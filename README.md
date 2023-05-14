# National Partnership Survey

*Live preview @ [aiesec.lk](https://partners.aiesec.lk)* 

## Overview
This repository contains the codebase for AIESEC in Sri Lanka's National Partnership Survey, which is a survey to be 
filled by both national partners of AIESEC in Sri Lanka as well as the local entity partners. The responses are pushed
onto a [Google Sheet](https://docs.google.com/spreadsheets/d/1QiAy1Npxp7tBzzhE64WmzB-KWsqwGcO_PtuGcSxSd-8/edit#gid=0)
which can be filtered by entity. 

## Prerequisites
* A local development PHP environment.
    * [XAAMP](https://www.apachefriends.org/index.html)
* [Composer](https://getcomposer.org/)

## Setting Up
1. Set up the `$gcaptcha_private` key in `config.php`
2. Set up the [Google Service Account credentials file](https://cloud.google.com/iam/docs/creating-managing-service-account-keys) 
   with access to the Google Sheet to push the responses to in `credentials.json;`
3. Install the required dependencies using `composer install`
4. Visit the local url in a web browser (e.g. `https://localhost/nps-survey`)