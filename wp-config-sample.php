<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'mndxnyci97ipjbdq');

/** Username của database */
define('DB_USER', 'jeje0w4x7zsboc6q');

/** Mật khẩu của database */
define('DB_PASSWORD', 'hy5p5ozyj5khsw9p');

/** Hostname của database */
define('DB_HOST', 'nivk0hz7m5elq4ql.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm&b2Vm<.#:X;7*LRD>=VLZ31{JYBz1$XPJ$A3nBMUh6OZnM*g/4BE`UiB-)$##m|');
define('SECURE_AUTH_KEY',  'x+h}yxnl-&a|2Q_ilOV>pR[9h5w$EI#|Pv^q1**Hue9oV//?2+%YN,Q7`4pRnM5F');
define('LOGGED_IN_KEY',    '&/F+L,,5|]c:g54WgE--p``J#a~ B;j,N_3V=VlaTaS|vpypo1f(c6C9CeAiDKxT');
define('NONCE_KEY',        '+WuMMcM<8OXC2t#=]X<Y;)@ZW*7pePl,[o%Sub?~^(x fQnm=m|J3Z]~M^xRYB&c');
define('AUTH_SALT',        'R-$4/tCNwbK6]fv|xldhgCb)a6+:x[BfVIC;eh+0xDf`dGY`4(*|jbe;-YUhECjX');
define('SECURE_AUTH_SALT', 'ZVwWh7os*-(4xp;C_SS0w#GEk5to)+LVA8V!%k,jr!>u(B2Tm`%cL;z~1;{8~t!{');
define('LOGGED_IN_SALT',   'P^WmmQ]EMJYLVDa(s8XK9Y.w#51%4-DPr{4px-3^b^ZSZsH#|(DHF58;%+;n?U*}');
define('NONCE_SALT',       'A vq h65LJgf6).sfGg+NCiC2jxUhSy,x}t|~G|*n/B^%k {5-vinT8f~r:|$+/B');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
