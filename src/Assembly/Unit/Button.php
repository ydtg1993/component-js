<?php


namespace DLP\Assembly\Unit;

use DLP\Assembly\Abs\Component;

/**
 * Class Button
 * @package DLP\Assembly\Unit
 */
class Button implements Component
{
    private $column;
    private $label;
    private $content;

    public function __construct(string $column,string $content)
    {
        $this->column = $column;
        $this->content = $content;
    }

    /**
     * @param $title
     * @return $this
     */
    public function label($title)
    {
        $this->label = $title;
        return $this;
    }

    public function __toString()
    {
        if(!$this->label) return $this->content;

        return <<<EOF
<div class="dlp dlp-form-row">
    <label class="dlp-text" for="{$this->column}">{$this->label}</label>{$this->content}
</div>
EOF;
    }
}
