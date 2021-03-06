<?php
namespace Mediamadefresh\Task\Block\Adminhtml;

class Task extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_task';
        $this->_blockGroup = 'Mediamadefresh_Task';
        $this->_headerText = __('Task');
        $this->_addButtonLabel = __('Add New Task');
        parent::_construct();
        if ($this->_isAllowedAction('Mediamadefresh_Task::save')) {
            $this->buttonList->update('add', 'label', __('Add New Task'));
        } else {
            $this->buttonList->remove('add');
        }
    }
    
    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}
