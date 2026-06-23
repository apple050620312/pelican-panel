<?php

return [
    'user' => [
        'search_users' => '输入用户名、用户 ID 或电子邮件地址',
        'select_search_user' => '要删除的用户 ID（输入 \'0\' 重新搜索）',
        'deleted' => '成功从面板中删除用户。',
        'confirm_delete' => '您确定要从面板中删除此用户吗？',
        'no_users_found' => '找不到提供的搜索词的用户。',
        'multiple_found' => '找到提供的用户的多个帐户，由于 --no-interaction 标志，无法删除用户。',
        'ask_admin' => '此用户是管理员吗？',
        'ask_email' => '电子邮件地址',
        'ask_username' => '用户名',
        'ask_password' => '密码',
        'ask_password_tip' => '如果您希望创建一个包含随机密码的帐户并将其通过电子邮件发送给用户，请重新运行此命令 (CTRL+C) 并传递 `--no-password` 标志。',
        'ask_password_help' => '密码长度必须至少为 8 个字符，并且至少包含一个大写字母和数字。',
        '2fa_help_text' => '如果已启用，此命令将禁用用户帐户的双重身份验证。仅当用户被锁定在帐户之外时，此命令才应用作帐户恢复命令。如果这不是您想要执行的操作，请按 CTRL+C 退出此过程。',
        '2fa_disabled' => '已为 :email 禁用双重身份验证。',
    ],
    'schedule' => [
        'output_line' => '为 `:schedule` (:id) 中的第一个任务分派作业。',
    ],
    'maintenance' => [
        'deleting_service_backup' => '删除服务备份文件 :file。',
    ],
    'server' => [
        'rebuild_failed' => '对节点 ":node" 上的 ":name" (#:id) 发出的重建请求失败，错误： :message',
        'reinstall' => [
            'failed' => '对节点 ":node" 上的 ":name" (#:id) 发出的重新安装请求失败，错误： :message',
            'confirm' => '您即将对一组服务器进行重新安装。您希望继续吗？',
        ],
        'power' => [
            'confirm' => '您即将对 :count 台服务器执行 :action 操作。您希望继续吗？',
            'action_failed' => '对节点 ":node" 上的 ":name" (#:id) 发出的电源操作请求失败，错误： :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP 主机（例如 smtp.gmail.com）',
            'ask_smtp_port' => 'SMTP 端口',
            'ask_smtp_username' => 'SMTP 用户名',
            'ask_smtp_password' => 'SMTP 密码',
            'ask_mailgun_domain' => 'Mailgun 域名',
            'ask_mailgun_endpoint' => 'Mailgun 端点',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API 密钥',
            'ask_driver' => '应使用哪个驱动程序发送电子邮件？',
            'ask_mail_from' => '电子邮件发件人地址',
            'ask_mail_name' => '电子邮件发件人名称',
            'ask_encryption' => '要使用的加密方法',
        ],
    ],
];
