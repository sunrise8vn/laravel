<div class="inner">
    <table class="tbltk striped">
        <tbody>
            @if(!@empty ($specConvnient))
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>R&#232;m che nắng k&#237;nh sau</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->rear_glass_sun_blinds}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>R&#232;m che nắng cửa sau</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->rear_door_sun_blinds}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Cửa gi&#243; sau</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->rear_air_door}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Hộp l&#224;m m&#225;t</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->cooling_box}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Ch&#236;a kh&#243;a th&#244;ng minh &amp; khởi động bằng n&#250;t bấm</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->smart_key_and_push_button_start}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Kh&#243;a cửa điện</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->electric_door_lock}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Chức năng kh&#243;a cửa từ xa</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->remote_door_lock_function}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Cửa sổ điều chỉnh điện</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->adjust_power_window}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Cốp điều khiển điện</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->electric_control_scoop}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống điều khiển h&#224;nh tr&#236;nh</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specConvnient->cruise_control_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>