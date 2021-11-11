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
define( 'DB_NAME', 'thi_that_wp' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&@Z)z|02X?mn M%Y,,%.pJBDt6j9lIzGo7=f8W*IV]<~0Q1!p!jpHOg5=_Tto!P#' );
define( 'SECURE_AUTH_KEY',  'Nw12t;GKTckS-7,pvlrO7#r&S{?{)3H|Rf3X=#^KaULDbiK2b7UGCZI] [:yko~W' );
define( 'LOGGED_IN_KEY',    'mmB@XU<d1K0uvz<VA&j:UNL-n*ns-/#&HU@6%Nq@8gn dq(_*TX}`}lTW Ak~#SD' );
define( 'NONCE_KEY',        '*c]XXW}|jxsP#}O+ob@voYM?dF<N{%Jr7jvtzgYl4cHDr^QpZT$$8>]G#ZoczIYW' );
define( 'AUTH_SALT',        '{!``[/Y@-kFOB4R!ODc$6<! EJ=zN=! Kl7e/ZZ^uL_p_epR7T|ac:Mb2J``I0{H' );
define( 'SECURE_AUTH_SALT', 'xE|!Xq+dX?DaA#MTrHDq}|zW-,!>x=u}:1L)!bL2uLZA(1Bcqwm~O.5>y5bbnY`m' );
define( 'LOGGED_IN_SALT',   'AJSSg6Q><9nrf-EZM*^u^{PR^X*3h)[q{/`1l^Y*IfyWq^-j?bHUO|88NvF=54d%' );
define( 'NONCE_SALT',       'N~,[:yF[V9%>:x0?-_r{= o,<z_m]U=>Kvi+(U{_H7dNi;y!a`A:V9.F|p;0Br,j' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
