<div class="inner">
    <table class="tbltk striped">
        <tbody>
        <!-- start spec exteriors -->
        {{-- @foreach($specExteriors as $specEx) --}}
        @if(!@empty ($specExteriors))
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Cụm đ&#232;n trước</b></td>
            <td style="width: 30%" class='td'>Đ&#232;n chiếu gần <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->lamp_near}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Đ&#232;n chiếu xa <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->lamp_far}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Đ&#232;n chiếu s&#225;ng ban ng&#224;y <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->daytime_lamp}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống rửa đ&#232;n <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->lamp_washing_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống điều khiển đ&#232;n tự động <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->auto_lamp_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống nhắc nhở đ&#232;n s&#225;ng <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->light_reminder_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống mở rộng g&#243;c chiếu tự động <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->automatic_projection_angle_extension_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống c&#226;n bằng g&#243;c chiếu <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->projection_balance_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chế độ đ&#232;n chờ dẫn đường <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->guide_standby_light_mode}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Đ&#232;n b&#225;o phanh tr&#234;n cao</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->high_brake_light}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Đ&#232;n sương m&#249;</b></td>
            <td style="width: 30%" class='td'>Trước <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->front_fog_lamp}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Sau <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->rear_fog_lamp}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Gương chiếu hậu ngo&#224;i</b></td>
            <td style="width: 30%" class='td'>Chức năng điều chỉnh điện <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->electric_adjustment_function}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chức năng gập điện <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->electric_folding_function}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>T&#237;ch hợp đ&#232;n b&#225;o rẽ <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->integrated_turn_signal_light}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>T&#237;ch hợp đ&#232;n ch&#224;o mừng <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->integrated_welcome_light}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>M&#224;u <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->color}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chức năng tự điều chỉnh khi l&#249;i <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->self_adjusting_function_when_reversing}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Bộ nhớ vị tr&#237; <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->memory_location}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chức năng sấy gương <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->mirror_drying_function}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chức năng chống b&#225;m nước <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->water_repellent_funtion}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chức năng chống ch&#243;i tự động <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->automatic_anti_glare_function}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Gạt mưa</b></td>
            <td style="width: 30%" class='td'>Trước <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->rain_wipers_front}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Sau <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->rain_wipers_rear}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Chức năng sấy k&#237;nh sau</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->rear_glass_drying_function}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Ăng ten</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->antenna}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Tay nắm cửa ngo&#224;i</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->door_handle_outside}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Bộ qu&#226;y xe thể thao</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->sports_crank_set}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Thanh cản (giảm va chạm)</b></td>
            <td style="width: 30%" class='td'>Trước <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->front_bumper}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Sau <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->rear_bumper}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Lưới tản nhiệt</b></td>
            <td style="width: 30%" class='td'>Trước <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->front_grille}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Sau <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->rear_grille}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Chắn b&#249;n</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->fender}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Ống xả k&#233;p</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->dual_exhaust_pipe}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Thanh đỡ n&#243;c xe</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specExteriors->car_roof_support_bar}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        @endif
        {{-- @endforeach --}}
        <!-- end spec exteriors -->
        </tbody>
    </table>
</div>