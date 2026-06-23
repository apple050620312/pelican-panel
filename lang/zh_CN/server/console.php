<?php

return [
    'title' => '控制台',
    'command' => '输入命令...',
    'command_blocked' => '服务器已离线...',
    'command_blocked_title' => '服务器离线时无法发送命令',
    'open_in_admin' => '在管理区打开',
    'power_actions' => [
        'start' => '启动',
        'stop' => '停止',
        'restart' => '重启',
        'kill' => '强制停止',
        'kill_tooltip' => '这可能会导致数据损坏和/或数据丢失！',
    ],
    'labels' => [
        'cpu' => 'CPU',
        'memory' => '内存',
        'network' => '网络',
        'disk' => '磁盘',
        'name' => '名称',
        'status' => '状态',
        'address' => '地址',
        'unavailable' => '不可用',
    ],
    'status' => [
        'created' => '已创建',
        'starting' => '启动中',
        'running' => '运行中',
        'restarting' => '重启中',
        'exited' => '已退出',
        'paused' => '已暂停',
        'dead' => '已终止',
        'removing' => '移除中',
        'stopping' => '停止中',
        'offline' => '离线',
        'missing' => '缺失',
    ],
    'websocket_error' => [
        'title' => '无法连接到 websocket！',
        'body' => '请检查浏览器控制台以获取更多详细信息。',
    ],
];
