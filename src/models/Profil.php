<?php

namespace aybarsyildiz\profil\models;

use Yii;
use yii\base\Model;

class Profil extends Model
{
    public $userID;
    public $userName;
    public $questionCount;
    public $questionWithAnswerCount;
    public $questionsAndAnswers;
    public $questionsWithoutAnswers;

    public function rules()
    {
        return [
            [ ['userID', 'userName', 'questionCount'], 'required' ],
            [['questionCount','userID'], 'integer'],
            [ 'username', 'string']
        ];
    }

    public function getProfilData()
    {
        $username = \Yii::$app->db
            ->createCommand("SELECT username FROM user WHERE id = :id")
            ->bindParam(':id', $this->userID)
            ->queryOne()['username'];
        $this->userName = $username;

        $rawQuestions = [];

        $this->questionsAndAnswers = [];
        $this->questionWithAnswerCount = 0;
        $this->questionsWithoutAnswers = [];

        $rawQuestions = \Yii::$app->db
            ->createCommand("SELECT * FROM questions WHERE toID = :id")
            ->bindParam(':id', $this->userID)
            ->queryAll();

        $this->questionCount = count($rawQuestions);

        foreach ($rawQuestions as $raw) {

            $answer = \Yii::$app->db
                ->createCommand("SELECT * FROM answers WHERE questionID = :qID")
                ->bindParam(":qID", $raw['questionID'])
                ->queryOne();

            $fromUsername = \Yii::$app->db
                ->createCommand('SELECT * FROM user WHERE id = :id')
                ->bindParam(':id', $raw['fromID'])
                ->queryOne()['username'];

            if(is_array($answer)) {
                $this->questionsAndAnswers[] = [
                    'questionText' => $raw['questionText'],
                    'answerText' => $answer['answerText'],
                    'fromID' => $raw['fromID'],
                    'fromUsername' => $fromUsername,
                    'isAnonymous' => $raw['isAnonymous'],
                    'askedAt' => $raw['askedAt'],
                    'answeredAt' => $answer['answeredAt']
                ];
                $this->questionWithAnswerCount = $this->questionWithAnswerCount + 1;
            } else {
                $this->questionsWithoutAnswers[] = [
                    'id' => $raw['questionID'],
                    'questionText' => $raw['questionText'],
                    'fromID' => $raw['fromID'],
                    'fromUsername' => $fromUsername,
                    'isAnonymous' => $raw['isAnonymous'],
                    'askedAt' => $raw['askedAt']
                ];
            }


        }


    }



}


?>
