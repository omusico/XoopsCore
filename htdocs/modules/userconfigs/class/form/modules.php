<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author          trabis <lusopoemas@gmail.com>
 * @package         userconfigs
 * @version         $Id$
 */

defined('XOOPS_ROOT_PATH') or die('Restricted access');

class UserconfigsModulesForm extends XoopsThemeForm
{
    /**
     * @param null $obj
     */
    public function __construct($obj = null)
    {
    }

    /**
     * @param XoopsModule|null $mod
     */
    public function getModulesForm($mod = null)
    {
        $xoops = Xoops::getInstance();
        $mid = 0;
        if ($mod instanceof XoopsModule) {
            $mid = $mod->getVar('mid');
        }
        /* @var $plugin UserconfigsPluginInterface */
        if ($plugins = Xoops_Module_Plugin::getPlugins('userconfigs')) {
            parent::__construct('', 'pref_form', 'index.php', 'post', true, 'inline');

            $ele = new XoopsFormSelect(_MD_USERCONFIGS_CHOOSE_MODULE, 'mid', $mid);
            foreach (array_keys($plugins) as $dirname) {
                $mHelper = $xoops->getModuleHelper($dirname);
                $ele->addOption($mHelper->getModule()->getVar('mid'), $mHelper->getModule()->getVar('name'));
            }
            $this->addElement($ele);
            $this->addElement(new XoopsFormHidden('op', 'showmod'));
            $this->addElement(new XoopsFormButton('', 'button', XoopsLocale::A_SUBMIT, 'submit'));
        }
    }
}
