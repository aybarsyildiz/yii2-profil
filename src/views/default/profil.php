<?php

use Yii;
use yii\helpers\Html;

?>

<div class="card" style="border: 1px solid red; padding: 10px;">
    <div class="card-body">
        <h1 class="card-title">
            <?php echo $profil->userName; ?>
        </h1>
        <div>
            <p><?php echo $profil->questionCount ?> soru soruldu</p>
            <p><?php echo $profil->questionWithAnswerCount ?> soru cevaplandı</p>
            <p><?php echo count($profil->questionsWithoutAnswers) ?> soru cevaplanmadı</p>
        </div>

        <div>
            <?php if(Yii::$app->user->isGuest) { ?>
                Bu kişiye soru sorabilmek için giriş yapmanız gerekli!
            <?php } else { ?>
                <?php if(Yii::$app->user->identity->username == $profil->userName) { ?>
                    <?= Html::a('Cevap Bekleyen Soruları Gör', ['cevapbekleyen'], ['class' => "btn btn-success"]); ?>
                <?php } else { ?>
                    <a href="index.php?r=sorucevap/default/sor&toID=<?php echo $profil->userID ?>" class="btn btn-primary">Soru Sor</a>
                <?php }?>
            <?php } ?>
        </div>

    </div>
</div>

<h2>Sorular - Cevaplar</h2>

<div class="margin-top: 15px;">
    <?php foreach($profil->questionsAndAnswers as $qa) { ?>
        <div class="card" style="border: 1px solid red; padding: 10px; margin-bottom: 5px;">
            <div class="card-body">
                <h3><?php echo $qa['questionText']; ?> ?</h3>
                <?php if($qa['isAnonymous'] == 1) { ?>
                    <h6 class="card-subtitle">Anonim tarafından <?php echo $profil->userName; ?> adlı kullanıcıya soruldu!</h6>
                <?php } else { ?>
                    <h6 class="card-subtitle"><?php echo $qa['fromUsername'] ?> adlı kullanıcı tarafından <?php echo $profil->userName ?> adlı kullanıcıya soruldu!</h6>
                <?php }?>
                <p><?php echo $qa['answerText']; ?></p>
            </div>

        </div>
    <?php } ?>
</div>

