<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class SingleAxis
{            
        
    /**
     * @var int zlevel value of all graghical elements in .
     * zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a seperate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
     * Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
     */
    public $zlevel = 0;        
        
    /**
     * @var int z value of all graghical elements in , which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
     * z has a lower priority to zlevel, and will not create new Canvas.
     */
    public $z = 2;        
        
    /**
     * @var string|int Distance between grid  component and the left side of the container.
     * left value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be left, center, or right.
     * If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
     */
    public $left = '5%';        
        
    /**
     * @var string|int Distance between grid  component and the top side of the container.
     * top value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
     * If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
     */
    public $top = '5%';        
        
    /**
     * @var string|int Distance between grid  component and the right side of the container.
     * right value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     */
    public $right = '5%';        
        
    /**
     * @var string|int Distance between grid  component and the bottom side of the container.
     * bottom value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     */
    public $bottom = '5%';        
        
    /**
     * @var string|int Width of grid  component. Adaptive by default.
     */
    public $width = 'auto';        
        
    /**
     * @var string|int Height of grid  component. Adaptive by default.
     */
    public $height = 'auto';        
        
    /**
     * @var string Orientation of the axis. By default, its horizontal. You can set it to be vertical to make a vertical axis.
     */
    public $orient = 'horizontal';        
        
    /**
     * @var string Type of axis
     * Option:
     * 
     * value
     *   Numerical axis, suitable for continuous data.
     * 
     * category
     *   Category axis, suitable for discrete category data. Data should only be set via data for this type.
     * 
     * time
     *   Time axis, suitable for continuous time series data. As compared to value axis, it has a better formatting for time and a different tick calculation method. For example, it decides to use month, week, day or hour for tick based on the range of span.
     * 
     * log
     *   Log axis, suitable for log data.
     */
    public $type = 'value';        
        
    /**
     * @var string Name of axis.
     */
    public $name;        
        
    /**
     * @var string Location of axis name.
     * Options: 
     * 
     * start
     * middle
     * end
     */
    public $nameLocation = 'start';        
        
    /**
     * @var SingleAxis\NameTextStyle Text style of axis name.
     */
    public $nameTextStyle;        
        
    /**
     * @var int Gap between axis name and axis line.
     */
    public $nameGap = 15;        
        
    /**
     * @var int Rotation of axis name.
     */
    public $nameRotate;        
        
    /**
     * @var boolean Whether axis is inversed. New option from ECharts 3.
     */
    public $inverse = false;        
        
    /**
     * @var boolean|array The boundary gap on both sides of a coordinate axis. The setting and behavior of category axes and non-category axes are different.
     * The boundaryGap of category axis can be set to either true or false. Default value is set to be true, in which case axisTick is served only as a separation line, and labels and data appear only in the center part of two axis ticks, which is called band.
     * For non-category axis, including time, numerical value, and log axes, boundaryGap is an array of two values, representing the spanning range between minimum and maximum value. The value can be set in numeric value or relative percentage, which becomes invalid after setting min and max.
     * Example: 
     * boundaryGap: [20%, 20%]
     */
    public $boundaryGap;        
        
    /**
     * @var int|string The minimun value of axis.
     * It can be set to a special value dataMin so that the minimum value on this axis is set to be the minimum label.
     * It will be automatically computed to make sure axis tick is equally distributed when not set.
     * In category axis, it can also be set as the ordinal number. For example, if a catergory axis has data: [categoryA, categoryB, categoryC], and the ordinal 2 represents categoryC. Moreover, it can be set as negative number, like -3.
     */
    public $min;        
        
    /**
     * @var int|string The maximum value of axis.
     * It can be set to a special value dataMax so that the minimum value on this axis is set to be the maximum label.
     * It will be automatically computed to make sure axis tick is equally distributed when not set.
     * In category axis, it can also be set as the ordinal number. For example, if a catergory axis has data: [categoryA, categoryB, categoryC], and the ordinal 2 represents categoryC. Moreover, it can be set as negative number, like -3.
     */
    public $max;        
        
    /**
     * @var boolean It is available only in numerical axis, i.e., type: value.
     * It specifies whether not to contain zero position of axis compulsively. When it is set to be true, the axis may not contain zero position, which is useful in the scatter chart for both value axes.
     * This configuration item is unavailable when the min and max are set.
     */
    public $scale = false;        
        
    /**
     * @var int Number of segments that the axis is split into. Note that this number serves only as a recommendation, and the true segments may be adjusted based on readability.
     * This is unavailable for category axis.
     */
    public $splitNumber = 5;        
        
    /**
     * @var int Minimum gap between split lines.
     * For example, it can be set to be 1 to make sure axis label is show as integer.
     * {
     *     minInterval: 1
     * }
     * 
     * It is available only for axis of type value.
     */
    public $minInterval = 0;        
        
    /**
     * @var int Compulsively set segmentation interval for axis.
     * As splitNumber is a recommendation value, the calculated tick may not be the same as expected. In this case, interval should be used along with min and max to compulsively set tickings. But in most cases, we do not suggest using this, out automatic calculation is enough for most situations.
     * This is unavailable for category axis. Timestamp should be passed for type: time axis. Logged value should be passed for type: log axis.
     */
    public $interval;        
        
    /**
     * @var int Base of logarithm, which is valid only for numeric axes with type: log.
     */
    public $logBase = 10;        
        
    /**
     * @var boolean True for axis that cannot be interacted with.
     */
    public $silent = false;        
        
    /**
     * @var boolean Whether the labels of axis triggers and reacts to mouse events.
     * Parameters of event includes:
     * {
     *     // Component type: xAxis, yAxis, radiusAxis, angleAxis
     *     // Each of which has an attribute for index, e.g., xAxisIndex for xAxis
     *     componentType: string,
     *     // Value on axis before being formatted.
     *     // Click on value label to trigger event.
     *     value: ,
     *     // Name of axis.
     *     // Click on laben name to trigger event.
     *     name: 
     * }
     */
    public $triggerEvent = false;        
        
    /**
     * @var SingleAxis\AxisLine Settings related to axis line.
     */
    public $axisLine;        
        
    /**
     * @var SingleAxis\AxisTick Settings related to axis tick.
     */
    public $axisTick;        
        
    /**
     * @var SingleAxis\AxisLabel Settings related to axis label.
     */
    public $axisLabel;        
        
    /**
     * @var SingleAxis\SplitLine SplitLine of axis in grid area.
     */
    public $splitLine;        
        
    /**
     * @var SingleAxis\SplitArea Split area of axis in grid area, not shown by default.
     */
    public $splitArea;        
        
    /**
     * @var array Category data, available in type: category axis.
     * Example:
     * // Name list of all categories
     * data: [Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday]
     * // Each item could also be a specific configuration item.
     * // In this case, `value` is used as the category name.
     * data: [{
     *     value: Monday,
     *     // Highlight Monday
     *     textStyle: {
     *         fontSize: 20,
     *         color: red
     *     }
     * }, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday]
     */
    public $data;        
        
    /**
     * @var SingleAxis\AxisPointer axisPointer settings on the axis.
     */
    public $axisPointer;        
        
    /**
     * @var SingleAxis\Tooltip tooltip settings in the coordinate system component.
     * 
     * General Introduction:
     * tooltip can be configured on different places:
     * 
     * Configured on glboal: tooltip
     * 
     * Configured in a coordinate system: grid.tooltip, polar.tooltip, single.tooltip
     * 
     * Configured in a series: series.tooltip
     * 
     * Configured in each item of series.data: series.data.tooltip
     */
    public $tooltip;

}