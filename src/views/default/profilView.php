<?php
use Yii;
use yii\helpers\Html;

$this->title = "Profilini Görüntüle";

?>

<div class="profile">
    <h1><?php echo \Yii::$app->user->identity->getId(); ?> ID'li kullanıcının profili,</h1>
    <p><?php echo $questionCount?> Adet soru soruldu.</p>

</div>

