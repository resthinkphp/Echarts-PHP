<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Tooltip
{            
        
    /**
     * @var boolean Whether to show the tooltip component, including tooltip floating layer and axisPointer.
     */
    public $show = true;        
        
    /**
     * @var string Type of triggering.
     * Options:
     * 
     * item
     *   Triggered by data item, which is mainly used for charts that dont have a category axis like scatter charts or pie charts.
     * 
     * axis
     *   Triggered by axes, which is mainly used for charts that have category axes, like bar charts or line charts.
     *  ECharts 2.x only supports axis trigger for category axis. In ECharts 3, it is supported for all types of axes in grid or polar. Also, you may assign axis with axisPointer.axis.
     * 
     * none
     *   Trigger nothing.
     */
    public $trigger = 'item';        
        
    /**
     * @var Tooltip\AxisPointer Configuration item for axis indicator.
     * tooltip.axisPointer is like syntactic sugar of axisPointer settings on axes (for example, xAxis.axisPointer or angleAxis.axisPointer). More detailed features can be configured on someAxis.axisPointer. But in common cases, using tooltip.axisPinter is more convenient.
     * 
     * Notice: configurations of tooltip.axisPointer has lower priority than that of someAxis.axisPointer.
     * 
     * 
     * 坐标轴指示器是指示坐标轴当前刻度的工具。
     * axisPointer is a tool for displaying reference line and axis value under mouse pointer.
     * For example:
     * 
     * 
     * 
     * In the demo above, axisPointer.link is used to link axisPointer from different coordinate systems.
     * axisPointer can also be used on touch device, where user can drag the button to move the reference line and label.
     * 
     * 
     * 
     * In the cases that more than one axis exist, axisPointer helps to look inside the data.
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * Notice:
     * Generally, axisPointers is configured in each axes who need them (for example xAxis.axisPointer), or configured in tooltip (for example tooltip.axisPointer).
     * But these configurations can only be configured in global axisPointer:
     * axisPointer.triggerOn, axisPointer.link。
     * 
     * 
     * 
     * How to display axisPointer:
     * In cartesian (grid) and polar](~polar) and (single axis, each axis has its own axisPointer.
     * Those axisPointer will not be displayed by default, utill configured as follows:
     * 
     * Set someAxis.axisPointer.show (like xAxis.axisPointer.show) as true. Then axisPointer of this axis will be displayed.
     * 
     * Set tooltip.trigger as axis, or set tooltip.axisPointer.type as cross. Then coordinate system will automatically chose the axes who will display their axisPointers. (tooltip.axisPointer.axis can be used to change the choice.) Notice, axis.axisPointer will override tooltip.axisPointer settings.
     * 
     * 
     * 
     * How to display the label of axisPointer:
     * The label of axisPointer will not be displayed by default(namely, only reference line will be displayed by default), utill configured as follows:
     * 
     * Set someAxis.axisPointer.label.show (for example xAxis.axisPointer.label.show) as true. Then the label of the axisPointer will be displayed.
     * 
     * Set tooltip.axisPointer.type as  cross. Then the label of the crossed axisPointers will be displayed.
     * 
     * 
     * 
     * How to configure axisPointer on touch device:
     * Set someAxis.axisPointer.handle.show (for example xAxis.axisPointer.handle.show as true. Then the button for dragging will be displayed. (This feature is not supported on polar).
     * Notice:
     * If tooltip does not work well in this case, try to settooltip.triggerOn as none (for the effect: show tooltip when finger holding on the button, and hide tooltip after finger left the button), or set tooltip.alwaysShowContent as true (then tooltip will always be displayed).
     * See the example.
     */
    public $axisPointer;        
        
    /**
     * @var boolean Whether to show the tooltip floating layer, whose default value is true. It should be configurated to be false, if you only need tooltip to trigger the event or show the axisPointer without content.
     */
    public $showContent = true;        
        
    /**
     * @var boolean Whether to show tooltip content all the time. By default, it will be hidden after some time. It can be set to be true to preserve displaying.
     * This attribute is newly added to ECharts 3.0.
     */
    public $alwaysShowContent = false;        
        
    /**
     * @var string Conditions to trigger tooltip. Options:
     * 
     * mousemove
     *   Trigger when mouse moves.
     * 
     * click
     *   Trigger when mouse clicks.
     * 
     * mousemove|click
     *   Trigger when mouse clicks and moves.
     * 
     * none
     *   Do not triggered by mousemove and click. Tooltip can be triggered and hidden manually by calling action.tooltip.showTip and action.tooltip.hideTip. It can also be triggered by axisPointer.handle in this case.
     * 
     * 
     * This attribute is new to ECharts 3.0.
     */
    public $triggerOn = 'mousemove|click';        
        
    /**
     * @var int Delay time for showing tooltip, in ms. No delay by default, and it is not recommended to set. Only valid when triggerOn is set to be mousemove.
     */
    public $showDelay = 0;        
        
    /**
     * @var int Delay time for hiding tooltip, in ms. It will be invalid when alwaysShowContent is true.
     */
    public $hideDelay = 100;        
        
    /**
     * @var boolean Whether mouse is allowed to enter the floating layer of tooltip, whose default value is false. If you need to interact in the tooltip like with links or buttons, it can be set as true.
     */
    public $enterable = true;        
        
    /**
     * @var boolean Whether confine tooltip content in the view rect of chart instance.
     * Useful when tooltip is cut because of overflow: hidden set on outer dom of chart instance, or because of narrow screen on mobile.
     */
    public $confine = false;        
        
    /**
     * @var int The transition duration of tooltips animation, in seconds. When it is set to be 0, it would move closely with the mouse.
     */
    public $transitionDuration = 0.4;        
        
    /**
     * @var string|array The position of the tooltips floating layer, which would follow the position of mouse by default.
     * Options:
     * 
     * Array
     *   Display the position of tooltips floating layer through array, which supports absolute position and relative percentage.
     *   Example:
     *   // absolute position, which is 10px to the left side and 10px to the top side of the container
     *   position: [10, 10]
     *   // relative position, in the exact center of the container
     *   position: [50%, 50%]
     * 
     * 
     * Function
     *   Callback function in the following form:
     *   (point: Array, params: Object|Array.&lt;Object&gt;, dom: HTMLDomElement, rect: Object, size: Object) =&gt; Array
     * 
     *   Parameters:
     *   point: Mouse position.
     *   param: The same as formatter.
     *   dom: The DOM object of tooltip.
     *   rect: It is valid only when mouse is on graphic elements, which stands for a bounding box with x, y, width, and height.
     *   size: The size of dom echarts container. For example: {contentSize: [width, height], viewSize: [width, height]}. 
     *   Return:
     *   Return value is an array standing for tooltip position, which can be absolute pixels, or relative percentage.
     *   Or can be an object, like {left: 10, top: 30}, or {right: 20%, bottom: 40}.
     *   For example:
     *   position: function (point, params, dom, rect, size) {
     *       // fixed at top
     *       return [point[0], 10%];
     *   }
     * 
     *   Or:
     *   position: function (pos, params, dom, rect, size) {
     *       // tooltip will be fixed on the right if mouse hovering on the left,
     *       // and on the left if hovering on the right.
     *       var obj = {top: 60};
     *       obj[[left, right][+(pos[0] &lt; size.viewSize[0] / 2)]] = 5;
     *       return obj;
     *   }
     * 
     * 
     * inside
     *  Center position of the graphic element where the mouse is in, which is only valid when trigger is item.
     * 
     * top
     *   Top position of the graphic element where the mouse is in, which is only valid when trigger is item.
     * 
     * left
     *   Left position of the graphic element where the mouse is in, which is only valid when trigger is item.
     * 
     * right
     *   Right position of the graphic element where the mouse is in, which is only valid when trigger is item.
     * 
     * bottom
     *   Bottom position of the graphic element where the mouse is in, which is only valid when trigger is item.
     */
    public $position;        
        
    /**
     * @var string|callable The content formatter of tooltips floating layer which supports string template and callback function.
     * 1. String template
     * The template variables are {a}, {b}, {c}, {d} and {e}, which stands for series name, data name and data value and ect. When trigger is set to be axis, there may be data from multiple series. In this time, series index can be refered as {a0}, {a1}, or {a2}.
     * {a}, {b}, {c}, {d} have different meanings for different series types:
     * 
     * Line (area) charts, bar (column) charts, K charts: {a} for series name, {b} for category name, {c} for data value, {d} for none;
     * 
     * Scatter (bubble) charts: {a} for series name, {b} for data name, {c} for data value, {d} for none;
     * 
     * Map: {a} for series name, {b} for area name, {c} for merging data, {d} for none;
     * 
     * Pie charts, gauge charts, funnel charts: {a} for series name, {b} for data item name, {c} for data value, {d} for percentage.
     * 
     * 
     * Example: 
     * formatter: {b0}: {c0}&lt;br /&gt;{b1}: {c1}
     * 
     * 2. Callback function
     * The format of callback function:
     * (params: Object|Array, ticket: string, callback: (ticket: string, html: string)) =&gt; string
     * 
     * The first parameter params is the data that the formatter needs. Its format is shown as follows:
     * {
     *     componentType: series,
     *     // Series type
     *     seriesType: string,
     *     // Series index in option.series
     *     seriesIndex: number,
     *     // Series name
     *     seriesName: string,
     *     // Data name, or category name
     *     name: string,
     *     // Data index in input data array
     *     dataIndex: number,
     *     // Original data as input
     *     data: Object,
     *     // Value of data
     *     value: number|Array,
     *     // Color of data
     *     color: string,
     * 
     *     // the percentage of pie chart
     *     percent: number,
     * 
     * }
     * 
     * When trigger is axis, or when tooltip is triggered by axisPointer, params is the data array of multiple series. The content of each item of the array is the same as above. Besides,
     * {
     *     componentType: series,
     *     // Series type
     *     seriesType: string,
     *     // Series index in option.series
     *     seriesIndex: number,
     *     // Series name
     *     seriesName: string,
     *     // Data name, or category name
     *     name: string,
     *     // Data index in input data array
     *     dataIndex: number,
     *     // Original data as input
     *     data: Object,
     *     // Value of data
     *     value: number|Array,
     *     // Color of data
     *     color: string,
     * 
     * }
     * 
     * Note: Using array to present all the parameters in ECharts 2.x is not supported anymore.
     * The second parameter ticket is the asynchronous callback flag which should be used along with the third parameter callback when it is used.
     * The third parameter callback is asynchronous callback. When the content of tooltip is acquired asynchronously, ticket and htm as introduced above can be used to update tooltip with callback.
     * Example:
     * formatter: function (params, ticket, callback) {
     *     $.get(detail?name= + params.name, function (content) {
     *         callback(ticket, toHTML(content));
     *     });
     *     return Loading;
     * }
     */
    public $formatter;        
        
    /**
     * @var string The background color of tooltips floating layer.
     */
    public $backgroundColor = 'rgba(50,50,50,0.7)';        
        
    /**
     * @var string The border color of tooltips floating layer.
     */
    public $borderColor = '#333';        
        
    /**
     * @var int The border width of tooltips floating layer.
     */
    public $borderWidth = 0;        
        
    /**
     * @var int The floating layer of tooltip space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
     * Examples: 
     * // Set padding to be 5
     * padding: 5
     * // Set the top and bottom paddings to be 5, and left and right paddings to be 10
     * padding: [5, 10]
     * // Set each of the four paddings seperately
     * padding: [
     *     5,  // up
     *     10, // right
     *     5,  // down
     *     10, // left
     * ]
     */
    public $padding = 5;        
        
    /**
     * @var Tooltip\TextStyle The text syle of tooltips floating layer.
     */
    public $textStyle;        
        
    /**
     * @var string Extra CSS style for floating layer. The following is an example for adding shadow.
     * extraCssText: box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
     */
    public $extraCssText;

}