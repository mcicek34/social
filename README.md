# Social Network Module

İnternet Programcılığı Proje Ödevi

Mustafa ÇİÇEK 

160202055

Social Module portalınıza eklemek için yapmanız gereken işlemler

1-) Advanced içerisindeki composer.json dosyasında repositories bölümüne modülün linkini eklemek. { "type": "vcs", "url": "https://github.com/mcicek34/social.git" },

2-) Advanced klasörünün içerisindeki advanced/backend/config/main.php , advanced/frontend/config/main.php , advanced/api/config/main.php dosyalarındaki modules bölümüne kendi modülünüzü eklemeniz gerekmektedir.

3-) Composer.json a eklediğimiz repoyu sistemimize eklemek için vagrant ssh yaptıktan sonra cd /var/www/advanced dizininde composer update veya composer require mcicek34/social "dev-main" komutunu çalıştırınız.

4-) Migration dosyası uplanarak veri tabanına modülde kullandığımız tablolar eklenir. Bunun için vagrant ssh da "php yii migrate --migrationPath=@vendor/mcicek34/social/migrations --interactive=0" komutu çalıştırılır

Bu dört adımı uyguladığınızda migrationdaki tablolar veri tabanına eklenecek ve github daki ödev modülü portal/vendor/mcicek34 dizininin altına social olarak oluşarak erişilebilir hale gelecektir.


# Panel Görünümleri

Anasayfa => http://advanced/frontend/web/index.php?r=social/default/index

![Alt text](https://i.hizliresim.com/cfdRCB.png)

Paylaşımlar => http://advanced/frontend/web/index.php?r=/social/share/index

![Alt text](https://i.hizliresim.com/DRrdP2.png)

Arkadaşlar => http://advanced/frontend/web/index.php?r=social/friendship/index

![Alt text](https://i.hizliresim.com/gtzLMc.png)

Kullanıcılar => http://advanced/frontend/web/index.php?r=social/kullanicilar/index

![Alt text](https://i.hizliresim.com/qp6bhi.png)

Kullanıcı => http://advanced/frontend/web/index.php?r=social%2Fkullanicilar%2Fview&id=2

![Alt text](https://i.hizliresim.com/hxovX1.png)


# Notlar

1-)Users paneli açıldığında;
    Kaydolcak kişiden migration ile oluşturulan kullanıcılar tablosundaki değerler alınıp tabloya eklenir ve userlist de gösterilir.

2-)Share paneli açıldığında;
    Paylaşım yapacak kişiden migration ile oluşturulan share tablosundaki değerler alınıp tabloya eklenir ve sharelist de gösterilir.

3-)Friendship paneli açıldığında;
     Arkadaş olunan kişiler migration ile oluşturulan friendship tablosundaki değerler alınıp tabloya eklenir ve friendshiplist de gösterilir.
