<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => '登录失败',
        'success' => '已登录',
        'password-reset' => '重置了密码',
        'checkpoint' => '请求双重认证',
        'recovery-token' => '使用了双重认证恢复令牌',
        'token' => '通过了双重认证验证',
        'ip-blocked' => '拒绝了来自未列出 IP 地址对 <b>:identifier</b> 的请求',
        'sftp' => [
            'fail' => 'SFTP 登录失败',
        ],
    ],
    'user' => [
        'account' => [
            'username-changed' => '将用户名从 <b>:old</b> 更改为了 <b>:new</b>',
            'email-changed' => '将邮箱从 <b>:old</b> 更改为了 <b>:new</b>',
            'password-changed' => '更改了密码',
        ],
        'api-key' => [
            'create' => '创建了新的 API 密钥 <b>:identifier</b>',
            'delete' => '删除了 API 密钥 <b>:identifier</b>',
        ],
        'ssh-key' => [
            'create' => '将 SSH 密钥 <b>:fingerprint</b> 添加到了账户',
            'delete' => '从账户中移除了 SSH 密钥 <b>:fingerprint</b>',
        ],
        'two-factor' => [
            'create' => '启用了双重认证',
            'delete' => '禁用了双重认证',
        ],
    ],
    'server' => [
        'console' => [
            'command' => '在服务器上运行了 "<b>:command</b>"',
        ],
        'power' => [
            'start' => '启动了服务器',
            'stop' => '停止了服务器',
            'restart' => '重启了服务器',
            'kill' => '强制结束了服务器进程',
        ],
        'backup' => [
            'download' => '下载了备份 <b>:name</b>',
            'delete' => '删除了备份 <b>:name</b>',
            'restore' => '恢复了备份 <b>:name</b> （已删除的文件： <b>:truncate</b>）',
            'restore-complete' => '完成了备份 <b>:name</b> 的恢复',
            'restore-failed' => '未能完成备份 <b>:name</b> 的恢复',
            'start' => '启动了新备份 <b>:name</b>',
            'complete' => '已将备份 <b>:name</b> 标记为完成',
            'fail' => '已将备份 <b>:name</b> 标记为失败',
            'lock' => '锁定了备份 <b>:name</b>',
            'unlock' => '解锁了备份 <b>:name</b>',
            'rename' => '将备份名称从 "<b>:old_name</b>" 更改为了 "<b>:new_name</b>"',
        ],
        'database' => [
            'create' => '创建了新数据库 <b>:name</b>',
            'rotate-password' => '轮换了数据库 <b>:name</b> 的密码',
            'delete' => '删除了数据库 <b>:name</b>',
        ],
        'file' => [
            'compress' => '压缩了 <b>:directory:files</b>|压缩了 <b>:directory</b> 中的 <b>:count</b> 个文件',
            'read' => '查看了 <b>:file</b> 的内容',
            'copy' => '创建了 <b>:file</b> 的副本',
            'create-directory' => '创建了目录 <b>:directory:name</b>',
            'decompress' => '在 <b>:directory</b> 中解压了 <b>:file</b>',
            'delete' => '删除了 <b>:directory:files</b>|删除了 <b>:directory</b> 中的 <b>:count</b> 个文件',
            'download' => '下载了 <b>:file</b>',
            'pull' => '将远程文件从 <b>:url</b> 下载到了 <b>:directory</b>',
            'rename' => '将 <b>:from</b> 移动/重命名为了 <b>:to</b>|移动/重命名了 <b>:directory</b> 中的 <b>:count</b> 个文件',
            'write' => '将新内容写入了 <b>:file</b>',
            'upload' => '开始了文件上传',
            'uploaded' => '上传了 <b>:directory:file</b>',
        ],
        'sftp' => [
            'denied' => '因权限原因被拒绝了 SFTP 访问',
            'create' => '创建了 <b>:files</b>|创建了 <b>:count</b> 个新文件',
            'write' => '修改了 <b>:files</b> 的内容|修改了 <b>:count</b> 个文件的内容',
            'delete' => '删除了 <b>:files</b>|删除了 <b>:count</b> 个文件',
            'create-directory' => '创建了 <b>:files</b> 目录|创建了 <b>:count</b> 个目录',
            'rename' => '将 <b>:from</b> 重命名为了 <b>:to</b>|重命名或移动了 <b>:count</b> 个文件',
        ],
        'allocation' => [
            'create' => '为服务器添加了分配 <b>:allocation</b>',
            'notes' => '将分配 <b>:allocation</b> 的备注从 "<b>:old</b>" 更改为了 "<b>:new</b>"',
            'primary' => '将 <b>:allocation</b> 设置为了主要服务器分配',
            'delete' => '删除了分配 <b>:allocation</b>',
        ],
        'schedule' => [
            'create' => '创建了计划任务 <b>:name</b>',
            'update' => '更新了计划任务 <b>:name</b>',
            'execute' => '手动运行了计划任务 <b>:name</b>',
            'delete' => '删除了计划任务 <b>:name</b>',
        ],
        'task' => [
            'create' => '为计划任务 <b>:name</b> 创建了新的 "<b>:action</b>" 任务',
            'update' => '更新了计划任务 <b>:name</b> 的 "<b>:action</b>" 任务',
            'delete' => '删除了计划任务 <b>:name</b> 的 "<b>:action</b>" 任务',
        ],
        'settings' => [
            'rename' => '将服务器名称从 "<b>:old</b>" 更改为了 "<b>:new</b>"',
            'description' => '将服务器描述从 "<b>:old</b>" 更改为了 "<b>:new</b>"',
            'reinstall' => '重新安装了服务器',
        ],
        'startup' => [
            'edit' => '将 <b>:variable</b> 变量从 "<b>:old</b>" 更改为了 "<b>:new</b>"',
            'image' => '将服务器的 Docker 镜像从 <b>:old</b> 更新为了 <b>:new</b>',
            'command' => '将服务器的启动命令从 <b>:old</b> 更新为了 <b>:new</b>',
        ],
        'subuser' => [
            'create' => '添加了 <b>:email</b> 作为子用户',
            'update' => '更新了 <b>:email</b> 的子用户权限',
            'delete' => '移除了 <b>:email</b> 这个子用户',
        ],
        'mount' => [
            'update' => '更新了服务器的挂载点',
        ],
        'crashed' => '服务器崩溃',
    ],
];
