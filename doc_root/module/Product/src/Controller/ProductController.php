<?php

namespace Product\Controller;

use Product\Model\ProductTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProductController extends AbstractActionController
{
    // private $table;
    private ProductTable $table;

    /**
     * ProductController は ProductTable に依存する。
     *
     * @param \Product\Model\ProductTable $table
     */
    public function __construct(ProductTable $table)
    {
        $this->table = $table;
    }

    /**
     * 商品一覧を表示するため、モデルから商品を取得し、ビューに渡す。
     *
     * @return void
     */
    public function indexAction()
    {
        // ビューに変数を設定するために、 ViewModel のインスタンスを返す。
        return new ViewModel([
            // コンストラクタの最初のパラメータは、表現したいデータを含む配列。自動的にビュースクリプトに渡される。
            'products' => $this->table->fetchAll(),
        ]);
    }
}
