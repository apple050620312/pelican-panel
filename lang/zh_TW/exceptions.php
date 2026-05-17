<?php
return [
    'daemon_connection_failed' => '嘗試與 Daemon 通訊時發生例外狀況，導致 HTTP/:code 回應代碼。此例外狀況已記錄。',
    'node' => [
        'servers_attached' => '節點必須沒有連結任何伺服器才能被刪除。',
        'error_connecting' => '連線至 :node 時發生錯誤',
        'daemon_off_config_updated' => 'Daemon 設定<strong>已更新</strong>，但在嘗試自動更新 Daemon 上的設定檔時發生錯誤。您需要手動更新 Daemon 的設定檔 (config.yml) 以套用這些變更。',
    ],
    'allocations' => [
        'server_using' => '目前有伺服器分配到此連接埠分配。只有在沒有伺服器分配的情況下才能刪除連接埠分配。',
        'too_many_ports' => '不支援一次在單一範圍內新增超過 1000 個連接埠。',
        'invalid_mapping' => '為 :port 提供的映射無效，無法處理。',
        'cidr_out_of_range' => 'CIDR 標記法僅允許介於 /25 和 /32 之間的遮罩。',
        'port_out_of_range' => '分配中的連接埠必須大於或等於 1024 且小於或等於 65535。',
    ],
    'egg' => [
        'delete_has_servers' => '無法從面板中刪除連接有作用中伺服器的 Egg。',
        'invalid_copy_id' => '選擇從中複製腳本的 Egg 不存在，或者其本身正在複製腳本。',
        'has_children' => '此 Egg 是一個或多個其他 Egg 的父代。請在刪除此 Egg 之前刪除那些 Egg。',
    ],
    'variables' => [
        'env_not_unique' => '環境變數 :name 必須對此 Egg 來說是唯一的。',
        'reserved_name' => '環境變數 :name 受保護，不能分配給變數。',
        'bad_validation_rule' => '驗證規則 ":rule" 對於此應用程式不是有效的規則。',
    ],
    'importer' => [
        'json_error' => '嘗試解析 JSON 檔案時發生錯誤：:error。',
        'file_error' => '提供的 JSON 檔案無效。',
        'invalid_json_provided' => '提供的 JSON 檔案格式無法識別。',
    ],
    'subusers' => [
        'editing_self' => '不允許編輯您自己的子使用者帳戶。',
        'user_is_owner' => '您無法將伺服器擁有者新增為此伺服器的子使用者。',
        'subuser_exists' => '使用該電子郵件地址的使用者已被分配為此伺服器的子使用者。',
    ],
    'databases' => [
        'delete_has_databases' => '無法刪除連結有作用中資料庫的資料庫主機伺服器。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '鏈結任務的最大間隔時間為 15 分鐘。',
    ],
    'locations' => [
        'has_nodes' => '無法刪除連接有作用中節點的位置。',
    ],
    'users' => [
        'is_self' => '無法刪除您自己的使用者帳戶。',
        'has_servers' => '無法刪除帳戶連接有作用中伺服器的使用者。請在繼續之前刪除他們的伺服器。',
        'node_revocation_failed' => '無法在 <a href=":link">節點 #:node</a> 上撤銷金鑰。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '找不到符合自動部署指定要求的節點。',
        'no_viable_allocations' => '找不到符合自動部署要求的分配。',
    ],
    'api' => [
        'resource_not_found' => '請求的資源在此伺服器上不存在。',
    ],
    'mount' => [
        'servers_attached' => '掛載必須沒有連接任何伺服器才能被刪除。',
    ],
    'server' => [
        'marked_as_failed' => '此伺服器尚未完成其安裝過程，請稍後再試。',
    ],
];
