<?php/** * WordPress基础配置文件。 * * 这个文件被安装程序用于自动生成wp-config.php配置文件， * 您可以不使用网站，您需要手动复制这个文件， * 并重命名为“wp-config.php”，然后填入相关信息。 * * 本文件包含以下配置选项： * * * MySQL设置 * * 密钥 * * 数据库表名前缀 * * ABSPATH * * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php * * @package WordPress */
// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** ///** WordPress数据库的名称 */define('DB_NAME', 'default');
/** MySQL数据库用户名 */define('DB_USER', 'cakephp');
/** MySQL数据库密码 */define('DB_PASSWORD', 'yhz7504188');
/** MySQL主机 */define('DB_HOST', 'mysql');
/** 创建数据表时默认的文字编码 */define('DB_CHARSET', 'utf8mb4');
/** 数据库整理类型。如不确定请勿更改 */define('DB_COLLATE', '');
/**#@+ * 身份认证密钥与盐。 * * 修改为任意独一无二的字串！ * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ * WordPress.org密钥生成服务} * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。 * * @since 2.6.0 */define('AUTH_KEY',         '#/*gzoQCpxAKy{:j^yXk&ZDX)5NS/F+$&kwLZtoJdv{^U>Zqx0=!=*zb?_98-{}I');define('SECURE_AUTH_KEY',  '2B}3mv4c-V Vc-$L?qcEO0`YTR`=so}oe;X*PQlEgeie/&]h<^X]IR,HMJ7TP5on');define('LOGGED_IN_KEY',    'NsHcwOxE-J:Em@Ta,^nIY,iQ5H$#Z0):loC^@](2APzi%jGZ&wHtU~K@WcV5{M%_');define('NONCE_KEY',        'E-AgZ-J6mR-Ldcp5}WeZ7]LuCPjK7NZ``w%fk^}=?6Q78 L&a$w*W<^T{`i(L U)');define('AUTH_SALT',        'px+CidY&_Q@O>a}!5zh3cJN>}|fm*$0M8xt1CbV|LoP!8.!D%e8Ju.6J}Mg$4#wa');define('SECURE_AUTH_SALT', ';gS08RKB]N-a#U 2KRDn7D|Blb8.P<NV]$TCMw$6(5z,3o5>U.!nAro[>#5Z`P<&');define('LOGGED_IN_SALT',   '#p$!$M;Sr*2Vmg*/[_~d)gOD 6zzQ!Ga&OmrN7pT;[3Z#L`>i0u!{D( lpL[u;<@');define('NONCE_SALT',       '5}:^/f/gI+xjxEgiJb=^ud)VCeT@@6A:x;v-<5[4(JR<`Q1+R7@4-pQkz$Qo:}W|');
/**#@-*/
/** * WordPress数据表前缀。 * * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。 */$table_prefix  = 'wp_';
/** * 开发者专用：WordPress调试模式。 * * 将这个值改为true，WordPress将显示所有用于开发的提示。 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。 * * 要获取其他能用于调试的信息，请访问Codex。 * * @link https://codex.wordpress.org/Debugging_in_WordPress */define('WP_DEBUG', false);
/** * zh_CN本地化设置：启用ICP备案号显示 * * 可在设置→常规中修改。 * 如需禁用，请移除或注释掉本行。 */define('WP_ZH_CN_ICP_NUM', true);
/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */
/** WordPress目录的绝对路径。 */if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');
/** 设置WordPress变量和包含文件。 */require_once(ABSPATH . 'wp-settings.php');
