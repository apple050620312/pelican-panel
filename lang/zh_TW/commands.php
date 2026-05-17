<?php
return [
    'appsettings' => [
        'comment' => [
            'author' => '提供此面板匯出之 Egg 所應使用的電子郵件地址。這應該是一個有效的電子郵件地址。',
            'url' => '應用程式 URL 必須以 https:// 或 http:// 開頭，取決於您是否使用 SSL。如果您不包含前綴，您的電子郵件和其他內容將連結到錯誤的位置。',
            'timezone' => "時區應與 PHP 支援的時區之一相符。如果您不確定，請參考 https://php.net/manual/en/timezones.php。",
        ],
        'redis' => [
            'note' => '您已為一個或多個選項選擇了 Redis 驅動程式，請在下方提供有效的連線資訊。在多數情況下，除非您修改了設定，否則您可以使用提供的預設值。',
            'comment' => '預設情況下，Redis 伺服器實例的使用者名稱為 default 且沒有密碼，因為它是在本機執行且無法從外部存取。如果是這種情況，只需按下 Enter 鍵而不輸入值。',
            'confirm' => '似乎已經為 Redis 定義了 :field，您想要變更它嗎？',
        ],
    ],
    'database_settings' => [
        'DB_HOST_note' => '強烈建議不要使用 "localhost" 作為您的資料庫主機，因為我們已經看過頻繁的 Socket 連線問題。如果您想使用本機連線，您應該使用 "127.0.0.1"。',
        'DB_USERNAME_note' => "在此應用程式中不僅不建議使用 root 帳戶進行 MySQL 連線，這也是不允許的。您需要為此軟體建立一個 MySQL 使用者。",
        'DB_PASSWORD_note' => '您似乎已經定義了 MySQL 連線密碼，您想要變更它嗎？',
        'DB_error_2' => '您的連線憑證尚未儲存。您需要提供有效的連線資訊才能繼續。',
        'go_back' => '返回並重試',
    ],
    'make_node' => [
        'name' => '輸入一個簡短的識別碼，用於區分此節點與其他節點',
        'description' => '輸入描述以識別該節點',
        'scheme' => '請為 SSL 連線輸入 https，或為非 SSL 連線輸入 http',
        'fqdn' => '輸入要用於連接到 Daemon 的網域名稱 (例如 node.example.com)。只有當您未在此節點上使用 SSL 時才可使用 IP 位址',
        'public' => '此節點應該是公開的嗎？請注意，將節點設定為私有將拒絕自動部署到此節點的功能。',
        'behind_proxy' => '您的 FQDN 是否位於 Proxy 後方？',
        'maintenance_mode' => '是否應啟用維護模式？',
        'memory' => '輸入最大記憶體量',
        'memory_overallocate' => '輸入要超額分配的記憶體量，-1 將停用檢查，0 將阻止建立新伺服器',
        'disk' => '輸入最大磁碟空間量',
        'disk_overallocate' => '輸入要超額分配的磁碟量，-1 將停用檢查，0 將阻止建立新伺服器',
        'cpu' => '輸入最大 CPU 量',
        'cpu_overallocate' => '輸入要超額分配的 CPU 量，-1 將停用檢查，0 將阻止建立新伺服器',
        'upload_size' => '輸入最大上傳檔案大小',
        'daemonListen' => '輸入 Daemon 監聽連接埠',
        'daemonConnect' => '輸入 Daemon 連線連接埠 (可以與監聽連接埠相同)',
        'daemonSFTP' => '輸入 Daemon SFTP 監聽連接埠',
        'daemonSFTPAlias' => '輸入 Daemon SFTP 別名 (可以為空)',
        'daemonBase' => '輸入基礎資料夾',
        'success' => '成功建立名為 :name 且 ID 為 :id 的新節點',
    ],
    'node_config' => [
        'error_not_exist' => '選擇的節點不存在。',
        'error_invalid_format' => '指定的格式無效。有效的選項為 yaml 和 json。',
    ],
    'key_generate' => [
        'error_already_exist' => '您似乎已經設定了應用程式加密金鑰。繼續此程序將覆寫該金鑰並導致任何現有加密資料損毀。如果您不知道自己在做什麼，請勿繼續。',
        'understand' => '我了解執行此命令的後果，並接受加密資料遺失的所有責任。',
        'continue' => '您確定要繼續嗎？變更應用程式加密金鑰將導致資料遺失。',
    ],
    'schedule' => [
        'process' => [
            'no_tasks' => '伺服器沒有需要執行的排程任務。',
            'error_message' => '處理排程時發生錯誤：:schedules',
        ],
    ],
];
