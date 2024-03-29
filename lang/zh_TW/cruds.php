<?php

return [
    'user_management' => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'title'              => '標題',
            'title_helper'       => '',
            'permissions'        => '權限',
            'permissions_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                       => '編號',
            'id_helper'                => '',
            'name'                     => '名稱',
            'name_helper'              => '',
            'email'                    => '電子郵件',
            'email_helper'             => '',
            'email_verified_at'        => '電子郵件驗證時間',
            'email_verified_at_helper' => '',
            'password'                 => '密碼',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '記住令牌',
            'remember_token_helper'    => '',
            'created_at'               => '建立時間',
            'created_at_helper'        => '',
            'updated_at'               => '更新時間',
            'updated_at_helper'        => '',
            'deleted_at'               => '刪除時間',
            'deleted_at_helper'        => '',
        ],
    ],
    'setting'        => [
        'title'          => '設定',
        'title_singular' => '設定',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'key'               => '鍵',
            'key_helper'        => '',
            'value'             => '值',
            'value_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'speaker'        => [
        'title'          => '講師',
        'title_singular' => '講師',
        'fields'         => [
            'id'                      => '編號',
            'id_helper'               => '',
            'name'                    => '名稱',
            'name_helper'             => '',
            'description'             => '描述',
            'description_helper'      => '',
            'photo'                   => '照片',
            'photo_helper'            => '',
            'twitter'                 => 'Twitter',
            'twitter_helper'          => '',
            'facebook'                => 'Facebook',
            'facebook_helper'         => '',
            'linkedin'                => 'LinkedIn',
            'linkedin_helper'         => '',
            'created_at'              => '建立時間',
            'created_at_helper'       => '',
            'updated_at'              => '更新時間',
            'updated_at_helper'       => '',
            'deleted_at'              => '刪除時間',
            'deleted_at_helper'       => '',
            'full_description'        => '完整描述',
            'full_description_helper' => '',
        ],
    ],
    'schedule'       => [
        'title'          => '流程',
        'title_singular' => '流程',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'day_number'        => '日數',
            'day_number_helper' => '',
            'start_time'        => '開始時間',
            'start_time_helper' => '',
            'title'             => '標題',
            'title_helper'      => '',
            'subtitle'          => '次標題',
            'subtitle_helper'   => '',
            'speaker'           => '講師',
            'speaker_helper'    => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'venue'          => [
        'title'          => '場地',
        'title_singular' => '場地',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'name'               => '名稱',
            'name_helper'        => '',
            'photos'             => '照片',
            'photos_helper'      => '',
            'address'            => '地址',
            'address_helper'     => '',
            'latitude'           => '緯度',
            'latitude_helper'    => '',
            'longitude'          => '經度',
            'longitude_helper'   => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
            'description'        => '描述',
            'description_helper' => '',
        ],
    ],
    'hotel'          => [
        'title'          => '旅館',
        'title_singular' => '旅館',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'name'               => '名稱',
            'name_helper'        => '',
            'photo'              => '照片',
            'photo_helper'       => '',
            'address'            => '地址',
            'address_helper'     => '',
            'description'        => '描述',
            'description_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
            'rating'             => '評鑑',
            'rating_helper'      => '',
        ],
    ],
    'gallery'        => [
        'title'          => '活動花絮',
        'title_singular' => '活動花絮',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'photos'            => '照片',
            'photos_helper'     => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'sponsor'        => [
        'title'          => '贊助商',
        'title_singular' => '贊助商',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'logo'              => '標章',
            'logo_helper'       => '',
            'link'              => '超連結',
            'link_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'faq'            => [
        'title'          => '常見問題',
        'title_singular' => '常見問題',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'question'          => '問題',
            'question_helper'   => '',
            'answer'            => '解答',
            'answer_helper'     => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'amenity'        => [
        'title'          => '設施',
        'title_singular' => '設施',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'price'          => [
        'title'          => '價格',
        'title_singular' => '價格',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'price'             => '價格',
            'price_helper'      => '',
            'amenities'         => '設施',
            'amenities_helper'  => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
];
