<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only be copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */
return [
    'Development' => [
        'path' => 'dev',
        'setWritable' => [
            'backend_alendre/runtime',
            'backend_alendre/web/assets',
            'backend_ecommerce/runtime',
            'backend_ecommerce/web/assets',
            'backend_ecommerce_employees/runtime',
            'backend_ecommerce_employees/web/assets',
            'backend_ecommerce_partners/runtime',
            'backend_ecommerce_partners/web/assets',
            'console/runtime',
            'frontend_alendre/runtime',
            'frontend_alendre/web/assets',
            'frontend_atelier/runtime',
            'frontend_atelier/web/assets',
            'frontend_ecommerce/runtime',
            'frontend_ecommerce/web/assets',
        ],
        'setExecutable' => [
            'yii',
            'yii_test',
        ],
        'setCookieValidationKey' => [
            'backend_alendre/config/main-local.php',
            'backend_ecommerce/config/main-local.php',
            'backend_ecommerce_employees/config/main-local.php',
            'backend_ecommerce_partners/config/main-local.php',
            'common/config/codeception-local.php',
            'frontend_alendre/config/main-local.php',
            'frontend_atelier/config/main-local.php',
            'frontend_ecommerce/config/main-local.php',
        ],
    ],
    'Production' => [
        'path' => 'prod',
        'setWritable' => [
            'backend_alendre/runtime',
            'backend_alendre/web/assets',
            'backend_ecommerce/runtime',
            'backend_ecommerce/web/assets',
            'backend_ecommerce_employees/runtime',
            'backend_ecommerce_employees/web/assets',
            'backend_ecommerce_partners/runtime',
            'backend_ecommerce_partners/web/assets',
            'console/runtime',
            'frontend_alendre/runtime',
            'frontend_alendre/web/assets',
            'frontend_atelier/runtime',
            'frontend_atelier/web/assets',
            'frontend_ecommerce/runtime',
            'frontend_ecommerce/web/assets',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'backend_alendre/config/main-local.php',
            'backend_ecommerce/config/main-local.php',
            'backend_ecommerce_employees/config/main-local.php',
            'backend_ecommerce_partners/config/main-local.php',
            'frontend_alendre/config/main-local.php',
            'frontend_atelier/config/main-local.php',
            'frontend_ecommerce/config/main-local.php',
        ],
    ],
];
