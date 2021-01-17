<?php
    namespace aybarsyildiz\profil\controllers;
    use aybarsyildiz\profil\models\Profil;
    use Yii;
    
    class DefaultController extends \yii\web\Controller
    {
        public function actionIndex()
        {

            $users = \Yii::$app->db
                ->createCommand('SELECT * FROM user')
                ->queryAll();
            
            return $this->render('index', [
                'users' => $users
            ]);
        }

        public function actionProfil()
        {
            $request = Yii::$app->request;

            if($request->get('id')) {
                $id = $request->get('id');
                $user = \Yii::$app->db
                    ->createCommand('SELECT id FROM user WHERE id = id')
                    ->bindParam(':id', $id)
                    ->queryOne();

                if(is_array($user)) {
                    $profil = new Profil();
                    $profil->userID = $id;
                    $profil->getProfilData();

                    return $this->render('profil', [
                        'profil' => $profil
                    ]);

                } else {
                    $users = \Yii::$app->db
                        ->createCommand('SELECT * FROM user')
                        ->queryAll();
                    return $this->render('index', [
                        'users' => $users
                    ]);
                }

            } else {
                $users = \Yii::$app->db
                    ->createCommand('SELECT * FROM user')
                    ->queryAll();
                return $this->render('index', [
                    'users' => $users
                ]);
            }

        }

        public function actionCevapbekleyen()
        {
            if(!Yii::$app->user->isGuest) {
                $userID = Yii::$app->user->identity->getId();
                $profil = new Profil();
                $profil->userID = $userID;
                $profil->getProfilData();

                return $this->render('cevapbekleyen', [
                    'profil' => $profil
                ]);

            }

            $users = \Yii::$app->db
                ->createCommand('SELECT * FROM user')
                ->queryAll();

            return $this->render('index', [
                'users' => $users
            ]);



        }

    }
