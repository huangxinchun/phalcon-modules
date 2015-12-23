<?php echo $this->getContent(); ?>
<form method="post" action="/install/index/start">
	<div class="con_top">
		数据库配置
	</div>
	<div class="content_center">
		<div class="sql_style">
			<span class="sql_title">数据库配置信息</span>
			<ul>
				<li>
					<span class="file">数据库IP地址:</span>
					<input type="text" name="host" size="25" value=<?php echo $host; ?> >
					<span >端口:</span>
					<input type="text" name="port" size="10" value=<?php echo $port; ?>>
				</li>
				<li>
					<span class="file">数据库用户名:</span>
					<input type="text" name="username" size="25" value=<?php echo $username; ?> >
				</li>
				<li>
					<span class="file">数据库密码:</span>
					<input type="password" name="dbPassword" size="25" value=<?php echo $dbPassword; ?> >
				</li>
				<li>
					<span class="file">数据库名:</span>
					<input type="text" name="dbName" size="25" value=<?php echo $dbName; ?> >
				</li>
				<li>
					<span class="file">数据表前缀:</span>
					<input type="text" name="dbPrefix" size="25" value=<?php echo $dbPrefix; ?> >
					<span >安装多个请修改前缀</span>
				</li>
			</ul>
		</div>
		<div class="admin_msg">
			<span class="sql_title">网站信息设置</span>
			<ul>
				<li>
					<span class="file">管理员账号:</span>
					<input type="text" name="adminName" size="25" value=<?php echo $adminName; ?> >
				</li>
				<li>
					<span class="file">管理员密码:</span>
					<input type="password" name="password" size="25" value=<?php echo $password; ?> >
				</li>
				<li>
					<span class="file">管理员邮箱:</span>
					<input type="text" name="email" size="25" value=<?php echo $email; ?> >
				</li>
			</ul>
		</div>
	</div>
	<div class="content_botton">
		<div class="btn">
			<input class="btn_next" type="submit" value="提交">
		</div>
	</div>

</form>