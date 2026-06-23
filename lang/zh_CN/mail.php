<?php

return [
    'greeting' => '你好 :name！',

    'account_created' => [
        'body' => '您收到此电子邮件是因为在 :app 上为您创建了账户。',
        'username' => '用户名： :username',
        'email' => '电子邮件： :email',
        'action' => '设置您的账户',
    ],

    'added_to_server' => [
        'body' => '您已被添加为以下服务器的子用户，从而允许您对服务器拥有某些控制权。',
        'server_name' => '服务器名称： :name',
        'action' => '访问服务器',
    ],

    'removed_from_server' => [
        'body' => '您已被移除以下服务器的子用户身份。',
        'server_name' => '服务器名称： :name',
        'action' => '访问面板',
    ],

    'server_installed' => [
        'body' => '您的服务器已完成安装，现在可以使用了。',
        'server_name' => '服务器名称： :name',
        'action' => '登录并开始使用',
    ],

    'backup_completed' => [
        'body_success' => '备份已成功创建。',
        'body_failed' => '备份创建失败。',
        'backup_name' => '备份名称： :name',
        'server_name' => '服务器名称： :name',
        'action' => '查看备份',
    ],

    'mail_tested' => [
        'subject' => '面板测试消息',
        'body' => '这是面板邮件系统的测试。您已经准备就绪！',
    ],
];
