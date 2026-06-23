<?php

return [
    'appsettings' => [
        'comment' => [
            'author' => '提供此面板导出的 Egg 所使用的电子邮件地址。这应该是一个有效的电子邮件地址。',
            'url' => '根据您是否使用 SSL，应用程序 URL 必须以 https:// 或 http:// 开头。如果不包含协议，您的电子邮件和其他内容将链接到错误的位置。',
            'timezone' => '时区应匹配 PHP 支持的时区之一。如果您不确定，请参考 https://php.net/manual/en/timezones.php。',
        ],
        'redis' => [
            'note' => '您已为一个或多个选项选择了 Redis 驱动程序，请在下方提供有效的连接信息。在大多数情况下，您可以使用提供的默认值，除非您修改了设置。',
            'comment' => '默认情况下，本地运行且无法从外部访问的 Redis 服务器实例其用户名为 default 且没有密码。如果是这种情况，只需按回车键而无需输入值。',
            'confirm' => '似乎已为 Redis 定义了 :field，您想要更改它吗？',
        ],
    ],
    'database_settings' => [
        'DB_HOST_note' => '强烈建议不要使用 "localhost" 作为您的数据库主机，因为我们已发现频繁的套接字连接问题。如果您想要使用本地连接，您应该使用 "127.0.0.1"。',
        'DB_USERNAME_note' => '不仅强烈反对在 MySQL 连接中使用 root 账户，而且此应用程序也不允许这样做。您需要为此软件创建一个 MySQL 用户。',
        'DB_PASSWORD_note' => '似乎您已经定义了 MySQL 连接密码，您想要更改它吗？',
        'DB_error_2' => '您的连接凭据尚未保存。在继续之前，您需要提供有效的连接信息。',
        'go_back' => '返回并重试',
    ],
    'make_node' => [
        'name' => '输入一个简短的标识符，用于将此节点与其他节点区分开来',
        'description' => '输入描述以标识该节点',
        'scheme' => '请为 SSL 连接输入 https 或为非 SSL 连接输入 http',
        'fqdn' => '输入用于连接到守护进程的域名（例如 node.example.com）。只有当您没有为此节点使用 SSL 时，才能使用 IP 地址',
        'public' => '此节点应该是公开的吗？请注意，将节点设置为私有将导致您无法向此节点自动部署。',
        'behind_proxy' => '您的 FQDN 是否在代理后面？',
        'maintenance_mode' => '是否应该启用维护模式？',
        'memory' => '输入最大内存量',
        'memory_overallocate' => '输入超额分配的内存量，-1 将禁用检查，0 将阻止创建新服务器',
        'disk' => '输入最大磁盘空间',
        'disk_overallocate' => '输入超额分配的磁盘空间量，-1 将禁用检查，0 将阻止创建新服务器',
        'cpu' => '输入最大 CPU 量',
        'cpu_overallocate' => '输入超额分配的 CPU 量，-1 将禁用检查，0 将阻止创建新服务器',
        'upload_size' => '输入最大上传文件大小',
        'daemonListen' => '输入守护进程监听端口',
        'daemonConnect' => '输入守护进程连接端口（可以与监听端口相同）',
        'daemonSFTP' => '输入守护进程 SFTP 监听端口',
        'daemonSFTPAlias' => '输入守护进程 SFTP 别名（可以为空）',
        'daemonBase' => '输入基本文件夹',
        'success' => '已成功创建名为 :name 的新节点，其 ID 为 :id',
    ],
    'node_config' => [
        'error_not_exist' => '所选节点不存在。',
        'error_invalid_format' => '指定的格式无效。有效的选项为 yaml 和 json。',
    ],
    'key_generate' => [
        'error_already_exist' => '似乎您已经配置了应用程序加密密钥。继续执行此过程将覆盖该密钥，并导致任何现有加密数据损坏。除非您知道自己在做什么，否则请勿继续。',
        'understand' => '我了解运行此命令的后果，并对加密数据的丢失承担全部责任。',
        'continue' => '您确定要继续吗？更改应用程序加密密钥将导致数据丢失。',
    ],
    'schedule' => [
        'process' => [
            'no_tasks' => '没有需要运行的服务器计划任务。',
            'error_message' => '处理计划任务时出错： :schedules',
        ],
    ],
];
