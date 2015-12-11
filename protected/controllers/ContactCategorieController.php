<?php

class ContactCategorieController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','DownloadTemplate','index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ContactCategorie;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ContactCategorie']))
		{
			$model->attributes=$_POST['ContactCategorie'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->category_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ContactCategorie']))
		{
			$model->attributes=$_POST['ContactCategorie'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->category_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ContactCategorie');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ContactCategorie('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ContactCategorie']))
			$model->attributes=$_GET['ContactCategorie'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ContactCategorie the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ContactCategorie::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ContactCategorie $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='contact-categorie-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionDownloadTemplate()
        {
            $file=Yii::getPathOfAlias('webroot').'/template/contact.xls';
            if(file_exists($file)){

                header("Content-Length: " . filesize ( $file ) ); 
                header("Content-type: application/octet-stream"); 
                header("Content-disposition: attachment; filename=".basename($file));
                header('Expires: 0');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                ob_clean();
                flush();

                readfile($file);
            }
            else
            {
                echo 'The file "contact.xls" does not exist';
            }
        }
        
        public function actionImportDataExel(){
            if( $_FILES['file']['tmp_name'])

            {

                $dom = DOMDocument::load( $_FILES['file']['tmp_name'] );

                $rows = $dom->getElementsByTagName('Row');

                $first_row = true;

                foreach ($rows as $row)

                {

                if( !$first_row)

                {

                $tieude = "";

                $tacgia = "";

                $gia = "";

                $index = 1;

                $cells = $row->getElementsByTagName( 'Cell' );

                foreach( $cells as $cell )

                {

                $ind = $cell->getAttribute( 'Index' );

                if ( $ind != null ) $index = $ind;

                if ( $index == 1 ) $tieude = $cell->nodeValue;

                if ( $index == 2 ) $tacgia = $cell->nodeValue;

                if ( $index == 3 ) $gia = $cell->nodeValue;

                $index += 1;

                }

                add_person( $tieude, $tacgia, $gia);

                }

                $first_row = false;

                }

            }

            echo '<pre>';
            print_r($arraydata);
            echo '</pre>';
        }
}
