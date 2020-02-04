<div class="inner">
    <table class="tbltk striped">
        <tbody>
            @if(!@empty ($specChair))
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Chất liệu bọc ghế</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->seat_cover_material}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Ghế trước</b></td>
                <td style="width: 30%" class='td'>Loại ghế <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->seat_type}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Điều chỉnh ghế l&#225;i <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->adjust_driver_seat}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Điều chỉnh ghế h&#224;nh kh&#225;ch <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->adjust_passenger_seat}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Bộ nhớ vị trí <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->memory_location}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Chức năng th&#244;ng gi&#243; <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->ventilation_function}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Chức năng sưởi <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->heating_function}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Ghế sau</b></td>
                <td style="width: 30%" class='td'>H&#224;ng ghế thứ hai <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->second_row}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Hàng ghế thứ ba <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->third_row}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Hàng ghế thứ tư <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->fourth_row}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Hàng ghế thứ năm <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->fifth_row}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-2 null'>
                <td style="width: 30%" class='th null'><b></b></td>
                <td style="width: 30%" class='td'>Tựa tay h&#224;ng ghế sau <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specChair->backrest_armrest}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>