<?php
/**
 * @copyright Copyright (c) 2015!
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace aetiv\crudtrait;

use Yii;

trait IndexTrait
{
    public function actionIndex()
    {
        $model = $this->getSearchModel();
        $this->view->params['menuControl'] = [
            'create' => [
                'visible' => true
            ],
            'reset' => [
                'visible' => true,
            ],
            'change-admin-lang' => [
                'visible' => true
            ]
        ];

        return $this->render('index', [
            'searchModel' => $model,
            'dataProvider' => $model->search(Yii::$app->request->queryParams),
        ]);
    }
}
