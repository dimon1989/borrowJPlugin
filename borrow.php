<?php
// no direct access
defined( '_JEXEC' ) or die;

class plgUserBorrow extends JPlugin
{
	
	/**
	 * Plugin method with the same name as the event will be called automatically.
	 */
	 function onContentPrepareData($context, $data)
    {
        $app   = JFactory::getApplication();
        $view  = $app->input->get('view');
        $layout = JFactory::getApplication()->input->getCmd('layout', 'default');

        if ($context === 'com_users.profile' && $view === 'profile' && $layout === 'default') {

	        $userId = isset($data->id) ? $data->id : 0;
	        // Load the profile data from the database.
	        $db = JFactory::getDbo();
	        $db->setQuery(
	            'SELECT id, title, author, publisher, year, category, rentDate FROM #__books' .
	            ' WHERE user_id = '.(int) $userId
	        );
	        $results = $db->loadAssocList();

	        // Check for a database error.
	        if ($db->getErrorNum()) {
	            $this->_subject->setError($db->getErrorMsg());
	            return false;
	        }

	        // Merge the profile data.
	        $data->borrow = array();
	        foreach ($results as $numBook => $book) {
	            foreach ($book as $item => $value) {

	                $data->borrow[$numBook][$item] = $value;
	            }
	        }

	        $path = JPluginHelper::getLayoutPath('user', 'borrow');
	        ob_start();
			include $path;
      	}
		return true;
	}
}
?>