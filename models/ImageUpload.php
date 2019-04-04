<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model{
    
    public $image;

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg,png']
        ];
    }


    public function uploadFile(UploadedFile $file, $currentImage)
    {
      //echo $file;
      //print($currentImage); die("go_1");

         $this->image = $file;
       // echo Yii::getAlias('@web') . '/uploads/' . $file->name; die;

          if($this->validate())
       { 
        if (file_exists(Yii::getAlias('@app/web') . 'uploads/' . $currentImage)){
        //if (file_exists('uploads/' . $currentImage)){
          unlink(Yii::getAlias('@app/web') . '/uploads/' . $currentImage);
            //unlink('uploads/' . $currentImage); 
        }
       $filename = strtolower(md5(uniqid($file->basename)). "." .$file->extension);
        $file->saveAs('uploads/' . $filename);
        return $filename;
       // 

      
      }//validate
    }


 }