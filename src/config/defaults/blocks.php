<?php

/**
 * DO NOT EDIT THIS FILE.
 *
 * This file is subject to be overwritten by a Blocks update at any time.
 *
 * If you want to change any of these settings, copy it into
 * blocks/config/config.php, and make your change there.
 */

/**
 * Determines whether the system is in dev mode or not.
 */
$blocksConfig['devMode'] = false;

/**
 *
 */
$blocksConfig['resourceTrigger'] = 'resources';

/**
 *
 */
$blocksConfig['actionTrigger'] = 'actions';

/**
 *
 */
$blocksConfig['logoutTriggerWord'] = 'logout';

/**
 * Number of seconds to cache stuff in runtime/.
 *
 * Set to '0' to cache things indefinitely.
 *
 * @see http://www.php.net/manual/en/dateinterval.construct.php
 */
$blocksConfig['cacheDuration'] = 'P1D';

/**
 * Number of seconds to cache stuff in runtime/ when in dev mode.
 *
 * @see http://www.php.net/manual/en/dateinterval.construct.php
 */
$blocksConfig['devModeCacheDuration'] = 'PT5S';

/**
 * How to format the URLs.
 *
 * Possible values:
 *  - 'pathinfo' (index.php/path)
 *  - 'querystring' (index.php?p=path)
 *  - 'auto'
 *
 * If you're not sure whether your server supports PATH_INFO, we recommend you leave this on 'auto'.
 */
$blocksConfig['urlFormat'] = 'auto';

/**
 * If you have Apache's mod_xsendfile installed and configured, set this to 'true' and Blocks will
 * use xSendFile to transfer files.
 */
$blocksConfig['useXSendFile'] = false;

/**
 * The amount of time a user stays logged in.
 *
 * If set to '0', the session will expire when the browser is closed.
 *
 * @see http://www.php.net/manual/en/dateinterval.construct.php
 */
$blocksConfig['userSessionDuration'] = 'PT1H';

/**
 * The amount of time a user stays logged if "Remember Me" is checked.
 *
 * Set to '0' to disable the "Remember Me" feature altogether.
 *
 * @see http://www.php.net/manual/en/dateinterval.construct.php
 */
$blocksConfig['rememberedUserSessionDuration'] = 'P2W';

/**
 * The amount of time we'll remember usernames.
 *
 * Set to '0' to disable this feature altogether.
 *
 * @see http://www.php.net/manual/en/dateinterval.construct.php
 */
$blocksConfig['rememberUsernameDuration'] = 'P1Y';

/**
 * The amount of time a newly generated email verification code will last before expiring.
 *
 * @see http://www.php.net/manual/en/dateinterval.construct.php
 */
$blocksConfig['verificationCodeDuration'] = 'P1D';

/**
 * The number of invalid login attempts within the 'invalidLoginWindowDuration' before the account
 * gets locked.
 */
$blocksConfig['maxInvalidLogins'] = 5;

/**
 * The amount of time to track invalid login attempts for a user.
 *
 * If someone tries to log in too many times in this window, their account will get locked.
 *
 * @see http://www.php.net/manual/en/dateinterval.construct.php
 */
$blocksConfig['invalidLoginWindowDuration'] = 'PT1H';

/**
 * The amount of time a user must wait before logging in after their account is locked.
 *
 * Set to '0' to prevent users from ever being able to log back in without an admin unlocking their
 * account first.
 *
 * @see http://www.php.net/manual/en/dateinterval.construct.php
 */
$blocksConfig['cooldownDuration'] = 'PT5M';

// PHPPass Config
/**
 * Controls the number of iterations for key stretching. A setting of 8 means the hash algorithm
 * will be applied 2^8 = 256 times.
 *
 * This setting should be kept between 4 and 31.
 */
$blocksConfig['phpPass-iterationCount'] = 8;

/**
 * Controls whether to use the minified and merged JavaScript in the resources/js/uncompressed or
 * the resources/js/compressed folder.
 */
$blocksConfig['useCompressedJs'] = true;

/**
 * Controls whether to add the @ symbol around translated strings to help during dubugging.
 */
$blocksConfig['translationDebugOutput'] = false;

$blocksConfig['allowedFileExtensions'] = '7z,aiff,asf,avi,bmp,csv,doc,docx,fla,flv,gif,gz,gzip,htm,html,jpeg,jpg,mid,mov,mp3,mp4,mpc,mpeg,mpg,ods,odt,pdf,png,ppt,pptx,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,swf,sxc,sxw,tar,tgz,tif,tiff,txt,vsd,wav,wma,wmv,xls,xlsx,zip';

/**
 * Error Path Keys
 * 'errorPath'      => blocks.app.templates.errors.error
 * 'error400Path'   => blocks.app.templates.errors.error400
 * 'error403Path'   => blocks.app.templates.errors.error403
 * 'error404Path'   => blocks.app.templates.errors.error404
 * 'error500Path'   => blocks.app.templates.errors.error500
 * 'error503Path'   => blocks.app.templates.errors.error503
 * 'exceptionPath'  => blocks.app.templates.errors.errorPath
 */

/**
 * Offline Path Key
 * 'offlinePath'    => blocks.app.templates._offline
 */
