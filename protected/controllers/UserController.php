<?php

class UserController extends Controller
{
    public $layout = 'no_fwsm';

	public function actionInfo()
	{
		$this->render('info');
	}

    public function actionPanel()
    {
        $this->render('panel');
    }

    public function actionTrans()
    {
        $this->render('trans');
    }

    public function actionCharge()
    {
        $this->render('charge');
    }

    public function actionChongZhi()
    {
        $this->render('chongZhi');
    }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
