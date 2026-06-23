<?php

return [
    'nav_title' => '角色',
    'model_label' => '角色',
    'model_label_plural' => '角色',
    'no_roles' => '无角色',
    'name' => '角色名称',
    'permissions' => '权限',
    'in_use' => '使用中',
    'all' => '全部',
    'root_admin' => ':role 拥有所有权限。',
    'root_admin_delete' => '无法删除超级管理员',
    'users' => '用户',
    'nodes' => '节点',
    'nodes_hint' => '留空以允许访问所有节点。',

    // Permission section headings (RolePermissionModels enum + special permission groups)
    'models' => [
        'apiKey' => 'API 密钥',
        'allocation' => '分配',
        'databaseHost' => '数据库主机',
        'database' => '数据库',
        'egg' => 'Egg',
        'mount' => '挂载',
        'node' => '节点',
        'role' => '角色',
        'server' => '服务器',
        'user' => '用户',
        'webhook' => 'Webhook',
        'settings' => '设置',
        'health' => '运行状况',
        'activityLog' => '活动日志',
        'panelLog' => '面板日志',
        'plugin' => '插件',
    ],

    // Permission checkbox labels (RolePermissionPrefixes enum + model-specific/special prefixes)
    'permissions_list' => [
        'viewList' => '查看列表',
        'view' => '查看',
        'create' => '创建',
        'update' => '更新',
        'delete' => '删除',
        'import' => '导入',
        'export' => '导出',
        'seeIps' => '查看 IP',
    ],
];
