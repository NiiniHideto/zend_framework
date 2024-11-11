<?php

namespace Product;

use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'product' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/product[/:action[/:id]]', // ルート。/product で始まるすべての URL にマッチ
                    'constraints' => [ // 制約
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*', // 文字で始まり、その後の文字は英数字、アンダースコア、ハイフンのみに制限
                        'id'     => '[0-9]+', // 数字に限定
                    ],
                    'defaults' => [
                        'controller' => Controller\ProductController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    // TemplatePathStack の設定にビューディレクトリを追加。
    'view_manager' => [
        'template_path_stack' => [
            // これにより、view/ ディレクトリに保存されている Album モジュールのビュースクリプトを見つける。
            'product' => __DIR__ . '/../view',
        ],
    ],
];
