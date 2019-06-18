@foreach ($activities as $activity)
    <tr>
        <td class="table-text">
            <div>{{ date('F j, Y, g:i a', strtotime($activity['time'])) }}</div>
        </td>
        <td class="table-text"><div>{{ $activity['status'] }}</div></td>
    </tr>
@endforeach