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
        'password-reset' => '密码已重置',
        'checkpoint' => '请求双重认证',
        'recovery-token' => '使用了双重认证恢复令牌',
        'token' => '通过了双重认证挑战',
        'ip-blocked' => '拒绝了来自未列出 IP 地址的 <b>:identifier</b> 请求',
        'sftp' => [
            'fail' => 'SFTP 登录失败',
        ],
    ],
    'user' => [
        'account' => [
            'username-changed' => '将用户名从 <b>:old</b> 更改为 <b>:new</b>',
            'email-changed' => '将电子邮件从 <b>:old</b> 更改为 <b>:new</b>',
            'password-changed' => '已更改密码',
        ],
        'api-key' => [
            'create' => '创建了新 API 密钥 <b>:identifier</b>',
            'delete' => '删除了 API 密钥 <b>:identifier</b>',
        ],
        'ssh-key' => [
            'create' => '向帐户添加了 SSH 密钥 <b>:fingerprint</b>',
            'delete' => '从帐户中删除了 SSH 密钥 <b>:fingerprint</b>',
        ],
        'two-factor' => [
            'create' => '启用了双重认证',
            'delete' => '禁用了双重认证',
        ],
    ],
    'server' => [
        'console' => [
            'command' => '在服务器上执行了 "<b>:command</b>"',
        ],
        'power' => [
            'start' => '启动了服务器',
            'stop' => '停止了服务器',
            'restart' => '重新启动了服务器',
            'kill' => '强制结束了服务器进程',
        ],
        'backup' => [
            'download' => '下载了 <b>:name</b> 备份',
            'delete' => '删除了 <b>:name</b> 备份',
            'restore' => '恢复了 <b>:name</b> 备份 (删除的文件: <b>:truncate</b>)',
            'restore-complete' => '完成了 <b>:name</b> 备份的恢复',
            'restore-failed' => '无法完成 <b>:name</b> 备份的恢复',
            'start' => '开始了新的备份 <b>:name</b>',
            'complete' => '将 <b>:name</b> 备份标记为完成',
            'fail' => '将 <b>:name</b> 备份标记为失败',
            'lock' => '锁定了 <b>:name</b> 备份',
            'unlock' => '解锁了 <b>:name</b> 备份',
            'rename' => '将备份名称从 "<b>:old_name</b>" 更改为 "<b>:new_name</b>"',
        ],
        'database' => [
            'create' => '创建了新数据库 <b>:name</b>',
            'rotate-password' => '轮换了数据库 <b>:name</b> 的密码',
            'delete' => '删除了数据库 <b>:name</b>',
        ],
        'file' => [
            'compress' => '压缩了 <b>:directory:files</b>|在 <b>:directory</b> 中压缩了 <b>:count</b> 个文件',
            'read' => '查看了 <b>:file</b> 的内容',
            'copy' => '创建了 <b>:file</b> 的副本',
            'create-directory' => '创建了目录 <b>:directory:name</b>',
            'decompress' => '在 <b>:directory</b> 中解压缩了 <b>:file</b>',
            'delete' => '删除了 <b>:directory:files</b>|在 <b>:directory</b> 中删除了 <b>:count</b> 个文件',
            'download' => '下载了 <b>:file</b>',
            'pull' => '将远程文件从 <b>:url</b> 下载到了 <b>:directory</b>',
            'rename' => '将 <b>:from</b> 移动/重命名为 <b>:to</b>|在 <b>:directory</b> 中移动/重命名了 <b>:count</b> 个文件',
            'write' => '向 <b>:file</b> 写入了新内容',
            'upload' => '开始文件上传',
            'uploaded' => '上传了 <b>:directory:file</b>',
        ],
        'sftp' => [
            'denied' => '由于权限问题拒绝了 SFTP 访问',
            'create' => '创建了 <b>:files</b>|创建了 <b>:count</b> 个新文件',
            'write' => '修改了 <b>:files</b> 的内容|修改了 <b>:count</b> 个文件的内容',
            'delete' => '删除了 <b>:files</b>|删除了 <b>:count</b> 个文件',
            'create-directory' => '创建了 <b>:files</b> 目录|创建了 <b>:count</b> 个目录',
            'rename' => '将 <b>:from</b> 重命名为 <b>:to</b>|重命名或移动了 <b>:count</b> 个文件',
        ],
        'allocation' => [
            'create' => '向服务器添加了 <b>:allocation</b>',
            'notes' => '将 <b>:allocation</b> 的备注从 "<b>:old</b>" 更新为 "<b>:new</b>"',
            'primary' => '将 <b>:allocation</b> 设置为主要服务器分配',
            'delete' => '删除了 <b>:allocation</b> 分配',
        ],
        'schedule' => [
            'create' => '创建了 <b>:name</b> 计划',
            'update' => '更新了 <b>:name</b> 计划',
            'execute' => '手动执行了 <b>:name</b> 计划',
            'delete' => '删除了 <b>:name</b> 计划',
        ],
        'task' => [
            'create' => '为 <b>:name</b> 计划创建了新的 "<b>:action</b>" 任务',
            'update' => '更新了 <b>:name</b> 计划的 "<b>:action</b>" 任务',
            'delete' => '删除了 <b>:name</b> 计划的 "<b>:action</b>" 任务',
        ],
        'settings' => [
            'rename' => '将服务器名称从 "<b>:old</b>" 更改为 "<b>:new</b>"',
            'description' => '将服务器描述从 "<b>:old</b>" 更改为 "<b>:new</b>"',
            'reinstall' => '重新安装了服务器',
        ],
        'startup' => [
            'edit' => '将 <b>:variable</b> 变量从 "<b>:old</b>" 更改为 "<b>:new</b>"',
            'image' => '将服务器的 Docker 映像从 <b>:old</b> 更新为 <b>:new</b>',
            'command' => '将服务器的启动命令从 <b>:old</b> 更新为 <b>:new</b>',
        ],
        'subuser' => [
            'create' => '将 <b>:email</b> 添加为子用户',
            'update' => '更新了 <b>:email</b> 的子用户权限',
            'delete' => '将 <b>:email</b> 从子用户中移除',
        ],
        'mount' => [
            'update' => '更新了服务器的挂载',
        ],
        'crashed' => '服务器崩溃',
    ],
];
