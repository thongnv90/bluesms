<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $contact_id
 * @property integer $category_id
 * @property string $contact_hoten
 * @property integer $contact_phone
 * @property string $contact_birthday
 * @property integer $contact_gender
 * @property string $contact_address
 * @property string $contact_email
 * @property string $contact_company
 * @property string $contact_notes
 * @property integer $member_createby
 */
class Contact extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, contact_hoten, contact_phone, contact_birthday, contact_gender, contact_address, contact_email, contact_company, contact_notes, member_createby', 'required'),
			array('category_id, contact_phone, contact_gender, member_createby', 'numerical', 'integerOnly'=>true),
			array('contact_hoten', 'length', 'max'=>50),
			array('contact_address, contact_company, contact_notes', 'length', 'max'=>255),
			array('contact_email', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('contact_id, category_id, contact_hoten, contact_phone, contact_birthday, contact_gender, contact_address, contact_email, contact_company, contact_notes, member_createby', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contact_id' => 'Contact',
			'category_id' => 'Category',
			'contact_hoten' => 'Contact Hoten',
			'contact_phone' => 'Contact Phone',
			'contact_birthday' => 'Contact Birthday',
			'contact_gender' => 'Contact Gender',
			'contact_address' => 'Contact Address',
			'contact_email' => 'Contact Email',
			'contact_company' => 'Contact Company',
			'contact_notes' => 'Contact Notes',
			'member_createby' => 'Member Createby',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('contact_hoten',$this->contact_hoten,true);
		$criteria->compare('contact_phone',$this->contact_phone);
		$criteria->compare('contact_birthday',$this->contact_birthday,true);
		$criteria->compare('contact_gender',$this->contact_gender);
		$criteria->compare('contact_address',$this->contact_address,true);
		$criteria->compare('contact_email',$this->contact_email,true);
		$criteria->compare('contact_company',$this->contact_company,true);
		$criteria->compare('contact_notes',$this->contact_notes,true);
		$criteria->compare('member_createby',$this->member_createby);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contact the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getDataJson(){
            $contactmodel = $this->search()->getData();
            $data = array();
            foreach ($contactmodel as $items)
            {
                $data['fullname'][]=$items->contact_hoten;
                $data['phone'][]=$items->contact_phone;
                $data['address'][]=$items->contact_address;
                $data['birthday'][]=$items->contact_birthday;
                $data['gender'][]=$items->contact_gender;
                $data['email'][]=$items->contact_email;
                $data['company'][]=$items->contact_company;
                $data['notes'][]=$items->contact_notes;              
            }
            $data_jonson = json_encode($data);
            $data_jonson = str_replace('[','',$data_jonson);
            $data_jonson = str_replace(']','',$data_jonson);
            return $data_jonson;
        }
}
