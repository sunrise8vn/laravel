<div class="inner">
    <table class="tbltk striped">
        <tbody>
            @if(!@empty ($specSecurity))
            <tr class='lv1 group-2 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống b&#225;o động</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specSecurity->alarm_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class='lv1 group-1 notnull'>
                <td style="width: 30%" class='th'><b>Hệ thống m&#227; h&#243;a kh&#243;a động cơ</b></td>
                <td style="width: 30%" class='td null'> <i></i></td>
                <td class="hide"></td>
                <td style="width: 40%">
                    <table>
                        <tbody>
                        <tr class='lv2'>
                            <td>{{$specSecurity->motor_lock_encryption_system}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>