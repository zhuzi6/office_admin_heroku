<?php
return [
	//全局账号相关配置
	'accounts'=>[
		[
			'name'=>getenv("a_name"),
			'client_id'=> getenv("b_client_id"),
			'tenant_id'=> getenv("b_tenant_id"),
			'client_secret'=> getenv("b_client_secret"),
			'sku_ids'=>[
				'a1学生'=>'314c4481-f395-4525-be8b-2ec4bb1e9d91',
				'a1教职工'=>'94763226-9b3c-4e75-a931-5c89701abe66',
				'a1p学生'=>'e82ae690-a2d5-4d76-8d30-7c6e01e6022e',
				'a1p教职工'=>'78e66a63-337a-4a9a-8959-41c6654dfb56',
                                'Microsoft Teams Exploratory Trial'=>'710779e8-3d4a-4c88-adb9-386c958d1fdf'
			],
		],
		
	],
	
	

	'locations'=>[//自己配置，写了几个我常用的
		'中国'=>'CN',
		'台湾'=>'TW',
		'香港'=>'HK',
		'日本'=>'JP',
		'美国'=>'US',
		'新加坡'=>'SG',
		'英国'=>'GB'
	],
	
	//后台相关配置
	'admin'=>[
		'username'=>getenv("username"),
		'password'=>getenv("userpasswd"),//自行输入密码 https://md5jiami.51240.com/  将32位 小写结果填入
		'invitation_code_num'=>'8',//随机生成的邀请码位数
	],
];
