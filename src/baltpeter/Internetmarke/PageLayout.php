<?php

namespace baltpeter\Internetmarke;

class PageLayout extends ApiResult {
    /**
     * @var Size Dimension of the page format in millimeters in the x and y direction
     */
    protected $size;
    /**
     * @var string Page orientation (possible values: 'PORTRAIT' and 'LANDSCAPE')
     */
    protected $orientation;
    /**
     * @var LabelSpacing Spacing between labels in millimeters
     */
    protected $labelSpacing;
    /**
     * @var LabelCount Number of label items in the x and y direction
     */
    protected $labelCount;
    /**
     * @var Margin Inner margin size of the page format in millimeters
     */
    protected $margin;

    /**
     * PageLayout constructor.
     *
     * @param Size $size Dimension of the page format in millimeters in the x and y direction
     * @param string $orientation Page orientation (possible values: 'PORTRAIT' and 'LANDSCAPE')
     * @param LabelSpacing $label_spacing Spacing between labels in millimeters
     * @param LabelCount $label_count Number of label items in the x and y direction
     * @param Margin $margin Inner margin size of the page format in millimeters
     */
    public function __construct($size, $orientation, $label_spacing, $label_count, $margin) {
        $this->size = $size;
        $this->orientation = $orientation;
        $this->labelSpacing = $label_spacing;
        $this->labelCount = $label_count;
        $this->margin = $margin;
    }

    /**
     * @return Size Dimension of the page format in millimeters in the x and y direction
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param Size $size Dimension of the page format in millimeters in the x and y direction
     */
    public function setSize($size) {
        $this->size = $size;
    }

    /**
     * @return string Page orientation (possible values: 'PORTRAIT' and 'LANDSCAPE')
     */
    public function getOrientation() {
        return $this->orientation;
    }

    /**
     * @param string $orientation Page orientation (possible values: 'PORTRAIT' and 'LANDSCAPE')
     */
    public function setOrientation($orientation) {
        $this->orientation = $orientation;
    }

    /**
     * @return LabelSpacing Spacing between labels in millimeters
     */
    public function getLabelSpacing() {
        return $this->labelSpacing;
    }

    /**
     * @param LabelSpacing $labelSpacing Spacing between labels in millimeters
     */
    public function setLabelSpacing($labelSpacing) {
        $this->labelSpacing = $labelSpacing;
    }

    /**
     * @return LabelCount Number of label items in the x and y direction
     */
    public function getLabelCount() {
        return $this->labelCount;
    }

    /**
     * @param LabelCount $labelCount Number of label items in the x and y direction
     */
    public function setLabelCount($labelCount) {
        $this->labelCount = $labelCount;
    }

    /**
     * @return Margin Inner margin size of the page format in millimeters
     */
    public function getMargin() {
        return $this->margin;
    }

    /**
     * @param Margin $margin Inner margin size of the page format in millimeters
     */
    public function setMargin($margin) {
        $this->margin = $margin;
    }
}
