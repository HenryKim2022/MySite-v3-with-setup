-- -- DB Host     : localhost
-- -- DB Port     : 3306
-- -- DB Name     : itir9421_hkcodo
-- -- DB Username : root
-- -- DB Password : 

CREATE TABLE IF NOT EXISTS tb_frontpage_widget(
	id_widget VARCHAR(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	widget_name TEXT(50) NOT NULL,
	widget_status ENUM('active', 'not_active', 'active_at', 'expired_at'),
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);
INSERT INTO tb_frontpage_widget(widget_name, widget_status)
VALUES 
    ('Featured Widget 1', 'active'),
    ('Featured Widget 2', 'not_active'),
    ('Featured Widget 3', 'active_at'),
    ('Featured Widget 4', 'expired_at');
