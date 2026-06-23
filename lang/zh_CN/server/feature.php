<?php

return [
    'restart_now' => '服务器现在将重新启动。',
    'close' => '关闭',

    'eula' => [
        'heading' => 'Minecraft EULA',
        'description' => '点击下方的“我接受”，即表示您同意 <x-filament::link href="https://minecraft.net/eula" target="_blank">Minecraft EULA</x-filament::link>。',
        'accept' => '我接受',
        'accepted' => '已接受 Minecraft EULA',
        'failed' => '无法接受 Minecraft EULA',
    ],

    'gsl_token' => [
        'heading' => '无效的 GSL 令牌',
        'description' => '您的游戏服务器登录令牌 (GSL Token) 似乎无效或已过期。',
        'submit' => '更新 GSL 令牌',
        'info' => '您可以 <x-filament::link href="https://steamcommunity.com/dev/managegameservers" target="_blank">生成一个新的</x-filament::link> 并将其输入到下方，或将该字段留空以将其完全删除。',
        'updated' => 'GSL 令牌已更新',
        'failed' => '无法更新 GSL 令牌',
    ],

    'java_version' => [
        'heading' => '不支持的 Java 版本',
        'description' => '此服务器目前运行的 Java 版本不受支持，无法启动。',
        'submit' => '更新 Docker 镜像',
        'select_version' => '请从以下列表中选择受支持的版本以继续启动服务器。',
        'docker_image' => 'Docker 镜像',
        'updated' => 'Docker 镜像已更新',
        'failed' => '无法更新 Docker 镜像',
    ],

    'pid_limit' => [
        'heading_admin' => '达到内存或进程限制...',
        'heading_user' => '可能已达到资源限制...',
        'description_admin' => '<p>此服务器已达到最大进程或内存限制。</p><p class="mt-4">增加 Wings 配置 <code>config.yml</code> 中的 <code>container_pid_limit</code> 可能会帮助解决此问题。</p><p class="mt-4"><b>注意：必须重新启动 Wings 才能使配置文件更改生效</b></p>',
        'description_user' => '<p>此服务器正试图使用比分配更多的资源。请联系管理员并将以下错误信息提供给他们。</p><p class="mt-4"><code>pthread_create failed, Possibly out of memory or process/resource limits reached</code></p>',
    ],

    'steam_disk_space' => [
        'heading' => '可用磁盘空间不足...',
        'description_admin' => '<p>此服务器的可用磁盘空间已耗尽，无法完成安装或更新过程。</p><p class="mt-4">在托管此服务器的机器上键入 <code class="rounded py-1 px-2">df -h</code>，确保机器有足够的磁盘空间。删除文件或增加可用磁盘空间以解决该问题。</p>',
        'description_user' => '<p>此服务器的可用磁盘空间已耗尽，无法完成安装或更新过程。请与管理员联系并告知他们磁盘空间问题。</p>',
    ],
];
