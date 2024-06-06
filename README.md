# AIESEC in Sri Lanka National Partnership Survey

*Live preview @ [aiesec.lk](https://partners.aiesec.lk)*

## Overview

This repository contains the codebase for AIESEC in Sri Lanka's National Partnership Survey. This survey is designed to be filled out by both national partners of AIESEC in Sri Lanka as well as local entity partners. The survey responses are pushed to a [Google Sheet](https://docs.google.com/spreadsheets/d/1QiAy1Npxp7tBzzhE64WmzB-KWsqwGcO_PtuGcSxSd-8/edit#gid=0), which can be filtered by entity.

## Prerequisites

- A local development PHP environment, such as [XAMPP](https://www.apachefriends.org/index.html)
- [Composer](https://getcomposer.org/)

## Setting Up

1. Set up the `$gcaptcha_private` key in `config.php`.
2. Set up the [Google Service Account credentials file](https://cloud.google.com/iam/docs/creating-managing-service-account-keys) with access to the Google Sheet to push the responses to in `credentials.json`.
3. Install the required dependencies using:

    ```sh
    composer install
    ```

4. Visit the local URL in a web browser (e.g., `https://localhost/nps-survey`).

## Usage

Once the setup is complete, you can begin using the survey by accessing it via the local URL. The survey responses will be automatically pushed to the configured Google Sheet.

## Troubleshooting

If you encounter any issues during setup or usage, please ensure the following:

- The `$gcaptcha_private` key is correctly set in `config.php`.
- The `credentials.json` file is correctly set up and has the appropriate permissions to access the Google Sheet.
- All dependencies are properly installed via Composer.
- The local PHP environment is correctly configured and running.

For further assistance, refer to the official documentation for [XAMPP](https://www.apachefriends.org/index.html) and [Composer](https://getcomposer.org/).

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request. We welcome all contributions and feedback.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
