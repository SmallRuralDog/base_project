# Laravel 项目基本搭建

### 环境要求
- php 7.2 +
- mysql 5.7 +
- Nginx、Apache
- Redis

### 第一步：下载项目，安装扩展
```
git clone --depth=1 https://github.com/SmallRuralDog/base_project.git my-project

cd my-project

composer install
```
### 第二部：配置env


创建一个空数据库 ，将`/database/sql.sql` 导入

`.env.example` 复制一份为 `.env`，并配置好

执行 `php artisan key:generate`


执行 `php artisan passport:install`

完成



