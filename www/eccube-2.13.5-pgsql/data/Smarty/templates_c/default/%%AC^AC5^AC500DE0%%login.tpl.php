<?php /* Smarty version 2.6.27, created on 2017-03-31 13:33:42
         compiled from /vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 26, false),array('modifier', 'h', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 30, false),array('modifier', 'n2s', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 36, false),array('modifier', 'default', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 36, false),array('modifier', 'sfGetChecked', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 51, false),)), $this); ?>

<?php echo '<div class="block_outer"><div id="login_area"><h2><img src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/title/tit_bloc_login.gif" alt="ログイン" /></h2><form name="login_form" id="login_form" method="post" action="'; ?><?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'frontparts/login_check.php"'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ' onsubmit="return eccube.checkLoginFormInputted(\'login_form\')"'; ?><?php endif; ?><?php echo '><input type="hidden" name="'; ?><?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" /><input type="hidden" name="mode" value="login" /><input type="hidden" name="url" value="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['REQUEST_URI'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '" /><div class="block_body">'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo '<p>ようこそ<br /><span class="user_name">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' 様</span><br />'; ?><?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?><?php echo '所持ポイント：<span class="point"> '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_user_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('n2s', true, $_tmp) : smarty_modifier_n2s($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?><?php echo ' pt</span>'; ?><?php endif; ?><?php echo '</p>'; ?><?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_disable_logout'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo '<p class="btn"><input type="image" class="hover_change_image" src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/button/btn_bloc_logout.jpg" onclick="eccube.fnFormModeSubmit(\'login_form\', \'logout\', \'\', \'\'); return false;" alt="ログアウト" /></p>'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '<dl class="formlist"><dt>メールアドレス</dt><dd><input type="text" name="login_email" class="box140" value="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '" style="ime-mode: disabled;" /></dd><dd class="mini"><input type="checkbox" name="login_memory" id="login_memory" value="1" '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_memory'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetChecked', true, $_tmp, 1) : SC_Utils_Ex::sfGetChecked($_tmp, 1)); ?><?php echo ' /><label for="login_memory"><span>コンピューターに記憶する</span></label></dd></dl><dl class="formlist"><dt class="password">パスワード</dt><dd><input type="password" name="login_pass" class="box140" /></dd><dd class="mini"><a href="'; ?><?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'forgot/'; ?><?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" onclick="eccube.openWindow(\''; ?><?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'forgot/'; ?><?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '\',\'forget\',\'600\',\'400\',{scrollbars:\'no\',resizable:\'no\'}); return false;" target="_blank">パスワードを忘れた方はこちら</a></dd></dl><p class="btn"><input type="image" class="hover_change_image" src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/button/btn_bloc_login.jpg" alt="ログイン" /></p>'; ?><?php endif; ?><?php echo '</div></form></div></div>'; ?>
