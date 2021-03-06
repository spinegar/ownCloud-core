<?php
/**
 * ownCloud
 *
 * @author Thomas Müller
 * @copyright 2013 Thomas Müller deepdiver@owncloud.com
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCP;


/**
 * Class IServerContainer
 * @package OCP
 *
 * This container holds all ownCloud services
 */
interface IServerContainer {

	/**
	 * The contacts manager will act as a broker between consumers for contacts information and
	 * providers which actual deliver the contact information.
	 *
	 * @return \OCP\Contacts\IManager
	 */
	function getContactsManager();

	/**
	 * The current request object holding all information about the request currently being processed
	 * is returned from this method.
	 * In case the current execution was not initiated by a web request null is returned
	 *
	 * @return \OCP\IRequest|null
	 */
	function getRequest();

	/**
	 * Returns the preview manager which can create preview images for a given file
	 *
	 * @return \OCP\IPreview
	 */
	function getPreviewManager();

	/**
	 * Returns the tag manager which can get and set tags for different object types
	 *
	 * @see \OCP\ITagManager::load()
	 * @return \OCP\ITagManager
	 */
	function getTagManager();

	/**
	 * Returns the root folder of ownCloud's data directory
	 *
	 * @return \OCP\Files\Folder
	 */
	function getRootFolder();

	/**
	 * Returns a view to ownCloud's files folder
	 *
	 * @return \OCP\Files\Folder
	 */
	function getUserFolder();

	/**
	 * Returns an app-specific view in ownClouds data directory
	 *
	 * @return \OCP\Files\Folder
	 */
	function getAppFolder();

	/**
	 * Returns the user session
	 *
	 * @return \OCP\IUserSession
	 */
	function getUserSession();

	/**
	 * @return \OCP\INavigationManager
	 */
	function getNavigationManager();

	/**
	 * @return \OCP\IConfig
	 */
	function getConfig();

	/**
	 * get an L10N instance
	 * @param $app string appid
	 * @return \OCP\IL10N
	 */
	function getL10N($app);

	/**
	 * @return \OCP\IURLGenerator
	 */
	function getURLGenerator();

	/**
	 * @return \OCP\IHelper
	 */
	function getHelper();

	/**
	 * Returns an ICache instance
	 *
	 * @return \OCP\ICache
	 */
	function getCache();

	/**
	 * Returns the current session
	 *
	 * @return \OCP\ISession
	 */
	function getSession();

	/**
	 * Returns the activity manager
	 *
	 * @return \OCP\Activity\IManager
	 */
	function getActivityManager();

	/**
	 * Returns the current session
	 *
	 * @return \OCP\IDBConnection
	 */
	function getDatabaseConnection();

}
