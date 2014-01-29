<?php

namespace mako\core\services;

use \mako\i18n\I18n;

/**
 * I18n service.
 *
 * @author     Frederic G. Østby
 * @copyright  (c) 2008-2013 Frederic G. Østby
 * @license    http://www.makoframework.com/license
 */

class I18nService extends \mako\core\services\Service
{
	//---------------------------------------------
	// Class properties
	//---------------------------------------------

	// Nothing here

	//---------------------------------------------
	// Class constructor, destructor etc ...
	//---------------------------------------------

	// Nothing here

	//---------------------------------------------
	// Class methods
	//---------------------------------------------
	
	/**
	 * Registers the service.
	 * 
	 * @access  public
	 */

	public function register()
	{
		$this->application->registerSingleton(['mako\i18n\I18n', 'i18n'], function($app)
		{
			return new I18n($app->getApplicationPath(), $app->getLanguage());
		});
	}
}

/** -------------------- End of file -------------------- **/