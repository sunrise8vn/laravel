<div class="inner">
    <table class="tbltk striped">
        <tbody>
        {{-- <th:block th:each="sF : ${specFurnitures}"> --}}
        @if(!@empty ($specFurnitures))
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Tay l&#225;i</b></td>
            <td style="width: 30%" class='td'>Loại tay l&#225;i <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->type_of_steering_wheel}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chất liệu <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->steering_wheel_material}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>N&#250;t bấm điều khiển t&#237;ch hợp <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->integrated_control_button}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Điều chỉnh <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->adjust_steering_wheel}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Lẫy chuyển số <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->gear_shift_lever}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Bộ nhớ vị tr&#237; <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->memory_location}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Gương chiếu hậu trong</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->rearview_mirror_in}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Tay nắm cửa trong</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->interior_door_handle}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Cụm đồng hồ</b></td>
            <td style="width: 30%" class='td'>Loại đồng hồ <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->watch_type}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Đ&#232;n b&#225;o chế độ Eco <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->eco_mode_indicator_light}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chức năng b&#225;o lượng ti&#234;u thụ nhi&#234;n liệu <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->function_of_fuel_consumption_indicator}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Chức năng b&#225;o vị tr&#237; cần số <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->gear_lever_position_notification_function}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>M&#224;n h&#236;nh hiển thị đa th&#244;ng tin <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->multi_information_display}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Cửa sổ trời</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->sunroof}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Hệ thống &#226;m thanh</b></td>
            <td style="width: 30%" class='td'>Đầu đĩa <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->music_player}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Số loa <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->number_of_speaker}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Cổng kết nối AUX <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->aux_connection_port}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Cổng kết nối USB <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->usb_connection_port}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Kết nối Bluetooth <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->bluetooth_connection}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống điều khiển bằng giọng n&#243;i <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->voice_control_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Bảng điều khiển từ h&#224;ng ghế sau <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->dashboard_from_rear_seat}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Kết nối wifi <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->wifi_connection}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Hệ thống đ&#224;m thoại rảnh tay <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->hands_free_conversation_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Kết nối điện thoại th&#244;ng minh <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->smartphone_connection}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 null'>
            <td style="width: 30%" class='th null'><b></b></td>
            <td style="width: 30%" class='td'>Kết nối HDMI <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->hdmi_connection}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-2 notnull'>
            <td style="width: 30%" class='th'><b>Hệ thống điều h&#242;a</b></td>
            <td style="width: 30%" class='td'>Trước <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->front_air_conditioning_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class='lv1 group-1 notnull'>
            <td style="width: 30%" class='th'><b>Hệ thống sạc kh&#244;ng d&#226;y</b></td>
            <td style="width: 30%" class='td null'> <i></i></td>
            <td class="hide"></td>
            <td style="width: 40%">
                <table>
                    <tbody>
                    <tr class='lv2'>
                        <td>{{$specFurnitures->wireless_charging_system}}</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        @endif
        {{-- </th:block> --}}
        </tbody>
    </table>
</div>