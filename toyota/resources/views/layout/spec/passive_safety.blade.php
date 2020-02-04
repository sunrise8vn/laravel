<div class="inner">
    <table class="tbltk striped">
        <tbody>
            @if(!@empty ($specPassiveSafety))
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>T&#250;i kh&#237;</b></td>
                <td style="width: 30%" class='td'>T&#250;i kh&#237; người l&#225;i &amp; h&#224;nh kh&#225;ch ph&#237;a trước <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->airbag_driver_and_front_passenger}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>T&#250;i kh&#237; b&#234;n h&#244;ng ph&#237;a trước <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->front_side_airbag}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>T&#250;i kh&#237; r&#232;m <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->curtain_airbag}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>T&#250;i kh&#237; b&#234;n h&#244;ng ph&#237;a sau <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->rear_side_airbag}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>T&#250;i kh&#237; đầu gối người l&#225;i <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->driver_knee_airbag}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>T&#250;i kh&#237; đầu gối h&#224;nh kh&#225;ch <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->passenger_knee_airbag}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Khung xe GOA</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->goa_chassis}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>D&#226;y đai an to&#224;n</b></td>
                <td style="width: 30%" class='td'>Trước <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->front_seatbelt}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Ghế c&#243; cấu tr&#250;c giảm chấn thương cổ</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->chair_has_structure_reduce_neck_injury}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Cột l&#225;i tự đổ</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->collapsible_steering_column}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>B&#224;n đạp phanh tự đổ</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specPassiveSafety->dumping_brake_pedal}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>