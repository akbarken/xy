/**
 * Database schema required by CDbAuthManager.
 *
 * @author Esen Sagynov <kadishmal@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @since 1.1.14
 */

/*   'itemTable' => 'xy_auth_item',
            'itemChildTable' => 'xy_auth_item_child',
            'assignmentTable' => 'xy_auth_assignment',*/

drop table if exists `xy_auth_assignment`;
drop table if exists `xy_auth_item_child`;
drop table if exists `AuthItem`;

create table `xy_auth_item`
(
   `name`                 varchar(64) not null,
   `type`                 integer not null,
   `description`          varchar(4096),
   `bizrule`              varchar(4096),
   `data`                  varchar(4096),,
   primary key (`name`)
);

create table `xy_auth_item_child`
(
   `parent`               varchar(64) not null,
   `child`                varchar(64) not null,
   primary key (`parent`,`child`),
   foreign key (`parent`) references `xy_auth_item` (`name`) on delete cascade on update restrict,
   foreign key (`child`) references `xy_auth_item` (`name`) on delete cascade on update restrict
);

create table `xy_auth_assignment`
(
   `itemname`             varchar(64) not null,
   `userid`               varchar(64) not null,
   `bizrule`              varchar(4096),
   `data`                  varchar(4096),
   primary key (`itemname`,`userid`),
   foreign key (`itemname`) references `xy_auth_item` (`name`) on delete cascade on update restrict
);
