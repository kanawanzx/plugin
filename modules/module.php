<?php

class Muria_coutdown_clock extends DSLC_Module {

    var $module_id;
    var $module_title;
    var $module_icon;
    var $module_category;

    function __construct()
    {

        $this->module_id       = 'Muria_coutdown_clock';
        $this->module_title    = __('Muria Countdown Clock', 'muria');
        $this->module_icon     = 'time';
        $this->module_category = 'Coutdown';
    }

    /**
     * Module Options
     *
     * @since 1.0
     */
    function options()
    {

        $dslc_options = array(
            /**
             * General
             */
            array(
                'label'   => __('Show On', 'muria'),
                'id'      => 'css_show_on',
                'std'     => 'desktop tablet phone',
                'type'    => 'checkbox',
                'choices' => array(
                    array(
                        'label' => __('Desktop', 'muria'),
                        'value' => 'desktop'
                    ),
                    array(
                        'label' => __('Tablet', 'muria'),
                        'value' => 'tablet'
                    ),
                    array(
                        'label' => __('Phone', 'muria'),
                        'value' => 'phone'
                    ),
                ),
            ),
            array(
                'label'                 => __('years', 'muria'),
                'id'                    => 'muria_years',
                'std'                   => '2016',
                'type'                  => 'select',
                'choices'               => array(
                    array(
                        'label' => __('2016', 'muria'),
                        'value' => '2016'
                    ),
                    array(
                        'label' => __('2017', 'muria'),
                        'value' => '2017'
                    ),
                    array(
                        'label' => __('2018', 'muria'),
                        'value' => '2018'
                    ),
                    array(
                        'label' => __('2019', 'muria'),
                        'value' => '2019'
                    ),
                    array(
                        'label' => __('2020', 'muria'),
                        'value' => '2020'
                    ),
                    array(
                        'label' => __('2021', 'muria'),
                        'value' => '2021'
                    ),
                    array(
                        'label' => __('2022', 'muria'),
                        'value' => '2022'
                    ),
                    array(
                        'label' => __('2023', 'muria'),
                        'value' => '2023'
                    ),
                    array(
                        'label' => __('2024', 'muria'),
                        'value' => '2024'
                    ),
                    array(
                        'label' => __('2025', 'muria'),
                        'value' => '2025'
                    ),
                    array(
                        'label' => __('2026', 'muria'),
                        'value' => '2026'
                    ),
                    array(
                        'label' => __('2027', 'muria'),
                        'value' => '2027'
                    ),
                    array(
                        'label' => __('2028', 'muria'),
                        'value' => '2028'
                    ),
                    array(
                        'label' => __('2029', 'muria'),
                        'value' => '2029'
                    ),
                    array(
                        'label' => __('2030', 'muria'),
                        'value' => '2030'
                    ),
                    array(
                        'label' => __('2031', 'muria'),
                        'value' => '2031'
                    ),
                    array(
                        'label' => __('2032', 'muria'),
                        'value' => '2032'
                    ),
                    array(
                        'label' => __('2033', 'muria'),
                        'value' => '2033'
                    ),
                    array(
                        'label' => __('2034', 'muria'),
                        'value' => '2034'
                    ),
                    array(
                        'label' => __('2035', 'muria'),
                        'value' => '2035'
                    ),
                    array(
                        'label' => __('2036', 'muria'),
                        'value' => '2036'
                    ),
                    array(
                        'label' => __('2037', 'muria'),
                        'value' => '2037'
                    ),
                    array(
                        'label' => __('2038', 'muria'),
                        'value' => '2038'
                    ),
                    array(
                        'label' => __('2039', 'muria'),
                        'value' => '2039'
                    ),
                    array(
                        'label' => __('2040', 'muria'),
                        'value' => '2040'
                    ),
                    array(
                        'label' => __('2041', 'muria'),
                        'value' => '2041'
                    ),
                    array(
                        'label' => __('2042', 'muria'),
                        'value' => '2042'
                    ),
                    array(
                        'label' => __('2043', 'muria'),
                        'value' => '2043'
                    ),
                    array(
                        'label' => __('2044', 'muria'),
                        'value' => '2044'
                    ),
                    array(
                        'label' => __('2045', 'muria'),
                        'value' => '2045'
                    ),
                    array(
                        'label' => __('2046', 'muria'),
                        'value' => '2046'
                    ),
                    array(
                        'label' => __('2047', 'muria'),
                        'value' => '2047'
                    ),
                    array(
                        'label' => __('2048', 'muria'),
                        'value' => '2048'
                    ),
                    array(
                        'label' => __('2049', 'muria'),
                        'value' => '2049'
                    ),
                    array(
                        'label' => __('2050', 'muria'),
                        'value' => '2050'
                    ),
                ),
                'refresh_on_change'     => true,
            ),
            array(
                'label'                 => __('months', 'muria'),
                'id'                    => 'muria_months',
                'std'                   => 'August',
                'type'                  => 'select',
                'choices'               => array(
                    array(
                        'label' => __('January', 'muria'),
                        'value' => 'January'
                    ),
                    array(
                        'label' => __('February', 'muria'),
                        'value' => 'February'
                    ),
                    array(
                        'label' => __('March', 'muria'),
                        'value' => 'March'
                    ),
                    array(
                        'label' => __('April', 'muria'),
                        'value' => 'April'
                    ),
                    array(
                        'label' => __('May', 'muria'),
                        'value' => 'May'
                    ),
                    array(
                        'label' => __('June', 'muria'),
                        'value' => 'June'
                    ),
                    array(
                        'label' => __('July', 'muria'),
                        'value' => 'July'
                    ),
                    array(
                        'label' => __('August', 'muria'),
                        'value' => 'August'
                    ),
                    array(
                        'label' => __('September', 'muria'),
                        'value' => 'September'
                    ),
                    array(
                        'label' => __('October', 'muria'),
                        'value' => 'October'
                    ),
                    array(
                        'label' => __('November', 'muria'),
                        'value' => 'November'
                    ),
                    array(
                        'label' => __('December', 'muria'),
                        'value' => 'December'
                    ),
                ),
                'refresh_on_change'     => true,
            ),
            array(
                'label'                 => __('Day', 'muria'),
                'id'                    => 'muria_days',
                'std'                   => '01',
                'type'                  => 'text',
                'refresh_on_change'     => true,
            ),
            array(
                'label'             => __('Hours', 'muria'),
                'id'                => 'muria_hours',
                'std'               => '07',
                'refresh_on_change' => true,
                'type'              => 'text',
            ),
            array(
                'label'             => __('Minutes', 'muria'),
                'id'                => 'muria_minutes',
                'std'               => '08',
                'refresh_on_change' => true,
                'type'              => 'text',
            ),
            array(
                'label'             => __('Second', 'muria'),
                'id'                => 'muria_seconds',
                'std'               => '07',
                'refresh_on_change' => true,
                'type'              => 'text',
            ),
            /**
             * Timing
             */
            array(
                'label'                 => __('Days  Color', 'muria'),
                'id'                    => 'muria_days_color',
                'std'                   => '#21c2f8',
                'type'                  => 'color',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '',
                'affect_on_change_rule' => '',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
            ),
            array(
                'label'                 => __('Hours  Color', 'muria'),
                'id'                    => 'muria_hours_color',
                'std'                   => '#f28776',
                'type'                  => 'color',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '',
                'affect_on_change_rule' => '',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
            ),
            array(
                'label'                 => __('Minutes  Color', 'muria'),
                'id'                    => 'muria_minutes_color',
                'std'                   => '#9675ed',
                'type'                  => 'color',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '',
                'affect_on_change_rule' => '',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
            ),
            array(
                'label'                 => __('Seconds  Color', 'muria'),
                'id'                    => 'muria_seconds_color',
                'std'                   => '#facc43',
                'type'                  => 'color',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '',
                'affect_on_change_rule' => '',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
            ),
            array(
                'label'                 => __('Number Text Color', 'muria'),
                'id'                    => 'css_number_text_color',
                'std'                   => '#272822',
                'type'                  => 'color',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>span',
                'affect_on_change_rule' => 'color',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
            ),
            array(
                'label'                 => __('Font Size', 'muria'),
                'id'                    => 'css_number_font_size',
                'std'                   => '48',
                'type'                  => 'slider',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>span',
                'affect_on_change_rule' => 'font-size',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
                'ext'                   => 'px'
            ),
            array(
                'label'                 => __('Font Weight', 'muria'),
                'id'                    => 'css_number_font_weight',
                'std'                   => '300',
                'type'                  => 'slider',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>span',
                'affect_on_change_rule' => 'font-weight',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
                'ext'                   => '',
                'min'                   => 100,
                'max'                   => 900,
                'increment'             => 100
            ),
            array(
                'label'                 => __('Font Family', 'muria'),
                'id'                    => 'css_number_font_family',
                'std'                   => 'Open Sans',
                'type'                  => 'font',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>span',
                'affect_on_change_rule' => 'font-family',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
            ),
            array(
                'label'                 => __('Line Height', 'muria'),
                'id'                    => 'css_number_lheight',
                'std'                   => '48',
                'type'                  => 'slider',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>span',
                'affect_on_change_rule' => 'line-height',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
                'ext'                   => 'px'
            ),
            array(
                'label'                 => __('Text Color', 'muria'),
                'id'                    => 'css_text_color',
                'std'                   => '#a1b1bc',
                'type'                  => 'color',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>h4',
                'affect_on_change_rule' => 'color',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
            ),
            array(
                'label'                 => __('Font Size Text', 'muria'),
                'id'                    => 'css_text_font_size',
                'std'                   => '18',
                'type'                  => 'slider',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>h4',
                'affect_on_change_rule' => 'font-size',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
                'ext'                   => 'px'
            ),
            array(
                'label'                 => __('Font Weight Text', 'muria'),
                'id'                    => 'css_text_font_weight',
                'std'                   => '600',
                'type'                  => 'slider',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>h4',
                'affect_on_change_rule' => 'font-weight',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
                'ext'                   => '',
                'min'                   => 100,
                'max'                   => 900,
                'increment'             => 100
            ),
            array(
                'label'                 => __('Font Family Text', 'muria'),
                'id'                    => 'css_text_font_family',
                'std'                   => 'Raleway',
                'type'                  => 'font',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>h4',
                'affect_on_change_rule' => 'font-family',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
            ),
            array(
                'label'                 => __('Line Height Text', 'muria'),
                'id'                    => 'css_text_lheight',
                'std'                   => '23',
                'type'                  => 'slider',
                'refresh_on_change'     => false,
                'affect_on_change_el'   => '.time_circles>div>h4',
                'affect_on_change_rule' => 'line-height',
                'section'               => 'styling',
                'tab'                   => __('Timing', 'muria'),
                'ext'                   => 'px'
            ),
             /**
             * Responsive Tablet
             */
            array(
                'label'   => __('Responsive', 'muria'),
                'id'      => 'css_res_t',
                'std'     => 'disabled',
                'type'    => 'select',
                'choices' => array(
                    array(
                        'label' => __('Disabled', 'muria'),
                        'value' => 'disabled'
                    ),
                    array(
                        'label' => __('Enabled', 'muria'),
                        'value' => 'enabled'
                    ),
                ),
                'section' => 'responsive',
                'tab'     => 'tablet',
            ),
            array(
                'label'                 => __('Margin Bottom', 'muria'),
                'id'                    => 'css_res_t_margin_bottom',
                'std'                   => '0',
                'type'                  => 'slider',
                'refresh_on_change'     => true,
                'affect_on_change_el'   => '.as_count_down',
                'affect_on_change_rule' => 'margin-bottom',
                'section'               => 'responsive',
                'tab'                   => 'tablet',
                'ext'                   => 'px',
            ),
            array(
                'label'                 => __('Padding Vertical', 'muria'),
                'id'                    => 'css_res_t_padding_vertical_form',
                'std'                   => '5',
                'type'                  => 'slider',
                'refresh_on_change'     => true,
                'affect_on_change_el'   => '.as_count_down',
                'affect_on_change_rule' => 'padding-top,padding-bottom',
                'section'               => 'styling',
                'ext'                   => 'px'
            ),
            array(
                'label'                 => __('Padding Horizontal', 'muria'),
                'id'                    => 'css_res_t_padding_horizontal_form',
                'std'                   => '5',
                'type'                  => 'slider',
                'refresh_on_change'     => true,
                'affect_on_change_el'   => '.as_count_down',
                'affect_on_change_rule' => 'padding-left,padding-right',
                'section'               => 'styling',
                'ext'                   => 'px'
            ),
            /**
             * Responsive Phone
             */
            array(
                'label'   => __('Responsive', 'muria'),
                'id'      => 'css_res_p',
                'std'     => 'disabled',
                'type'    => 'select',
                'choices' => array(
                    array(
                        'label' => __('Disabled', 'muria'),
                        'value' => 'disabled'
                    ),
                    array(
                        'label' => __('Enabled', 'muria'),
                        'value' => 'enabled'
                    ),
                ),
                'section' => 'responsive',
                'tab'     => 'phone',
            ),
            array(
                'label'                 => __('Margin Bottom', 'muria'),
                'id'                    => 'css_res_p_margin_bottom',
                'std'                   => '0',
                'type'                  => 'slider',
                'refresh_on_change'     => true,
                'affect_on_change_el'   => '.as_count_down',
                'affect_on_change_rule' => 'margin-bottom',
                'section'               => 'responsive',
                'tab'                   => 'phone',
                'ext'                   => 'px',
            ),
            array(
                'label'                 => __('Padding Vertical', 'muria'),
                'id'                    => 'css_res_p_padding_vertical_form',
                'std'                   => '5',
                'type'                  => 'slider',
                'refresh_on_change'     => true,
                'affect_on_change_el'   => '.as_count_down',
                'affect_on_change_rule' => 'padding-top,padding-bottom',
                'section'               => 'responsive',
                'tab'                   => 'phone',
                'ext'                   => 'px'
            ),
            array(
                'label'                 => __('Padding Horizontal', 'muria'),
                'id'                    => 'css_res_p_padding_horizontal_form',
                'std'                   => '5',
                'type'                  => 'slider',
                'refresh_on_change'     => true,
                'affect_on_change_el'   => '.as_count_down',
                'affect_on_change_rule' => 'padding-left,padding-right',
                'section'               => 'responsive',
                'tab'                   => 'phone',
                'ext'                   => 'px'
            ),
        );
        $dslc_options = array_merge($dslc_options, $this->shared_options('animation_options'));
        $dslc_options = array_merge($dslc_options, $this->presets_options());
        return apply_filters('dslc_module_options', $dslc_options, $this->module_id);
    }

    /**
     * Module Output
     *
     * @since 1.0
     */
    function output($options)
    {

        $this->module_start($options);
        /* Module output stars here */
        $avc =  $options['muria_months'].' '.$options['muria_days'].', '.$options['muria_years'].' '.$options['muria_hours'].':'.$options['muria_minutes'].':'.$options['muria_seconds'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $avc = strtotime('05/23/2016 18:33',time());
        ?>
            
        
            <div id="countdown5" class="muria_coutdow" data-date-now ="<?php echo time();?>" data-date-end ="<?php echo $avc ?>"  style="background-color:#e74c3c"></div>

        <?php
        /* Module output ends here */

        $this->module_end($options);
    }

}

//  add_action('plugins_loaded', 'Muria_coutdown_clock');
        