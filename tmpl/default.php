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
<div id="borrowBooks">Borrowed books</div>
<table class="table table-striped table-hover">
        <thead>
        <tr>
            <th width="5%">
            	<?php echo JText::_('Id'); ?>
            </th>
            <th width="20%">
                <?php echo JText::_('Title'); ?>
            </th>
            <th width="14%">
                <?php echo JText::_('Author');  ?>
            </th>
            <th width="14%">
                <?php echo JText::_('Publisher'); ?>
            </th>
            <th width="10%">
                <?php echo JText::_('Year'); ?>
            </th>
            <th width="17%">
                <?php echo JText::_('Category'); ?>
            </th>
            <th width="22%">
                <?php echo JText::_('Rental date'); ?>
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