<?php /* Smarty version 2.6.27, created on 2017-04-05 13:57:48
         compiled from /vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/sample/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/sample/index.tpl', 5, false),array('modifier', 'escape', '/vagrant/www/eccube-2.13.5-pgsql/html/../data/Smarty/templates/default/sample/index.tpl', 6, false),)), $this); ?>
<!--▼CONTENTS-->
<div id="undercolumn">
    <div id="undercolumn_aboutus">It works!</div>

    <?php if (((is_array($_tmp=$this->_tpl_vars['arrRet'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
    ニュースタイトル:<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRet']['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<BR>
    ニュースコメント:<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRet']['news_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

    <?php endif; ?>

    <hr>
    <?php if (((is_array($_tmp=$this->_tpl_vars['arrRetMulti'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrRetMulti'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
            製品名[<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRetMulti'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]
            コメント[<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRetMulti'][$this->_sections['cnt']['index']]['main_list_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]<BR>
        <?php endfor; endif; ?>
    <?php endif; ?>

</div>

<!--▲CONTENTS-->
