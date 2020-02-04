<div class="inner">
    <table class="tbltk striped">
        <tbody>
            @if(!@empty ($specEngineFrame))
                
        <!-- start engine block-->
        {{-- @foreach($specEngineFrame as $specEF) --}}
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>K&#237;ch thước</b></td>
            <td style="width: 30%" class='td'>K&#237;ch thước tổng thể b&#234;n ngo&#224;i (D x R x C) <i>(mm x mm x mm)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->external_dimension}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chiều d&#224;i cơ sở <i>(mm)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->length}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chiều rộng cơ sở (Trước/ sau) <i>(mm)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->width}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Khoảng s&#225;ng gầm xe <i>(mm)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->light_span}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>G&#243;c tho&#225;t (Trước/Sau) <i>(độ/degree)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->exit_angle}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>B&#225;n k&#237;nh v&#242;ng quay tối thiểu <i>(m)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->min_rotation_radius}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Trọng lượng kh&#244;ng tải <i>(kg)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->weight_without_load}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Trọng lượng to&#224;n tải <i>(kg)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->weight_full_load}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Dung t&#237;ch b&#236;nh nhi&#234;n liệu <i>(L)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->fuel_tank_capacity}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Dung t&#237;ch khoang h&#224;nh l&#253; <i>(L)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->luggage_capacity}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>K&#237;ch thước khoang chở h&#224;ng (D x R x C) <i>(mm)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->cargo_size}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Động cơ</b></td>
            <td style="width: 30%" class='td'>Loại động cơ <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->engine_type}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Số xy lanh <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->cylinder_number}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Bố tr&#237; xy lanh <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td">{{$specEngineFrame->cylinder_arrangement}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Dung t&#237;ch xy lanh <i>(cc)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->cylinder_capacity}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Tỉ số n&#233;n <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->compression_ratio}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống nhi&#234;n liệu <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->fuel_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Loại nhi&#234;n liệu <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->type_of_fuel}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>C&#244;ng suất tối đa <i>((KW (HP)/ v&#242;ng/ph&#250;t))</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->max_capacity}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>M&#244; men xoắn tối đa <i>(Nm @ v&#242;ng/ph&#250;t)</i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->max_torque}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
            <tr class='lv1 group-1 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Tốc độ tối đa</i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specEngineFrame->max_speed}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Ti&#234;u chuẩn kh&#237; thải <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->emission_standard}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống ngắt/ mở động cơ tự động <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->auto_engine}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Chế độ l&#225;i</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->drive_mode}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Hệ thống truyền động</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->transmission_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Hộp số</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->gear}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Hệ thống treo</b></td>
            <td style="width: 30%" class='td'>Trước <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->front_suspension}}</td>
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
                        <td>{{$specEngineFrame->rear_suspension}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Hệ thống l&#225;i</b></td>
            <td style="width: 30%" class='td'>Trợ lực tay l&#225;i <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->power_steering}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống tay l&#225;i tỉ số truyền biến thi&#234;n (VGRS) <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->vgrs}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>V&#224;nh &amp; lốp xe</b></td>
            <td style="width: 30%" class='td'>Loại v&#224;nh <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->type_of_rim}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>K&#237;ch thước lốp <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td">{{$specEngineFrame->tire_size}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Lốp dự ph&#242;ng <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->spare_tire}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Phanh</b></td>
            <td style="width: 30%" class='td'>Trước <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->front_brakes}}</td>
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
                        <td>{{$specEngineFrame->rear_brakes}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Ti&#234;u thụ nhi&#234;n liệu</b></td>
            <td style="width: 30%" class='td'>Kết hợp <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->combined_fuel}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Trong đ&#244; thị <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specEngineFrame->fuel_in_urban}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Ngo&#224;i đ&#244; thị <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td th:text="${sEF.fuel_outside_urban}">{{$specEngineFrame->fuel_outside_urban}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        {{-- @endforeach --}}
        <!-- end engine block-->
        @endif
        </tbody>
    </table>
</div>