<?php
declare(strict_types=1);

namespace Mageit\SystemConfigCheckboxToggle\Magento\Framework\Data\Form\Element;

use Magento\Framework\Escaper;
use Magento\Framework\Data\Form\Element\Checkbox;
use Magento\Framework\Data\Form\Element\Factory;
use Magento\Framework\Data\Form\Element\CollectionFactory;

Class ToggleCheckbox extends Checkbox
{
    /**
     * {@inheritDoc}
     *
     * @return void
     */
    protected function _construct()
    {
        $this->setData('class', 'admin__actions-switch-checkbox hidden');
        $this->setData('onchange', 'this.value = this.checked;');
        $this->setIsChecked($this->getValue());
        //@codingStandardsIgnoreEnd
    }

    /**
     * Get the after element Javascript.
     *
     * @return string
     */
    public function getAfterElementJs(): string
    {
        $htmlId = $this->getHtmlId();
        $afterElementJs =  $this->getData('after_element_js');
        $afterElementJs .= '
            <label class="admin__actions-switch-label" for="' . $htmlId . '">
                <span class="admin__actions-switch-text"' . $this->getHtmlData() . '>
                </span>
            </label>
        ';

        return $afterElementJs;
    }

    /**
     * Gets the html data attributes.
     *
     * @return string
     */
    protected function getHtmlData(): string
    {
        if (empty($this->getValues())) {
            return "data-text-on=\"" . __('Yes') . "\" data-text-off=\"" . __('No') . "\"";
        }

        $htmlAttributes = '';
        foreach ($this->getValues() as $value) {
            $label = $value['label']->getText();
            if ($value['value'] == 1) {
                $htmlAttributes .= "data-text-on=\" {$label} \" ";
            } elseif ($value['value'] == 0) {
                $htmlAttributes .= "data-text-off=\" {$label} \" ";
            }
        }

        return $htmlAttributes;
    }
}
