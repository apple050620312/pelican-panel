<?php

return [
    'title' => '面板安装程序',
    'requirements' => [
        'title' => '服务器要求',
        'sections' => [
            'version' => [
                'title' => 'PHP 版本',
                'or_newer' => ':version 或更高版本',
                'content' => '您的 PHP 版本是 :version。',
            ],
            'extensions' => [
                'title' => 'PHP 扩展',
                'good' => '已安装所有需要的 PHP 扩展。',
                'bad' => '缺少以下 PHP 扩展： :extensions',
            ],
            'permissions' => [
                'title' => '文件夹权限',
                'good' => '所有文件夹都具有正确的权限。',
                'bad' => '以下文件夹的权限错误： :folders',
            ],
        ],
        'exception' => '缺少部分要求',
    ],
    'environment' => [
        'title' => '环境',
        'fields' => [
            'app_name' => '应用名称',
            'app_name_help' => '这将是您面板的名称。',
            'app_url' => '应用 URL',
            'app_url_help' => '这将是您访问面板的 URL。',
            'account' => [
                'section' => '管理员用户',
                'email' => '电子邮件',
                'username' => '用户名',
                'password' => '密码',
            ],
        ],
    ],
    'database' => [
        'title' => '数据库',
        'driver' => '数据库驱动',
        'driver_help' => '用于面板数据库的驱动程序。我们建议使用 "SQLite"。',
        'fields' => [
            'host' => '数据库主机',
            'host_help' => '您的数据库主机。请确保它是可访问的。',
            'port' => '数据库端口',
            'port_help' => '您的数据库端口。',
            'path' => '数据库路径',
            'path_help' => '您的 .sqlite 文件相对于数据库文件夹的路径。',
            'name' => '数据库名称',
            'name_help' => '面板数据库的名称。',
            'username' => '数据库用户名',
            'username_help' => '您的数据库用户的名称。',
            'password' => '数据库密码',
            'password_help' => '您的数据库用户的密码。可以为空。',
        ],
        'exceptions' => [
            'connection' => '数据库连接失败',
            'migration' => '数据库迁移失败',
        ],
    ],
    'egg' => [
        'title' => 'Egg',
        'no_eggs' => '没有可用的 Egg',
        'background_install_started' => 'Egg 安装已开始',
        'background_install_description' => '已将 :count 个 Egg 的安装加入队列，将继续在后台进行。',
        'exceptions' => [
            'failed_to_update' => '更新 Egg 索引失败',
            'no_eggs' => '目前没有可安装的 Egg。',
            'installation_failed' => '安装选定的 Egg 失败。请在安装后通过 Egg 列表导入它们。',
        ],
    ],
    'session' => [
        'title' => '会话',
        'driver' => '会话驱动',
        'driver_help' => '用于存储会话的驱动程序。我们建议使用 "Filesystem" 或 "Database"。',
    ],
    'cache' => [
        'title' => '缓存',
        'driver' => '缓存驱动',
        'driver_help' => '用于缓存的驱动程序。我们建议使用 "Filesystem"。',
        'fields' => [
            'host' => 'Redis 主机',
            'host_help' => '您的 Redis 服务器的主机。请确保它是可访问的。',
            'port' => 'Redis 端口',
            'port_help' => '您的 Redis 服务器的端口。',
            'username' => 'Redis 用户名',
            'username_help' => '您的 Redis 用户的名称。可以为空。',
            'password' => 'Redis 密码',
            'password_help' => '您的 Redis 用户的密码。可以为空。',
        ],
        'exception' => 'Redis 连接失败',
    ],
    'queue' => [
        'title' => '队列',
        'driver' => '队列驱动',
        'driver_help' => '用于处理队列的驱动程序。我们建议使用 "Database"。',
        'fields' => [
            'done' => '我已经完成了以下两个步骤。',
            'done_validation' => '您必须在继续之前完成这两个步骤！',
            'crontab' => '运行以下命令来设置您的 crontab。请注意 <code>www-data</code> 是您的 Web 服务器用户。在某些系统上，此用户名可能不同！',
            'service' => '要设置队列工作进程服务，您只需运行以下命令。',
        ],
    ],
    'exceptions' => [
        'write_env' => '无法写入 .env 文件',
        'migration' => '无法运行数据库迁移',
        'create_user' => '无法创建管理员用户',
    ],
    'finish' => '完成',
];
