<?php

/**
 * This is the model class for table "main".
 *
 * The followings are the available columns in table 'main':
 * @property integer $id
 * @property string $url
 * @property string $title
 * @property string $logo
 * @property string $fondoColor
 * @property string $fondoImg
 * @property string $textColor
 * @property integer $id_pais
 *
 * The followings are the available model relations:
 * @property Country $idPais
 * @property Slider[] $sliders
 */
class Main extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'main';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url, title, logo, fondoColor, fondoImg, textColor, id_pais', 'required'),
			array('id_pais', 'numerical', 'integerOnly'=>true),
			array('title, fondoColor, textColor', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, url, title, logo, fondoColor, fondoImg, textColor, id_pais', 'safe', 'on'=>'search'),
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
			'idPais' => array(self::BELONGS_TO, 'Country', 'id_pais'),
			'sliders' => array(self::HAS_MANY, 'Slider', 'id_main'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'url' => 'Url',
			'title' => 'Title',
			'logo' => 'Logo',
			'fondoColor' => 'Fondo Color',
			'fondoImg' => 'Fondo Img',
			'textColor' => 'Text Color',
			'id_pais' => 'Id Pais',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('fondoColor',$this->fondoColor,true);
		$criteria->compare('fondoImg',$this->fondoImg,true);
		$criteria->compare('textColor',$this->textColor,true);
		$criteria->compare('id_pais',$this->id_pais);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Main the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
