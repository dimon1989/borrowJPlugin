<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.pagenavigation
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$url = JURI::base() . "plugins/user/borrow/assets/style.css";

$document = JFactory::getDocument();
$document->addStyleSheet($url);
?>
<div id="borrowBooks"><?php echo JText::_('PLG_USER_BORROW_BOOK_TABLE'); ?></div>
<table class="table table-striped table-hover">
        <thead>
        <tr>
            <th width="5%">
            	<?php echo JText::_('PLG_USER_BORROW_BOOK_ID'); ?>
            </th>
            <th width="20%">
                <?php echo JText::_('PLG_USER_BORROW_BOOK_TITLE'); ?>
            </th>
            <th width="14%">
                <?php echo JText::_('PLG_USER_BORROW_BOOK_AUTHOR');  ?>
            </th>
            <th width="14%">
                <?php echo JText::_('PLG_USER_BORROW_BOOK_PUBLISHER'); ?>
            </th>
            <th width="10%">
                <?php echo JText::_('PLG_USER_BORROW_BOOK_YEAR'); ?>
            </th>
            <th width="17%">
                <?php echo JText::_('PLG_USER_BORROW_BOOK_CATEGORY'); ?>
            </th>
            <th width="22%">
                <?php echo JText::_('PLG_USER_BORROW_RENT_DATE'); ?>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($data->borrow)) { ?>
            <?php foreach ($data->borrow as $item) {?>
            
                <tr>
                    <td align="center">
                        <?php echo $item['id']; ?>
                    </td>
                    <td align="center">
                        <?php echo $item['title']; ?>
                    </td>
                    <td align="center">
                       <?php echo $item['author']; ?>
                    </td>
                    <td align="center">
                       <?php echo $item['publisher']; ?>
                    </td>
                    <td align="center">
                        <?php echo $item['year']; ?>
                    </td>
                    <td align="center">
                        <?php echo $item['category']; ?>
                    </td>
                    <td align="center">
                       <?php echo $item['rentDate']; ?>
                    </td>
                    
                </tr>
            <?php } ?>
        <?php } ?>
        </tbody>
    </table>