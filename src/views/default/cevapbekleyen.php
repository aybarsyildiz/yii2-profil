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

    </div>
</div>

<h2>Cevap Bekleyen</h2>

<div class="margin-top: 15px;">
    <?php foreach($profil->questionsWithoutAnswers as $qa) { ?>
        <div class="card" style="border: 1px solid red; padding: 10px; margin-bottom: 5px;">
            <div class="card-body">
                <h3><?php echo $qa['questionText']; ?> ?</h3>
                <?php if($qa['isAnonymous'] == 1) { ?>
                    <h6 class="card-subtitle">Anonim tarafından <?php echo $profil->userName; ?> adlı kullanıcıya soruldu!</h6>
                <?php } else { ?>
                    <h6 class="card-subtitle"><?php echo $qa['fromUsername'] ?> adlı kullanıcı tarafından <?php echo $profil->userName ?> adlı kullanıcıya soruldu!</h6>
                <?php }?>
                <a href="index.php?r=sorucevap/default/cevapla&questionID=<?php echo $qa['id']; ?>" class="btn btn-success">Cevapla</a>
            </div>

        </div>
    <?php } ?>
</div>

