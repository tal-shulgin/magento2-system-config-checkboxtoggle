<?php

namespace Mageit\SystemConfigCheckboxToggle\Magento\Framework\View\Element\Html;

use Magento\Framework\View\Element\Context;
use Magento\Config\Model\Config\Source\Yesno;
use Magento\Framework\View\Element\Html\Select;
use Magento\Framework\Exception\LocalizedException;

class Toggle extends Select
{
    /**
     * @var Yesno
     */
    private Yesno $source;

    public function __construct(
        Context $context,
        Yesno   $source,
        array   $data = []
    ) {
        parent::__construct($context, $data);
        $this->source = $source;
    }

    /**
     * @param $value
     * @return $this
     * @throws LocalizedException
     */
    public function setInputName($value): static
    {
        return $this->setName($value);
    }

    /**
     * @return string
     */
    protected function _toHtml(): string
    {
        if (!$this->getOptions()) {
            $this->setOptions($this->source->toOptionArray());
        }

        if (!$this->_beforeToHtml()) {
            return '';
        }

        $html = '<div name="' . $this->getName() . '" class="admin__actions-switch ' . $this->getClass() . '">';
        $selectedHtml = ' <%= option_extra_attrs.option_' . self::calcOptionHash('1') . ' %>';
        $html .= ' <input id="' . $this->getName() . '" type="checkbox" class="admin__actions-switch-checkbox input-'
            . $this->getColumnName() . '" ' . $selectedHtml . '" name="' . $this->getName() . '"/>' .
            '<label class="admin__actions-switch-label ' . $this->getColumnName() . '" for="' . $this->getName()
            . '" style="width: 70px;">' .
            '<span class="admin__actions-switch-text" data-text-on="' . __('Yes') . '" data-text-off="' . __('No')
            . '"></span></label>';
        $html .= '</div>';

        return $html;
    }
}
