# Pimcore Toolbox

## Installation

1. Run
    ```shell
    composer require gander-tools/pimcore-toolbox
    ```
2. Add to `config/bundles.php`:

    ```php
    return [
        GanderTools\PimcoreToolbox\PimcoreToolboxBundle::class => ['all' => true],
    ];
    ```
