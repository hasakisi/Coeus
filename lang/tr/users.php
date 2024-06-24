<?php
return [

    'validation_name_required'  => 'Lütfen adınızı girin.',
    'validation_name_max'       => 'Ad, en fazla :max karakter uzunluğunda olmalıdır.',
    'validation_name_regex'     => 'Ad yalnızca alfabedeki harfleri ve boşlukları içerebilir.',
    'validation_image_mimes'    => 'Resim jpg, gif veya png türünde bir dosya olmalıdır.',
    'validation_email_required' => 'Email alanı boş bırakılamaz ve boş olmamalıdır.',
    'validation_email_email'    => 'Lütfen geçerli bir email adresi girin.',
    'update_successfull'        => 'Kullanıcı başarıyla güncellendi.',
    'delete_successfull'        => 'Kullanıcı :name başarıyla silindi.',
    'admin_assigned'            => ':name için yönetici hakları başarıyla atandı.',
    'admin_removed'             => ':name\'in yönetici hakları başarıyla kaldırıldı.',

    /*
    |--------------------------------------------------------------------------
    | Kullanıcılar Bıçak Görünümleri İçin Dil Satırları
    |--------------------------------------------------------------------------
    |
    | Bıçak görünümleri yerelleştirme (locales) için dil satırları, 5 kelimeden fazla ve 4 alt çizgiden fazla içermemeli ve ayrıca bu
    | adlandırma kurallarını takip etmelidir: 'blade_adı_eleman_göstergesi1_göstergesi2'
    |
    */

    'edit_title_header_user'              => 'Kullanıcı bilgileri',
    'edit_description_user'               => ':name için bilgileri güncelle',
    'edit_label_name'                     => 'Ad',
    'edit_label_image'                    => 'Profil resmi',
    'edit_label_email'                    => 'Email',
    'edit_button_update'                  => 'Güncelle',
    'edit_status_updated'                 => 'Başarıyla güncellendi',
    'edit_delete_title'                   => 'Kullanıcıyı sil',
    'edit_delete_description'             => 'Bu hesabı sildiğinizde, tüm kaynakları ve verileri kalıcı olarak silinecek ve bu kullanıcı artık sistemde oturum açamayacak.',
    'edit_delete_button_delete'           => 'Sil',
    'edit_delete_modal_title'             => ':name\'in hesabını silmek istediğinizden emin misiniz?',
    'edit_delete_modal_description'       => 'Bir hesap silindiğinde, tüm kaynakları ve verileri kalıcı olarak silinir. Kullanıcının hesabını kalıcı olarak silmek istediğinizi onaylamak için kullanıcının email adresini girin.',
    'edit_delete_modal_button_delete'     => 'Sil',
    'edit_delete_modal_button_cancel'     => 'İptal',
    'edit_admin_title'                    => 'Yönetici izinleri',
    'edit_admin_description_remove'       => 'Bu kullanıcı için yönetici haklarını kaldırın, bu işlemden sonra diğer kullanıcıların hesaplarını yönetme yeteneğine sahip olmayacaklar.',
    'edit_admin_description_assign'       => 'Bu kullanıcıya yönetici hakları verin, bu işlemden sonra diğer kullanıcıların hesaplarını yönetme ve diğer yönetici izinlerine sahip olacaklardır.',
    'edit_admin_button_remove'            => 'Yönetici hakkını kaldır',
    'edit_admin_button_assign'            => 'Yönetici hakları atama',
    'edit_admin_modal_title_remove'       => ':name\'den yönetici haklarını kaldırmak istediğinizden emin misiniz?',
    'edit_admin_modal_title_assign'       => ':name\'e yönetici hakları vermek istediğinizden emin misiniz?',
    'edit_admin_modal_description_remove' => 'Kullanıcının yönetici haklarını kaldırdıktan sonra, diğer kullanıcıların verilerine erişme ve bunları değiştirme yeteneği olmayacak.',
    'edit_admin_modal_description_assign' => 'Kullanıcıya yönetici hakları verildikten sonra, diğer kullanıcıların hassas verilerine erişme ve bunları değiştirme yeteneği olacak. Bu eylemi onaylayın.',
    'edit_admin_modal_button_confirm'     => 'Onayla',
    'edit_admin_modal_button_cancel'      => 'İptal',

    'index_title_header_users'            => 'Kullanıcılar',
    'index_table_header_name'             => 'Ad',
    'index_table_header_email'            => 'Email',
    'index_table_link_edit'               => 'Düzenle',
    'index_message_no_users'              => 'Görüntülenecek kullanıcı yok.',

    'posts_title_header_posts'            => ':name\'in gönderileri',
    'posts_button_create'                 => 'Yeni gönderi',
    'posts_link_read_more'                => 'Daha fazlasını oku',
    'posts_message_no_posts'              => 'Şu anda bu kullanıcının hiç gönderisi yok.',
    'posts_message_no_posts_self'         => 'Henüz hiç gönderi yayınlamadınız.',

];
