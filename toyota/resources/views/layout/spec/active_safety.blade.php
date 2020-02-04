<div class="inner">
    <table class="tbltk striped">
        <tbody>
            @if(!empty($specActiveSafety))
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống chống b&#243; cứng phanh</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->anti_lock_braking_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống hỗ trợ lực phanh khẩn cấp</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->emergency_branking_force_support_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống ph&#226;n phối lực phanh điện tử</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->electronic_brake_force_distributuon_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống ổn định th&#226;n xe</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->vehicle_body_stability_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống kiểm so&#225;t lực k&#233;o</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->traction_control_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống hỗ trợ khởi h&#224;nh ngang dốc</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->system_support_horizontal_departure}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống hỗ trợ khởi h&#224;nh đỗ đ&#232;o</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->system_support_departure_pass_hill}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống lựa chọn vận tốc vượt địa h&#236;nh</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->speed_selection_system_over_terrain}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống th&#237;ch nghi địa h&#236;nh</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->terrain_adaptation_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Đ&#232;n b&#225;o phanh khẩn cấp</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->emergency_brake_light}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Camera l&#249;i</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->reverse_camera}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Cảm biến hỗ trợ đỗ xe</b></td>
                <td style="width: 30%" class='td'>Sau <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->rear_parking_assist_sensor}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>G&#243;c trước <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->front_parking_angle_sensor}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>G&#243;c sau <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specActiveSafety->rear_parking_angle_sensor}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>