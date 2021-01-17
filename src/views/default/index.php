<?php
use yii\helpers\Html;
?>

<h1>Profilini Görmek İstediğiniz Kullanıcıyı Seçin</h1>

<table class="table">
    <thead>
        <tr>
            <td>#</td>
            <td>Kullanıcı Adı</td>
            <td>İşlemler</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user) { ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td>
                <?= Html::a("Profilini Gör", ['default/profil', 'id' => $user['id']], ['class' => "btn btn-success"]) ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>


