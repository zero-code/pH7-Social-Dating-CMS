<?php
/**
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2012-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / Game / Config
 */
namespace PH7;
defined('PH7') or die('Restricted access');

use
PH7\Framework\Url\Header,
PH7\Framework\Mvc\Router\Uri;

class Permission extends PermissionCore
{
    public function __construct()
    {
        parent::__construct();

        $bAdminAuth = AdminCore::auth();

        if (!$bAdminAuth || UserCore::isAdminLoggedAs())
        {
            if (!$this->checkMembership() || !$this->group->games_access)
            {
                $this->paymentRedirect();
            }
        }

        if (!$bAdminAuth && $this->registry->controller === 'AdminController')
        {
            // For security reasons, we do not redirectionnons the user to hide the url of the administrative part.
            Header::redirect(Uri::get('game','main','index'), $this->adminSignInMsg(), 'error');
        }
    }
}
