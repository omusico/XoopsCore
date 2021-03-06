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
 * Userconfigs
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id$
 */

defined("XOOPS_ROOT_PATH") or die("XOOPS root path not defined");

/**
 * A Config-Option
 *
 * @author    Kazumi Ono    <onokazu@xoops.org>
 * @copyright    copyright (c) 2000-2003 XOOPS.org
 *
 * @package     kernel
 */
class UserconfigsOption extends XoopsObject
{
    /**
     * Constructor
     */
    function __construct()
    {
        $this->initVar('confop_id', XOBJ_DTYPE_INT, null);
        $this->initVar('confop_name', XOBJ_DTYPE_TXTBOX, null, true, 255);
        $this->initVar('confop_value', XOBJ_DTYPE_TXTBOX, null, true, 255);
        $this->initVar('conf_id', XOBJ_DTYPE_INT, 0);
    }

    /**
     * @param string $format
     * @return mixed
     */
    public function id($format = 'n')
    {
        return $this->getVar('confop_id', $format);
    }

    /**
     * @param string $format
     * @return mixed
     */
    public function confop_id($format = '')
    {
        return $this->getVar('confop_id', $format);
    }

    /**
     * @param string $format
     * @return mixed
     */
    public function confop_name($format = '')
    {
        return $this->getVar('confop_name', $format);
    }

    /**
     * @param string $format
     * @return mixed
     */
    public function confop_value($format = '')
    {
        return $this->getVar('confop_value', $format);
    }

    /**
     * @param string $format
     * @return mixed
     */
    public function conf_id($format = '')
    {
        return $this->getVar('conf_id', $format);
    }

}

class UserconfigsOptionHandler extends XoopsPersistableObjectHandler
{
    /**
     * Constructor
     *
     * @param XoopsConnection|null $db {@link XoopsConnection}
     */
    public function __construct(XoopsConnection $db = null)
    {
        parent::__construct($db, 'userconfigs_option', 'UserconfigsOption', 'confop_id', 'confop_name');
    }
}