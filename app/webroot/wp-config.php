<?php
/**
 * WordPress���������ļ���
 *
 * ����ļ�����װ���������Զ�����wp-config.php�����ļ���
 * �����Բ�ʹ����վ������Ҫ�ֶ���������ļ���
 * ��������Ϊ��wp-config.php����Ȼ�����������Ϣ��
 *
 * ���ļ�������������ѡ�
 *
 * * MySQL����
 * * ��Կ
 * * ���ݿ����ǰ׺
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** WordPress���ݿ������ */
define('DB_NAME', 'default');

/** MySQL���ݿ��û��� */
define('DB_USER', 'cakephp');

/** MySQL���ݿ����� */
define('DB_PASSWORD', 'yhz7504188');

/** MySQL���� */
define('DB_HOST', 'mysql');

/** �������ݱ�ʱĬ�ϵ����ֱ��� */
define('DB_CHARSET', 'utf8mb4');

/** ���ݿ��������͡��粻ȷ��������� */
define('DB_COLLATE', '');

/**#@+
 * �����֤��Կ���Ρ�
 *
 * �޸�Ϊ�����һ�޶����ִ���
 * ����ֱ�ӷ���{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org��Կ���ɷ���}
 * �κ��޸Ķ��ᵼ������cookiesʧЧ�������û����������µ�¼��
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#/*gzoQCpxAKy{:j^yXk&ZDX)5NS/F+$&kwLZtoJdv{^U>Zqx0=!=*zb?_98-{}I');
define('SECURE_AUTH_KEY',  '2B}3mv4c-V Vc-$L?qcEO0`YTR`=so}oe;X*PQlEgeie/&]h<^X]IR,HMJ7TP5on');
define('LOGGED_IN_KEY',    'NsHcwOxE-J:Em@Ta,^nIY,iQ5H$#Z0):loC^@](2APzi%jGZ&wHtU~K@WcV5{M%_');
define('NONCE_KEY',        'E-AgZ-J6mR-Ldcp5}WeZ7]LuCPjK7NZ``w%fk^}=?6Q78 L&a$w*W<^T{`i(L U)');
define('AUTH_SALT',        'px+CidY&_Q@O>a}!5zh3cJN>}|fm*$0M8xt1CbV|LoP!8.!D%e8Ju.6J}Mg$4#wa');
define('SECURE_AUTH_SALT', ';gS08RKB]N-a#U 2KRDn7D|Blb8.P<NV]$TCMw$6(5z,3o5>U.!nAro[>#5Z`P<&');
define('LOGGED_IN_SALT',   '#p$!$M;Sr*2Vmg*/[_~d)gOD 6zzQ!Ga&OmrN7pT;[3Z#L`>i0u!{D( lpL[u;<@');
define('NONCE_SALT',       '5}:^/f/gI+xjxEgiJb=^ud)VCeT@@6A:x;v-<5[4(JR<`Q1+R7@4-pQkz$Qo:}W|');

/**#@-*/

/**
 * WordPress���ݱ�ǰ׺��
 *
 * ���������ͬһ���ݿ��ڰ�װ���WordPress��������Ϊÿ��WordPress����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
$table_prefix  = 'wp_';

/**
 * ������ר�ã�WordPress����ģʽ��
 *
 * �����ֵ��Ϊtrue��WordPress����ʾ�������ڿ�������ʾ��
 * ǿ�ҽ������������ڿ�������������WP_DEBUG��
 *
 * Ҫ��ȡ���������ڵ��Ե���Ϣ�������Codex��
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN���ػ����ã�����ICP��������ʾ
 *
 * �������á��������޸ġ�
 * ������ã����Ƴ���ע�͵����С�
 */
define('WP_ZH_CN_ICP_NUM', true);

/* ���ˣ��벻Ҫ�ټ����༭���뱣�汾�ļ���ʹ����죡 */

/** WordPressĿ¼�ľ���·���� */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ����WordPress�����Ͱ����ļ��� */
require_once(ABSPATH . 'wp-settings.php');
