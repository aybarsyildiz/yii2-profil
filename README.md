# yii2-profil Modulu

- Bu modul sorucevap moduluyle beraber ortaklasa olarak calisir.
- Modul icerisinde kullanilan soru-cevap platformunda kullanicinin sordugu soru sayisini, verdigi cevaplari siralar.
<hr>
# Kurulum

- Kurulum icin once vagrant instanceiniz uzerinde olusturdugunuz yii2 projesi klasorune girmelisiniz.
- Terminal uzerinde << composer require aybarsyildiz/yii2-profil "*" >> komutu ile proje icerisine modul kurulur.
- composer ile modul kurulduktan sonra << app\config\main.php >> icerisindeki modules kismina << 'profil' => 'aybarsyildiz\profil\Module' >> satiri eklenir.
- Bu satir eklendikten sonra modulumuz calisir hale gelmistir.
