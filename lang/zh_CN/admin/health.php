<?php
return [
    'title' => '运行状况',
    'results_refreshed' => '健康检查结果已更新',
    'checked' => '已检查 :time 的结果',
    'refresh' => '刷新',
    'results' => [
        'cache' => [
            'label' => '缓存',
            'ok' => '正常',
            'failed_retrieve' => '无法设置或检索应用程序缓存值。',
            'failed' => '应用程序缓存发生异常：:error',
        ],
        'database' => [
            'label' => '数据库',
            'ok' => '正常',
            'failed' => '无法连接到数据库：:error',
        ],
        'debugmode' => [
            'label' => '调试模式',
            'ok' => '调试模式已禁用',
            'failed' => '预期调试模式为 :expected，但实际为 :actual',
        ],
        'environment' => [
            'label' => '环境',
            'ok' => '正常，设置为 :actual',
            'failed' => '环境设置为 :actual，预期为 :expected',
        ],
        'nodeversions' => [
            'label' => 'Node 版本',
            'ok' => 'Node 已是最新',
            'failed' => ':outdated/:all 个 Node 已过期',
            'no_nodes_created' => '未创建任何 Node',
            'no_nodes' => '没有 Node',
            'all_up_to_date' => '全部最新',
            'outdated' => ':outdated/:all 已过期',
        ],
        'panelversion' => [
            'label' => 'Panel 版本',
            'ok' => 'Panel 已是最新',
            'failed' => '安装的版本是 :currentVersion，但最新版本是 :latestVersion',
            'up_to_date' => '已是最新',
            'outdated' => '已过期',
        ],
        'schedule' => [
            'label' => '计划任务',
            'ok' => '正常',
            'failed_last_ran' => '计划任务的最后一次运行是在超过 :time 分钟前',
            'failed_not_ran' => '计划任务尚未运行。',
        ],
        'useddiskspace' => [
            'label' => '磁盘空间',
        ],
    ],
    'checks' => [
        'successful' => '成功',
        'failed' => '失败 :checks',
    ],
];
