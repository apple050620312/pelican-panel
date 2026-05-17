<?php
return [
    'appsettings' => [
        'comment' => [
            'author' => '提供从此 Panel 导出的 Egg 的发件人电子邮件地址。这必须是一个有效的电子邮件地址。',
            'url' => '根据您是否使用 SSL，应用程序 URL 必须以 https:// 或 http:// 开头。如果您不包含此协议，您的电子邮件和其他内容将链接到错误的位置。',
            'timezone' => '时区应与 PHP 支持的时区之一匹配。如果您不确定，请参考 https://php.net/manual/zh/timezones.php。',
        ],
        'redis' => [
            'note' => '您为一个或多个选项选择了 Redis 驱动程序，请在下方提供有效的连接信息。在大多数情况下，除非您修改了设置，否则可以使用提供的默认值。',
            'comment' => '默认情况下，Redis 服务器实例的用户名为 default 且没有密码，因为它在本地运行且无法从外部访问。如果是这种情况，只需按 Enter 键而不输入任何值即可。',
            'confirm' => '似乎已经为 Redis 定义了 :field，您想更改它吗？',
        ],
    ],
    'database_settings' => [
        'DB_HOST_note' => '强烈建议不要将 "localhost" 用作您的数据库主机，因为我们经常看到套接字连接问题。如果要使用本地连接，则应使用 "127.0.0.1"。',
        'DB_USERNAME_note' => '将 root 帐户用于 MySQL 连接不仅非常不受欢迎，而且此应用程序也不允许这样做。您需要为此软件创建一个特定的 MySQL 用户。',
        'DB_PASSWORD_note' => '似乎您已经定义了 MySQL 连接密码，您想更改它吗？',
        'DB_error_2' => '您的连接凭据尚未保存。在继续之前，您需要提供有效的连接信息。',
        'go_back' => '返回并重试',
    ],
    'make_node' => [
        'name' => '输入一个简短的标识符，用于将此 Node 与其他 Node 区分开来',
        'description' => '输入用于识别此 Node 的描述',
        'scheme' => '请为 SSL 连接输入 https 或为非 SSL 连接输入 http',
        'fqdn' => '输入用于连接到 Daemon 的域名 (例如 node.example.com)。仅当您不使用 SSL 时才能使用 IP 地址',
        'public' => '此 Node 应该是公开的吗？请注意，将 Node 设置为私有将拒绝自动部署到此 Node 的功能。',
        'behind_proxy' => '您的 FQDN 是否在代理后面？',
        'maintenance_mode' => '是否应该启用维护模式？',
        'memory' => '输入最大内存量',
        'memory_overallocate' => '输入内存超额分配的量，-1 将禁用检查，0 将阻止创建新服务器',
        'disk' => '输入最大磁盘空间',
        'disk_overallocate' => '输入磁盘超额分配的量，-1 将禁用检查，0 将阻止创建新服务器',
        'cpu' => '输入最大 CPU 量',
        'cpu_overallocate' => '输入 CPU 超额分配的量，-1 将禁用检查，0 将阻止创建新服务器',
        'upload_size' => '输入最大上传文件大小',
        'daemonListen' => '输入 Daemon 监听端口',
        'daemonConnect' => '输入 Daemon 连接端口 (可以与监听端口相同)',
        'daemonSFTP' => '输入 Daemon SFTP 监听端口',
        'daemonSFTPAlias' => '输入 Daemon SFTP 别名 (可以为空)',
        'daemonBase' => '输入基本文件夹',
        'success' => '成功创建了名为 :name 且 ID 为 :id 的新 Node',
    ],
    'node_config' => [
        'error_not_exist' => '选择的 Node 不存在。',
        'error_invalid_format' => '指定的格式无效。有效的选项是 yaml 和 json。',
    ],
    'key_generate' => [
        'error_already_exist' => '似乎您已经配置了应用程序加密密钥。继续此过程将覆盖该密钥，并导致任何现有加密数据的数据损坏。除非您知道自己在做什么，否则请勿继续。',
        'understand' => '我了解执行此命令的后果，并对加密数据的丢失承担所有责任。',
        'continue' => '您确定要继续吗？更改应用程序加密密钥将导致数据丢失。',
    ],
    'schedule' => [
        'process' => [
            'no_tasks' => '没有需要运行的服务器计划任务。',
            'error_message' => '处理计划时遇到错误：:schedules',
        ],
    ],
];
