<?php
return [
    'title' => '健康狀況',
    'results_refreshed' => '健康檢查結果已更新',
    'checked' => '檢查了 :time 的結果',
    'refresh' => '重新整理',
    'results' => [
        'cache' => [
            'label' => '快取',
            'ok' => '正常',
            'failed_retrieve' => '無法設定或取得應用程式快取值。',
            'failed' => '應用程式快取發生例外狀況：:error',
        ],
        'database' => [
            'label' => '資料庫',
            'ok' => '正常',
            'failed' => '無法連線至資料庫：:error',
        ],
        'debugmode' => [
            'label' => '除錯模式',
            'ok' => '除錯模式已停用',
            'failed' => '除錯模式預期為 :expected，但實際上是 :actual',
        ],
        'environment' => [
            'label' => '環境',
            'ok' => '正常，已設定為 :actual',
            'failed' => '環境已設定為 :actual，預期為 :expected',
        ],
        'nodeversions' => [
            'label' => '節點版本',
            'ok' => '節點是最新的',
            'failed' => ':outdated/:all 節點已過時',
            'no_nodes_created' => '尚未建立節點',
            'no_nodes' => '沒有節點',
            'all_up_to_date' => '全部最新',
            'outdated' => ':outdated/:all 已過時',
        ],
        'panelversion' => [
            'label' => '面板版本',
            'ok' => '面板是最新的',
            'failed' => '安裝的版本為 :currentVersion，但最新版本為 :latestVersion',
            'up_to_date' => '最新',
            'outdated' => '已過時',
        ],
        'schedule' => [
            'label' => '排程',
            'ok' => '正常',
            'failed_last_ran' => '排程的最後一次執行是在超過 :time 分鐘之前',
            'failed_not_ran' => '排程尚未執行。',
        ],
        'useddiskspace' => [
            'label' => '磁碟空間',
        ],
    ],
    'checks' => [
        'successful' => '成功',
        'failed' => '失敗 :checks',
    ],
];
