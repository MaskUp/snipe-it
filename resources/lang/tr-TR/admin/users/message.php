<?php

return array(

    'accepted'                  => 'Bu aksesuarı başarıyla kabul ettiniz.',
    'declined'                  => 'Bu varlığı başarıyla reddettiniz.',
    'bulk_manager_warn'	        => 'Kullanıcılarınızın başarıyla güncelleştirildi, ancak kaydedilmedi Yöneticisi giriş Yöneticisi\'ni seçtiğiniz çünkü aynı zamanda düzenlenecek kullanıcı listesinde oldu ve kullanıcıların kendi yöneticisi olmayabilir. Yine, yönetici hariç olmak üzere, kullanıcılarınızı seçiniz.',
    'user_exists'               => 'Kullanıcı zaten var!',
    'user_not_found'            => 'Kullanıcı yok.',
    'user_login_required'       => 'Oturum açma alanı gerekli',
    'user_has_no_assets_assigned' => 'Kullanıcıya zimmetlenmiş bir şey yok.',
    'user_password_required'    => 'Şifre Gerekli.',
    'insufficient_permissions'  => 'Yetersiz izinler.',
    'user_deleted_warning'      => 'Bu kullanıcı silindi. Bunları düzenlemek veya onları yeni varlıklar atamak için bu kullanıcı geri yüklemek gerekir.',
    'ldap_not_configured'        => 'LDAP entegrasyonu bu yükleme için yapılandırılmamış.',
    'password_resets_sent'      => 'Etkinleştirilmiş ve geçerli bir e-posta adresine sahip seçilen kullanıcılara şifre sıfırlama bağlantısı gönderildi.',
    'password_reset_sent'       => ':email! adresine bir şifre sıfırlama bağlantısı gönderildi!',
    'user_has_no_email'         => 'Bu kullanıcının profilinde bir e-posta adresi yok.',
    'log_record_not_found'        => 'Bu kullanıcı için herhangi bir kayıt bulunamadı.',


    'success' => array(
        'create'    => 'Kullanıcı başarıyla oluşturuldu.',
        'update'    => 'Kullanıcı başarıyla güncelleştirildi.',
        'update_bulk'    => 'Kullanıcılar başarıyla güncelleştirildi!',
        'delete'    => 'Kullanıcı başarıyla silindi.',
        'ban'       => 'Kullanıcı başarıyla yasaklandı.',
        'unban'     => 'Kullanıcı yasağı kaldırıldı.',
        'suspend'   => 'Kullanıcı askıya alındı.',
        'unsuspend' => 'Kullanıcı erişimi açıldı.',
        'restored'  => 'Kullanıcı başarıyla geri yüklendi.',
        'import'    => 'Kullanıcılar başarıyla içe aktarıldı.',
    ),

    'error' => array(
        'create' => 'Kullanıcı oluştururken bir sorun oluştu. Lütfen yeniden deneyin.',
        'update' => 'Kullanıcı oluştururken bir sorun oluştu. Lütfen yeniden deneyin.',
        'delete' => 'Kullanıcı silinirken bir problem oluştu. Lütfen tekrar deneyin.',
        'delete_has_assets' => 'Bu kullanıcının atadığı öğeler var ve silinemiyor.',
        'delete_has_assets_var' => 'This user still has an asset assigned. Please check it in first.|This user still has :count assets assigned. Please check their assets in first.',
        'delete_has_licenses_var' => 'This user still has a license seats assigned. Please check it in first.|This user still has :count license seats assigned. Please check them in first.',
        'delete_has_accessories_var' => 'This user still has an accessory assigned. Please check it in first.|This user still has :count accessories assigned. Please check their assets in first.',
        'delete_has_locations_var' => 'This user still manages a location. Please select another manager first.|This user still manages :count locations. Please select another manager first.',
        'delete_has_users_var' => 'This user still manages another user. Please select another manager for that user first.|This user still manages :count users. Please select another manager for them first.',
        'unsuspend' => 'Kullanıcı erişimi açılırken bir sorun oluştu. Lütfen yeniden deneyin.',
        'import'    => 'Kullanıcılar içe aktarılırken bir sorun oluştu. Lütfen yeniden deneyin.',
        'asset_already_accepted' => 'Bu varlık zaten kabul etti.',
        'accept_or_decline' => 'Kullanıcı varlığı kabul veya red etmeli.',
        'cannot_delete_yourself' => 'We would feel really bad if you deleted yourself, please reconsider.',
        'incorrect_user_accepted' => 'Atamaya çalıştığınız varlık atanamadı.',
        'ldap_could_not_connect' => 'LDAP sunucusuna bağlanamadı. LDAP yapılandırma dosyası LDAP sunucusu yapılandırmanızda gözden geçirin. <br> LDAP sunucusundan Hata:',
        'ldap_could_not_bind' => 'LDAP sunucusuna bağlanamadı. LDAP yapılandırma dosyası LDAP sunucusu yapılandırmanızda gözden geçirin. <br> LDAP sunucusundan Hata: ',
        'ldap_could_not_search' => 'LDAP sunucusuna bağlanamadı. LDAP yapılandırma dosyası LDAP sunucusu yapılandırmanızda gözden geçirin. <br> LDAP sunucusundan Hata:',
        'ldap_could_not_get_entries' => 'LDAP sunucusuna bağlanamadı. LDAP yapılandırma dosyası LDAP sunucusu yapılandırmanızda gözden geçirin. <br> LDAP sunucusundan Hata:',
        'password_ldap' => 'Bu hesabın parolası LDAP / Active Directory tarafından yönetilir. Lütfen şifrenizi değiştirmek için BT departmanınızla iletişime geçin.',
    ),

    'deletefile' => array(
        'error'   => 'Dosya silinemedi. Lütfen tekrar deneyin.',
        'success' => 'Dosya silindi.',
    ),

    'upload' => array(
        'error'   => 'Dosya(lar) yüklenemedi. Lütfen tekrar deneyin.',
        'success' => 'Dosya(lar) yüklendi.',
        'nofiles' => 'Yükleme için hiç bir dosya seçmediniz',
        'invalidfiles' => 'Bir veya daha fazla dosya çok büyük veya izin verilmeyen bir dosya türü. İzin verilen dosya türleri png, Gif, jpg, doc, docx, pdf, txt.',
    ),

    'inventorynotification' => array(
        'error'   => 'Bu kullanıcının e-posta grubu yok.',
        'success' => 'Kullanıcı, mevcut envanteri hakkında bilgilendirildi.'
    )
);