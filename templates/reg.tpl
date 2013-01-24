<link rel="stylesheet" href="/res/css/passwordStrength.css">
<form>
	<h2>注册</h2>
	<div class="control-group">
		<label class="control-label" for="uname">用户名</label>
		<div class="controls">
			<input type="text" class="input-xlarge" id="uname" name="uname">
			<p class="help-block">可以使用数字、字母和下划线。</p>
		</div>
	</div>
	<div class="control-group">
		<lavel class="control-label">您的电子邮箱</lavel>
		<div class="controls">
			<input type="email" name="email" class="input-xlarge" id="email" >
			<p class="help-block">电子邮箱将被用于发送通知和找回密码<br>请务必准确填写。</p>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="passwd">选择一个密码</label>
		<div class="controls">
			<input type="password" class="input-xlarge" id="passwd" name="passwd">
			<p class="help-block">可以使用数字、字母和下划线。</p>
			<input type="password" class="input-xlarge" id="repasswd" name="repasswd">
			<p class="help-block">请重新输入一次。</p>
		</div>
	</div>
	<button class="btn btn-primary btn-large pull-right" type="submit">创建账号</button>
</form>