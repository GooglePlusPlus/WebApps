<div class="container">
	<form class="form-signin" onsubmit="return false;">
		<h2 class="form-signin-heading">登录</h2>
		{if isset($error)}
			<div class="alert alert-error">
  				<a class="close" data-dismiss="alert">×</a>
  				<strong>{$error}</strong>
			</div>
		{/if}
		<div class="control-group {if isset($error)}error{/if}">
			<input type="text" placeholder="用户名" class="input-block-level" name="uname">
		</div>
		<div class="control-group {if isset($error)}error{/if}">
			<input type="password" placeholder="密码" class="input-block-level" name="passwd">
		</div>
		<label class="checkbox"><input type="checkbox" value="remember-me" name="stay">保持登录状态</label>
		<button class="btn btn-large btn-primary" type="submit">登录</button>
		<b class="pull-right reg" style="padding-top:1em">
			没有账号？点此注册
		</b>
	</form>
</div>