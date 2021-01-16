# Social Network Module

Social Module portalınıza eklemek için yapmanız gereken işlemler

1-) Portal içerisindeki composer.json dosyasında repositories bölümüne modülün linkini eklemek. { "type": "vcs", "url": "https://github.com/mcicek34/social.git" },

2-) Portal klasörünün içerisindeki portal/backend/config/main.php , portal/frontend/config/main.php , portal/api/config/main.php dosyalarındaki modules bölümüne kendi modülünüzü eklemeniz gerekmektedir.

3-) Composer.json a eklediğimiz repoyu sistemimize eklemek için vagrant ssh yaptıktan sonra cd /var/www/portal dizininde composer update veya composer require mcicek34/social "dev-main" komutunu çalıştırınız.

4-) Migration dosyası uplanarak veri tabanına modülde kullandığımız tablolar eklenir. Bunun için vagrant ssh da "php yii migrate --migrationPath=@vendor/mcicek34/social/migrations --interactive=0" komutu çalıştırılır

Bu dört adımı uyguladığınızda migrationdaki tablolar veri tabanına eklenecek ve github daki ödev modülü portal/vendor/mcicek34 dizininin altına social olarak oluşarak erişilebilir hale gelecektir.

#Panel Görünümleri

---------Anasayfa------------

[img]https://i.hizliresim.com/cfdRCB.png[/img][/url]

---------Paylaşımlar----------

[img]https://i.hizliresim.com/DRrdP2.png[/img][/url]

---------Arkadaşlar----------

[img]https://i.hizliresim.com/gtzLMc.png[/img][/url]

---------Kullanıcılar----------

[img]https://i.hizliresim.com/qp6bhi.png[/img][/url]

---------Kullanıcı----------

[img]https://i.hizliresim.com/hxovX1.png[/img][/url]

#Notlar

1-)Users paneli açıldığında;
    Kaydolcak kişiden migration ile oluşturulan kullanıcılar tablosundaki değerler alınıp tabloya eklenir ve userlist de gösterilir.

2-)Share paneli açıldığında;
    Paylaşım yapacak kişiden migration ile oluşturulan share tablosundaki değerler alınıp tabloya eklenir ve sharelist de gösterilir.

3-)Friendship paneli açıldığında;

   Arkadaş olunan kişiler migration ile oluşturulan friendship tablosundaki değerler alınıp tabloya eklenir ve friendshiplist de gösterilir.
