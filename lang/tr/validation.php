<?php

return [


'accepted'                => ':attribute alanı kabul edilmelidir.',
'accepted_if'             => ':other :value olduğunda :attribute alanı kabul edilmelidir.',
'active_url'              => ':attribute alanı geçerli bir URL olmalıdır.',
'after'                   => ':attribute alanı :date tarihinden sonra olmalıdır.',
'after_or_equal'          => ':attribute alanı :date tarihinden sonra veya aynı tarihte olmalıdır.',
'alpha'                   => ':attribute alanı sadece harf içermelidir.',
'alpha_dash'              => ':attribute alanı sadece harf, rakam, tire (-) ve alt çizgi (_) içermelidir.',
'alpha_num'               => ':attribute alanı sadece harf ve rakam içermelidir.',
'array'                   => ':attribute alanı bir dizi olmalıdır.',
'ascii'                   => ':attribute alanı yalnızca tek baytlık alfanumerik karakterler ve semboller içermelidir.',
'before'                  => ':attribute alanı :date tarihinden önce olmalıdır.',
'before_or_equal'         => ':attribute alanı :date tarihinden önce veya aynı tarihte olmalıdır.',
'boolean'                 => ':attribute alanı doğru veya yanlış olmalıdır.',
'can'                     => ':attribute alanı yetkilendirilmemiş bir değer içeriyor.',
'confirmed'               => ':attribute alanı onayı eşleşmiyor.',
'current_password'        => 'Şifre yanlış.',
'date'                    => ':attribute alanı geçerli bir tarih olmalıdır.',
'date_equals'             => ':attribute alanı :date ile aynı tarihte olmalıdır.',
'date_format'             => ':attribute alanı :format formatına uymalıdır.',
'decimal'                 => ':attribute alanı :decimal ondalık basamağa sahip olmalıdır.',
'declined'                => ':attribute alanı reddedilmelidir.',
'declined_if'             => ':other :value olduğunda :attribute alanı reddedilmelidir.',
'different'               => ':attribute alanı ile :other farklı olmalıdır.',
'digits'                  => ':attribute alanı :digits basamaklı olmalıdır.',
'digits_between'          => ':attribute alanı :min ile :max arasında basamaklı olmalıdır.',
'dimensions'              => ':attribute alanı geçersiz resim boyutlarına sahiptir.',
'distinct'                => ':attribute alanı tekrarlanan bir değere sahiptir.',
'doesnt_end_with'         => ':attribute alanı şu değerlerden biriyle bitmemelidir: :values.',
'doesnt_start_with'       => ':attribute alanı şu değerlerden biriyle başlamamalıdır: :values.',
'email'                   => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
'ends_with'               => ':attribute alanı şu değerlerden biriyle bitmelidir: :values.',
'enum'                    => 'Seçilen :attribute geçersiz.',
'exists'                  => 'Seçilen :attribute geçersiz.',
'extensions'              => ':attribute alanı şu uzantılardan birine sahip olmalıdır: :values.',
'file'                    => ':attribute alanı bir dosya olmalıdır.',
'filled'                  => ':attribute alanı bir değere sahip olmalıdır.',
'hex_color'               => ':attribute alanı geçerli bir onaltılık renk olmalıdır.',
'image'                   => ':attribute alanı bir resim olmalıdır.',
'in'                      => 'Seçilen :attribute geçersiz.',
'in_array'                => ':attribute alanı :other içinde bulunmalıdır.',
'integer'                 => ':attribute alanı bir tam sayı olmalıdır.',
'ip'                      => ':attribute alanı geçerli bir IP adresi olmalıdır.',
'ipv4'                    => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
'ipv6'                    => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
'json'                    => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
'list'                    => ':attribute alanı bir liste olmalıdır.',
'lowercase'               => ':attribute alanı küçük harf olmalıdır.',
'mac_address'             => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
'max_digits'              => ':attribute alanı en fazla :max basamaklı olmalıdır.',
'mimes'                   => ':attribute alanı şu türlerden biri olmalıdır: :values.',
'mimetypes'               => ':attribute alanı şu türlerden biri olmalıdır: :values.',
'min_digits'              => ':attribute alanı en az :min basamaklı olmalıdır.',
'missing'                 => ':attribute alanı eksik olmalıdır.',
'missing_if'              => ':other :value olduğunda :attribute alanı eksik olmalıdır.',
'missing_unless'          => ':other :value olmadığında :attribute alanı eksik olmalıdır.',
'missing_with'            => ':values mevcutken :attribute alanı eksik olmalıdır.',
'missing_with_all'        => ':values mevcutken :attribute alanı eksik olmalıdır.',
'multiple_of'             => ':attribute alanı :value\'nun katı olmalıdır.',
'not_in'                  => 'Seçilen :attribute geçersiz.',
'not_regex'               => ':attribute alanı formatı geçersiz.',
'numeric'                 => ':attribute alanı bir sayı olmalıdır.',
'present'                 => ':attribute alanı mevcut olmalıdır.',
'present_if'              => ':other :value olduğunda :attribute alanı mevcut olmalıdır.',
'present_unless'          => ':other :value olmadığında :attribute alanı mevcut olmalıdır.',
'present_with'            => ':values mevcutken :attribute alanı mevcut olmalıdır.',
'present_with_all'        => ':values mevcutken :attribute alanı mevcut olmalıdır.',
'prohibited'              => ':attribute alanı yasaktır.',
'prohibited_if'           => ':other :value olduğunda :attribute alanı yasaktır.',
'prohibited_unless'       => ':other :values içinde olmadığında :attribute alanı yasaktır.',
'prohibits'               => ':attribute alanı :other\'ın mevcut olmasını engeller.',
'regex'                   => ':attribute alanı formatı geçersiz.',
'required'                => ':attribute alanı gereklidir.',
'required_array_keys'     => ':attribute alanı için :values girişleri bulunmalıdır.',
'required_if'             => ':other :value olduğunda :attribute alanı gereklidir.',
'required_if_accepted'    => ':other kabul edildiğinde :attribute alanı gereklidir.',
'required_if_declined'    => ':other reddedildiğinde :attribute alanı gereklidir.',
'required_unless'         => ':other :values içinde olmadığında :attribute alanı gereklidir.',
'required_with'           => ':values mevcut olduğunda :attribute alanı gereklidir.',
'required_with_all'       => ':values mevcut olduğunda :attribute alanı gereklidir.',
'required_without'        => ':values mevcut olmadığında :attribute alanı gereklidir.',
'required_without_all'    => ':values hiçbiri mevcut olmadığında :attribute alanı gereklidir.',
'same'                    => ':attribute alanı :other ile eşleşmelidir.',
'starts_with'             => ':attribute alanı şu değerlerden biriyle başlamalıdır: :values.',
'string'                  => ':attribute alanı bir dize olmalıdır.',
'timezone'                => ':attribute alanı geçerli bir zaman dilimi olmalıdır.',
'unique'                  => ':attribute zaten alınmıştır.',
'uploaded'                => ':attribute yüklenemedi.',
'uppercase'               => ':attribute alanı büyük harf olmalıdır.',
'url'                     => ':attribute alanı geçerli bir URL olmalıdır.',
'ulid'                    => ':attribute alanı geçerli bir ULID olmalıdır.',
'uuid'                    => ':attribute alanı geçerli bir UUID olmalıdır.',
'resize_image_type_error' => 'Desteklenmeyen dosya türü :type. Lütfen şu türlerden birini kullanın: .jpg, .png, .gif',

/*
|--------------------------------------------------------------------------
| Nested Validation Language Lines
|--------------------------------------------------------------------------
|
| Nested validation language lines are separated from one-liners for better
| readability and localization structure
|
*/

'between' => [
    'array'   => ':attribute alanı :min ile :max arasında öğe içermelidir.',
    'file'    => ':attribute alanı :min ile :max kilobayt arasında olmalıdır.',
    'numeric' => ':attribute alanı :min ile :max arasında olmalıdır.',
    'string'  => ':attribute alanı :min ile :max karakter arasında olmalıdır.',
],
'gt' => [
    'array'   => ':attribute alanı :value\'dan daha fazla öğe içermelidir.',
    'file'    => ':attribute alanı :value kilobayttan büyük olmalıdır.',
    'numeric' => ':attribute alanı :value\'dan büyük olmalıdır.',
    'string'  => ':attribute alanı :value karakterden daha uzun olmalıdır.',
],
'gte' => [
    'array'   => ':attribute alanı en az :value öğe içermelidir.',
    'file'    => ':attribute alanı en az :value kilobayt olmalıdır.',
    'numeric' => ':attribute alanı en az :value olmalıdır.',
    'string'  => ':attribute alanı en az :value karakter olmalıdır.',
],
'lt' => [
    'array'   => ':attribute alanı :value\'dan daha az öğe içermelidir.',
    'file'    => ':attribute alanı :value kilobayttan küçük olmalıdır.',
    'numeric' => ':attribute alanı :value\'dan küçük olmalıdır.',
    'string'  => ':attribute alanı :value karakterden daha kısa olmalıdır.',
],
'lte' => [
    'array'   => ':attribute alanı en fazla :value öğe içermelidir.',
    'file'    => ':attribute alanı en fazla :value kilobayt olmalıdır.',
    'numeric' => ':attribute alanı en fazla :value olmalıdır.',
    'string'  => ':attribute alanı en fazla :value karakter olmalıdır.',
],
'max' => [
    'array'   => ':attribute alanı en fazla :max öğe içermelidir.',
    'file'    => ':attribute alanı en fazla :max kilobayt olmalıdır.',
    'numeric' => ':attribute alanı en fazla :max olmalıdır.',
    'string'  => ':attribute alanı en fazla :max karakter olmalıdır.',
],
'min' => [
    'array'   => ':attribute alanı en az :min öğe içermelidir.',
    'file'    => ':attribute alanı en az :min kilobayt olmalıdır.',
    'numeric' => ':attribute alanı en az :min olmalıdır.',
    'string'  => ':attribute alanı en az :min karakter olmalıdır.',
],
'size' => [
    'array'   => ':attribute alanı :size öğe içermelidir.',
    'file'    => ':attribute alanı :size kilobayt olmalıdır.',
    'numeric' => ':attribute alanı :size olmalıdır.',
    'string'  => ':attribute alanı :size karakter olmalıdır.',
],
'password' => [
    'letters'       => ':attribute alanı en az bir harf içermelidir.',
    'mixed'         => ':attribute alanı en az bir büyük harf ve bir küçük harf içermelidir.',
    'numbers'       => ':attribute alanı en az bir rakam içermelidir.',
    'symbols'       => ':attribute alanı en az bir sembol içermelidir.',
    'uncompromised' => 'Verilen :attribute bir veri sızıntısında göründü. Lütfen farklı bir :attribute seçin.',
],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

/*
|--------------------------------------------------------------------------
| Custom

