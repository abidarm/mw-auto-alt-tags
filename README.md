# Auto Set Missing Image Alt Tags

[![WordPress Version](https://img.shields.io/badge/WordPress-4.7%2B-blue)](https://wordpress.org/)
[![PHP Version](https://img.shields.io/badge/PHP-5.6%2B-blue)](https://www.php.net/)

**Version**: 0.0.1  
**Author**: Mohamed Abidar  
**Author URI**: [https://abidar.dev/](https://abidar.dev/)  
**Author**: Mohamed Abidar  
**Requires PHP**: 5.6  
**Requires at least**: 4.7  

Automatically set missing alt tags for images in WordPress on activation.

## Description

This WordPress plugin, "Auto Set Missing Image Alt Tags," automatically sets alt tags for thumbnails that are missing them. Alt tags are crucial for accessibility and SEO purposes. With this plugin activated, any thumbnails within your WordPress site that lack alt attributes will have them automatically generated based on the linked post titles.

## Installation

You can install this plugin using one of the following methods:

1. **Direct Installation:**  
    - Download the plugin ZIP file from the [GitHub repository](https://github.com/abidarm/mw-auto-alt-tags) or directly install it from the WordPress Plugin Directory (not yet available).
    - Upload the ZIP file to your WordPress site and activate the plugin.

2. **Clone the Repository:**  
    - Clone the plugin repository from [https://github.com/abidarm/mw-auto-alt-tags](https://github.com/abidarm/mw-auto-alt-tags) into your WordPress plugins directory.
    ```
    git clone https://github.com/abidarm/mw-auto-alt-tags.git
    ```
    - Activate the plugin from the WordPress admin dashboard.

## How It Works

Upon activation, the plugin scans your WordPress site for thumbnails that don't have alt tags. It then adds alt tags to these thumbnails, using the linked post titles.

## Usage

Once activated, the plugin requires no further configuration. It sets alt tags for thumbnails based on linked post titles and stops. It does not continuously monitor or set alt tags in the background.

## Support

For support or to report any issues, please [open an issue on GitHub](#).

## Contributing

Contributions are welcome! If you have any suggestions, improvements, or feature requests, feel free to fork the repository and submit a pull request.

## License

This plugin is licensed under the [MIT License](LICENSE). You are free to modify and distribute the plugin according to the terms of this license.

