<?php

return [
    'nav_title' => '数据库主机',
    'model_label' => '数据库主机',
    'model_label_plural' => '数据库主机',
    'table' => [
        'database' => '数据库',
        'name' => '名称',
        'host' => '主机',
        'port' => '端口',
        'name_helper' => '留空将自动生成一个随机名称',
        'username' => '用户名',
        'password' => '密码',
        'remote' => '连接来源',
        'remote_helper' => '允许来自何处的连接。留空以允许来自任何地方的连接。',
        'max_connections' => '最大连接数',
        'created_at' => '创建时间',
        'connection_string' => 'JDBC 连接字符串',
    ],
    'error' => '连接到主机时出错',
    'host' => '主机',
    'host_help' => '尝试从此面板连接到此 MySQL 主机以创建新数据库时应使用的 IP 地址或域名。',
    'port' => '端口',
    'port_help' => 'MySQL 在此主机上运行的端口。',
    'max_database' => '最大数据库数量',
    'max_databases_help' => '可在此主机上创建的数据库最大数量。如果达到限制，将无法在此主机上创建新数据库。留空则无限制。',
    'display_name' => '显示名称',
    'display_name_help' => '将显示给最终用户的 IP 地址或域名。',
    'username' => '用户名',
    'username_help' => '具有在系统上创建新用户和数据库的足够权限的账户用户名。',
    'password' => '密码',
    'password_help' => '数据库用户的密码。',
    'linked_nodes' => '已链接节点',
    'linked_nodes_help' => '此设置仅在向所选节点上的服务器添加数据库时，默认使用此数据库主机。',
    'connection_error' => '连接到数据库主机时出错',
    'no_database_hosts' => '没有数据库主机',
    'no_databases' => '没有数据库',
    'no_nodes' => '没有节点',
    'nodes' => '节点',
    'delete_help' => '数据库主机已有数据库',
    'unlimited' => '无限制',
    'anywhere' => '任何地方',

    'rotate' => '轮换',
    'rotate_password' => '轮换密码',
    'rotated' => '密码已轮换',
    'rotate_error' => '密码轮换失败',
    'databases' => '数据库',

    'setup' => [
        'preparations' => '准备工作',
        'database_setup' => '数据库设置',
        'panel_setup' => '面板设置',

        'note' => '目前，数据库主机仅支持 MySQL/MariaDB 数据库！',
        'different_server' => '面板和数据库<i>不</i>在同一台服务器上吗？',

        'database_user' => '数据库用户',
        'cli_login' => '使用 <code>mysql -u root -p</code> 访问 mysql cli。',
        'command_create_user' => '创建用户的命令',
        'command_assign_permissions' => '分配权限的命令',
        'cli_exit' => '要退出 mysql cli，请运行 <code>exit</code>。',
        'external_access' => '外部访问',
        'allow_external_access' => '
                                    <p>您很可能需要允许对此 MySQL 实例进行外部访问，以便允许服务器连接到它。</p>
                                    <br>
                                    <p>要做到这一点，请打开 <code>my.cnf</code>，它的位置根据您的操作系统和安装 MySQL 的方式而有所不同。您可以输入 <code>find /etc -iname my.cnf</code> 来找到它。</p>
                                    <br>
                                    <p>打开 <code>my.cnf</code>，将以下文本添加至文件底部并保存：<br>
                                    <code>[mysqld]<br>bind-address=0.0.0.0</code></p>
                                    <br>
                                    <p>重启 MySQL/MariaDB 以应用这些更改。这将会覆盖默认的 MySQL 配置，默认配置下仅接受来自 localhost 的请求。更新此项将允许在所有接口上进行连接，进而允许外部连接。请确保在防火墙中放行 MySQL 端口（默认 3306）。</p>
                                ',
    ],
];
