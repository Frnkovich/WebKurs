<?php
class LanguageSelector extends CWidget
{
    public function run()
    {
        $currentLang = Yii::app()->language;
        $languages = array('ru'=>'Русский','en'=>'English');
        $this->render('languageSelector', array('currentLang' => $currentLang, 'languages'=>$languages));
    }
}
?>