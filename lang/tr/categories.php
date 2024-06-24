<?php
return [

'validation_title_required' => 'Kategori adı boş olmamalıdır!',
'validation_title_max'      => 'Kategori adı 255 karakterden fazla olamaz.',
'validation_title_unique'   => 'Bu isimde bir kategori zaten mevcut.',
'create_successfull'        => 'Yeni kategori başarıyla oluşturuldu.',
'update_successfull'        => 'Kategori başarıyla güncellendi.',
'delete_successfull'        => 'Kategori :title başarıyla silindi.',
'delete_error_posts_exist'  => 'Bu kategori, bu kategoriye ilişkili gönderiler bulunduğu için silinemez!',

/*
|--------------------------------------------------------------------------
| Language Lines For Categories Blade Views
|--------------------------------------------------------------------------
|
| Dil dosyaları (locale) için bıçaklama görünümleri dil çevirileri, 5 kelimeyi geçmemeli ve 4 alt çizgiyi geçmemeli ve ayrıca bu
| adlandırma kurallarını takip etmelidir: 'blade_adı_eleman_göstergesi1_göstergesi2'
|
*/

'index_title_categories'            => 'Kategoriler',
'index_message_no_categories'       => 'Mevcut kategori yok.',

'view_link_read_more'               => 'Daha fazla oku',
'view_message_no_posts'             => 'Bu kategoriyle ilgili şu anda kullanılabilir gönderi yok.',

'create_button_new_category'        => 'Yeni Kategori',
'create_modal_title'                => 'Yeni kategori oluştur',
'create_modal_description'          => 'Yeni oluşturulan kategori, gönderi oluştururken veya güncellerken seçilebilir olacak.',
'create_modal_label_category'       => 'Kategori adı',
'create_modal_placeholder_category' => 'kategori',
'create_modal_button_cancel'        => 'İptal',
'create_modal_button_create'        => 'Oluştur',

'delete_button_delete_category'     => 'Kategoriyi Sil',
'delete_modal_title'                => 'Kategoriyi Sil',
'delete_modal_description'          => 'Sildikten sonra, bu kategori yeni gönderiler oluşturulurken seçilemez olacak.',
'delete_modal_button_cancel'        => 'İptal',
'delete_modal_button_delete'        => 'Sil',

'edit_button_update_category'       => 'Kategoriyi Güncelle',
'edit_modal_title'                  => 'Kategoriyi Güncelle',
'edit_modal_description'            => 'Güncellenen kategori, kategori listesinde ve o kategoriyle ilişkili gönderilerde görünür olacaktır.',
'edit_modal_button_cancel'          => 'İptal',
'edit_modal_button_update'          => 'Güncelle',

];
